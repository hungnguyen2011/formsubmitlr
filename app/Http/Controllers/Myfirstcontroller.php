<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listuser;

class Myfirstcontroller extends Controller
{
    //
    public function getcontroller(){
    	return view('Myfirstview');
    }

    public function getDanhSach(){
    	$user=listuser::all();
    	return view('danhsach',['user'=>$user]);
    }

    public function getThem(){
     	return view('them');
    }

    public function postThem(Request $request){
    	$this->validate($request,
            [
                'txt_username'=>'required|min:3|unique:tbl_listuser,username',
                'txt_email'=>'required|email',
                'txt_address'=>'required'
            ],
            [
                'txt_username.required'=>'Bạn chưa nhập Username',
                'txt_username.min'=>'Username quá ngắn',
                'txt_username.unique'=>'Username đã tồn tại',

                'txt_email.required'=>'Bạn chưa nhập Email',
                'txt_email.email'=>'Email chưa đúng định dạng',

                'txt_address.required'=>'Bạn chưa nhập địa chỉ'
            ]);
        $user = new listuser;
        $user->username=$request->txt_username;
        $user->email=$request->txt_email;
        $user->address=$request->txt_address;
        $user->save();

        return redirect('thaotac/danhsach');
    }

    public function getSua($id){
        $user= listuser::find($id);
        return view('sua',['user'=>$user]);
    }

    public function postSua(Request $request,$id){
        $user= listuser::find($id);
        $this->validate($request,
            [
                'txt_username'=>'required|min:3|unique:tbl_listuser,username',
                'txt_email'=>'required|email',
                'txt_address'=>'required'
            ],
            [
                'txt_username.required'=>'Bạn chưa nhập Username',
                'txt_username.min'=>'Username quá ngắn',
                'txt_username.unique'=>'Username đã tồn tại',

                'txt_email.required'=>'Bạn chưa nhập Email',
                'txt_email.email'=>'Email chưa đúng định dạng',

                'txt_address.required'=>'Bạn chưa nhập địa chỉ'
            ]);
        $user->username=$request->txt_username;
        $user->email=$request->txt_email;
        $user->address=$request->txt_address;
        $user->save();
        return redirect('thaotac/danhsach');
    }


    public function getXoa($id){
        $user= listuser::find($id);
        $user->delete();

        return redirect('thaotac/danhsach');
    }
}
