<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public $user_id;
    public $user_role;
    public $user_name;
    public $user_image;
    public $user_email;
    public function authUser(){
        if(Auth::check()){
            $user=Auth::user();
            $this->user_id=$user->id;
            $this->user_role=$user->role;
            $this->user_image='public/'.$user->image;
            $this->user_name=$user->firstname.' '.$user->lastname;
            $this->user_email=$user->email;
        }else{
            $this->user_id=null;
            $this->user_role='quest';
            $this->user_image=null;
            $this->user_name=null;
            $this->user_email=null;
        }
    }
    public function home(Request $request){
        $this->authUser();
        $data=(object)[
            'id'=>$this->user_id,
            'name'=>$this->user_name,
            'image'=>$this->user_image,
            'email'=>$this->user_email,
            'role'=>$this->user_role,
        ];
        return view('layout.main')->with(['data'=>$data]);
    }
    public function info(Request $request){
        $this->authUser();
        $data=(object)[
            'id'=>$this->user_id,
            'name'=>$this->user_name,
            'image'=>$this->user_image,
            'email'=>$this->user_email,
            'role'=>$this->user_role,
        ];
        return view('layout.info')->with(['data'=>$data]);
    }
    public function agreement(Request $request){
        $this->authUser();
        $data=(object)[
            'id'=>$this->user_id,
            'name'=>$this->user_name,
            'image'=>$this->user_image,
            'email'=>$this->user_email,
            'role'=>$this->user_role,
        ];
        return view('layout.agreement')->with(['data'=>$data]);
    }
}
