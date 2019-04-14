<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Nasabah;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

public function superadmin(){

    $data['user'] = \App\User::where('role','admin')->get();
    return view('superadmin/home')->with($data);

}

public function create(){

    return view('superadmin/create');

}


public function save(Request $r){


$user = new User;
    
$user->company_code = $r->input('company_code');

$user->username = $r->input('username');
$user->password = bcrypt($r->input('password'));
$user->role = 'admin';
$user->first_login = 'true';
$user->save();
return redirect(url('superadmin/home'));


}
public function edit($id){

$data['user'] = User::find($id);

return view('superadmin/edit')->with($data);

}

public function update(Request $r){

$id = $r->input('id');
$user = User::find($id);
$user->company_code = $r->input('company_code');

$user->username = $r->input('username');
if($r->input('password') != ""){

$user->password = bcrypt($r->input('password'));
}else{
    $user->password = $user->password;
}

$user->role = 'admin';
$user->first_login = 'true';
$user->save();
return redirect(url('superadmin/home'));


}


  public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(url('superadmin/home'));
    }
}
