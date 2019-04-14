<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
    
    public function create_pass(){


    	return view('dashboard');
    }

    public function save_pass(Request $r){

    	$pass = User::find(Auth::user()->id);
    	$pass ->first_login = 'true';
    	$pass ->password = bcrypt($r->input('password'));
    	$pass->save();
    	return redirect('user/index');
    }

public function logout(Request $request) {
  Auth::logout();
  return redirect('/login');
}

      public function index()
    {
        if(Auth::user()->company_code == ""){
        $user = User::where('role', '!=', 'admin')->get();    
        }else{
        $user = User::where('company_code',Auth::user()->company_code)->where('role', '!=', 'admin')->get();
        }
      



        return view('user/index')->with('user',$user);
    }

public function create(){

    return view('user/create');

}


public function save(Request $r){


$user = new User;
if(Auth::user()->role == 'superadmin'){
    $user->company_code = $r->input('company_code');

}
$user->company_code = Auth::user()->company_code;
$user->username = $r->input('username');
$user->password = bcrypt($r->input('password'));
$user->role = $r->input('role');
$user->first_login = 'false';
$user->save();
return redirect(url('user/index'));


}

public function edit($id){

$data['user'] = User::find($id);

return view('user/edit')->with($data);

}

public function update(Request $r){

$id = $r->input('id');
$user = User::find($id);
$user->company_code = Auth::user()->company_code;
$user->username = $r->input('username');
if($r->input('password') != ""){

$user->password = bcrypt($r->input('password'));
}else{
    $user->password = $user->password;
}

$user->role = $r->input('role');
$user->first_login = 'false';
$user->save();
return redirect(url('user/index'));


}
  public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(url('user/index'));
    }


    

}
