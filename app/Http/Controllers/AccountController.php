<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class AccountController extends Controller
{
    public function viewIndex(){
        return view('index');
    }


    public function viewLogin(){

    	return view('login');
    }

    public function login(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        $email = $request->email;
        $password = $request->password;
        $isValid = auth()->guard('account')->attempt(['email'=>$email,'password'=>$password]);
        if($isValid){
            $request->session()->put('email', $email);
            return redirect('/home');
        }else{
            return back();
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('/index');
    }

    public function viewSignUp(){

    	return view('signup');
    }

    public function signup(Request $request){
        $this->validate($request,[
            'first_name' => 'required|max:25|not_regex:/[@$!%*#?&]/',
            'middle_name' => 'required|max:25|not_regex:/[@$!%*#?&]/',
            'last_name' => 'required|max:25|not_regex:/[@$!%*#?&]/',
            'gender' => 'required',
            'email' => 'required|email|unique',
            'role' => 'required',
            'password' => 'required|min:8|regex:/[0-9]/',
            'displaypicture' => 'required|image',
        ]);
        $account = new Account();
        $account->role_id = $request->role;
        $account->gender_id = $request->gender;
        $account->first_name = $request->firstn;
        $account->middle_name = $request->middlen;
        $account->last_name = $request->lastn;
        $account->email = $request->email;
        $account->password= Hash::make($request->password);
        $account->picture = $request->displaypicture;

        $saved = $account->save();

        if($saved){
            return redirect('/')->with('success',"Account Successfully Registered");
        }else{
            return back()->withErrors(new MessageBag(['Invalid data']));
        }
    }

    public function viewProfile($id){

    	$account = Account::find($id);

    	return view('profile',compact('account'));
    }

    public function viewUpdate($id){

    	$account = Account::find($id);

    	return view('update',compact('account'));
    }

    public function viewMaintenance(){

    	$accounts = Account::all();

    	return view('maintenance',compact('accounts'));
    }

    public function updateProfile(Request $request, $id){
        $account = Account::find($id);
        $rules = [
            'first_name' => 'required|max:25|not_regex:/[@$!%*#?&]/',
            'middle_name' => 'max:25|not_regex:/[@$!%*#?&]/',
            'last_name' => 'required|max:25|not_regex:/[@$!%*#?&]/',
            'gender' => 'required',
            'email' => 'required|email|unique',
            'role' => 'required',
            'password' => 'required|min:8|regex:/[0-9]/',
            'displaypicture' => 'required|image',
        ];

        $account->role_id = $request->role;
        $account->gender_id = $request->gender;
        $account->first_name = $request->firstn;
        $account->middle_name = $request->middlen;
        $account->last_name = $request->lastn;
        $account->email = $request->email;
        $account->password= Hash::make($request->password);
        $account->picture = $request->displaypicture;

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $account->save();

        return redirect()->back();
    }
}
