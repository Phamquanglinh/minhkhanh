@php
    $title = "Tài liệu";
@endphp
@extends("layout.main")
@section("content")
    <div class="container">
        <div class="text-center text-danger h2 p-3">Tải tài liệu ở đây</div>
        <table class="table table-striped">
            <thead>
            <tr class="text-white bg-danger">
                <th scope="col">STT</th>
                <th scope="col">Tên tài liệu</th>
                <th scope="col">Loại</th>
                <th scope="col">Tải xuống</th>
            </tr>
            </thead>
            <tbody>
            @foreach($documents as $index => $document)
                @if((($index)>=$documents->start) && (($index) <= $documents->end))
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$document->name}}</td>
                        <td><span class="text-uppercase">{{explode('.',$document->path)[1]}}</span> File</td>
                        <td>
                            <a href="{{url($document->path)}}" class="nav-link text-danger"><i class="fas h3 fa-download"></i> Tải về</a>
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="container d-flex">
        <nav aria-label="..." class="m-auto">
            <ul class="pagination">
                @if($page > 1)
                    <li class="page-item">
                        <a class="page-link text-danger" href="{{route("document",$page-1)}}">Trang trước</a>
                    </li>
                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link text-danger" href="{{route("document",$page-1)}}">{{$page-1}}</a></li>
                @endif
                <li class="page-item ">
                    <a class="page-link bg-danger text-white" href="#">{{$page}}</a>
                </li>
                @if($page < $documents->count()/12)
                    <li class="page-item"><a class="page-link text-danger" href="{{route("document",$page+1)}}">{{$page+1}}</a></li>
                    <li class="page-item disabled"><a class="page-link text-danger" href="#">...</a></li>
                    <li class="page-item">
                        <a class="page-link text-danger" href="{{route("document",$page+1)}}">Trang sau</a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endsection
