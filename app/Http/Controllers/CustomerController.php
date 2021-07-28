<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('customAuth');
    }
    public function index()
    {
        $user = User::find(backpack_user()->id);
        $profile = $user->getProfile()->first();
        if (isset($profile->phone)) {
            $profile->dict = array_reverse(explode('-', $profile->address));
            return view("frontend.profile", ['profile' => $profile]);
        } else {
            return view("frontend.profile");
        }

    }

    public function save(Request $request)
    {
        $checkUser = User::where('email', '=', $request->email)->first();
        if (isset($checkUser->name) && (backpack_user()->email != $request->email)) {
            return redirect()->back()->with('fail', 'Email đã có người đăng ký');
        } else {
            $user = [
                'name' => $request->name,
                'email' => $request->email,
            ];
            $newCustomer = [
                'user_id' => backpack_user()->id,
                'phone' => $request->phone,
                'address' => $request->address,
            ];
            $checkCustomer = Customer::where('user_id', '=', backpack_user()->id)->first();
            if (isset($checkCustomer->phone)) {
                Customer::where('user_id', '=', backpack_user()->id)->update($newCustomer);
            } else {
                Customer::create($newCustomer);
            }
            User::find(backpack_user()->id)->update($user);
            return redirect()->back()->with('success', 'Cập nhật thông tin thành công');
        }

    }
    public function changePassword(Request $request){
        $user = User::where('id','=',backpack_user()->id)->first();
        if(Hash::check($request->oldPassword,$user->password)){
            if($request->newPassword == $request->rePassword){
                User::where('id','=',backpack_user()->id)->update(['password'=>Hash::make($request->newPassword)]);
                return redirect()->back()->with('success',"Đổi mật khẩu thành công");
            }else{
                return redirect()->back()->with('match-password',"Mật khẩu mới không khớp với mật khẩu nhập lại");
            }
        }else{
            return redirect()->back()->with('incorrect-password',"Mật khẩu cũ không chính xác");
        }
    }
}
