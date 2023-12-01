<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
    public function create(Request $request){
        $this->authUser();
        $data=(object)[
            'id'=>$this->user_id,
            'name'=>$this->user_name,
            'image'=>$this->user_image,
            'email'=>$this->user_email,
            'role'=>$this->user_role,
        ];
        return view('auth.reg')->with(['data'=>$data]);
    }
    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'firstname'=>['required','alpha'],
            'lastname'=>['required','alpha'],
            'patronymic'=>['nullable'],
            'email'=>['email','unique:users'],
            'password'=>['required','min:6','confirmed']
        ]);
        if($validator->fails()){
            return redirect()->route('create')->with('success','Ошибка регистрации');
        }
        else{
            User::create($validator->validated());
            return redirect()->route('login')->with('success','Регистрации прошла успешно');
        }
    }
    public function login(Request $request){
        $this->authUser();
        $data=(object)[
            'id'=>$this->user_id,
            'name'=>$this->user_name,
            'image'=>$this->user_image,
            'email'=>$this->user_email,
            'role'=>$this->user_role,
        ];
        return view('auth.auth')->with(['data'=>$data]);
    }
    public function signup(Request $request){
        if(Auth::attempt($request->only(['email','password']))){
            return redirect()->route('home')->with('success','Вы авторизованы');
        }
        else{
            return redirect()->route('login')->with('success','Ошибка авторизации');
        }
    }
    public function logout(Request $request){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect()->route('home')->with('success','Вы вышли');
    }
}
