@extends("layout.main")
@section("content")
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6 col-12 bg-light rounded">
                <div class="h2 pt-5">Thông tin cá nhân</div>
                <hr>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('fail'))
                    <div class="alert alert-danger">
                        {{ session('fail') }}
                    </div>
                @endif
                <form action="{{route("profile.store")}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input type="text" class="form-control" name="name" placeholder="Nguyễn Văn A"
                               value="{{backpack_user()->name}}" required>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control" name="phone" placeholder="+(84)123456789"
                               value=" @if(isset($profile)){{$profile->phone}}@endif" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="example@mail.com"
                               value="{{backpack_user()->email}}" required>
                        <small class="text-danger">Chú ý : Đây là email để đăng nhập , nếu thay đổi email sẽ thay đổi
                            thông tin đăng nhập</small>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="exampleFormControlSelect1">Tỉnh</label>
                            <select class="form-control" id="tinh">
                                @if(isset($profile))
                                    <option>{{$profile->dict[0]}}</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group col">
                            <label for="exampleFormControlSelect1">Huyện</label>
                            <select class="form-control" id="huyen" disabled>
                                @if(isset($profile))
                                    <option>{{$profile->dict[1]}}</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="extra-address">Địa chỉ chi tiết</label>
                        <input type="text" class="form-control" id="extra-address"
                               @if(isset($profile))
                               {{$extra = ""}}
                               @foreach($profile->dict as $key => $data)
                               @if($key>1)
                               {{$extra = $data.",".$extra}}
                               @endif
                               @endforeach
                               value="{{$extra}}"
                               @else
                               disabled
                               @endif
                               placeholder="Thôn(Phố),Phường(Xã) ...." required>
                    </div>
                    <input type="text" class="d-none form-control" id="address"
                           @if(isset($profile)) value="{{$profile->address}}" @endif name="address">
                    <div class="text-left">
                        <button type="submit" class="btn btn-outline-danger">Cập nhật thông tin</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-12 bg-light rounded">
                <div class="h2 pt-5">Đổi mật khẩu</div>
                <hr>
                <form action="{{route("change.password")}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mật khẩu cũ</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="oldPassword"
                               placeholder="Password" required>
                        @if (session('incorrect-password'))
                            <div class="alert alert-danger">
                                {{ session('incorrect-password') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2">Mật khẩu mới</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" name="newPassword"
                               placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword3">Mật khẩu nhập lại mật khẩu</label>
                        <input type="password" class="form-control" id="exampleInputPassword3" name="rePassword"
                               placeholder="Password" required>
                        @if (session('match-password'))
                            <div class="alert alert-success">
                                {{ session('match-password') }}
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-danger">Đổi mật khẩu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section("loaded")
    <script src='{{asset("js/country.js")}}'></script>
@endsection
