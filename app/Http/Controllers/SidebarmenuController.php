<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class SidebarmenuController extends Controller
{
    function index() {
    	if(Auth::user()->role == "admin")
    		return view('home');
    	else
    		return view('regularuser');
    }

    function showUsers(){
	$allusers = User::all();
	return view('sidebarmenu/sidebarusers', compact('allusers'));
    }

    function addUsers(){
	return view('sidebarmenu/adduserform');

	}

	function saveUser(Request $request){
		echo ($request->name." ".$request->email." ".bcrypt($request->password)." ".$request->role." ".$request->_token);
		$new_user = new User();
		$new_user->name = $request->name;
		$new_user->email = $request->email;
		$new_user->password = bcrypt($request->password);
		$new_user->role = $request->role;
		$new_user->remember_token = $request->_token;
		$new_user->save();

		return redirect('sidebarmenu/users');
		
	}


	function deleteUser($id){
		$usertobe_deleted = User::find($id);
		$usertobe_deleted->delete();
		$allusers = User::all();
		
		// Session::flash('message', 'User Successfully Deleted');
		return redirect('sidebarmenu/users');

	}


	function edituserform($id){
		$utbe = User::find($id);

		// Session::flash('message', 'Edit Article');

		return view('sidebarmenu/edituserform', compact('utbe'));
	}

	function editUser($id, Request $request){
		
		$utbe = User::find($id);	
		
		$utbe->name = $request->name;
		$utbe->email = $request->email;
		$utbe->password = bcrypt($request->password);
		$utbe->role = $request->role;
		$utbe->remember_token = $request->_token;
		$utbe->save();

		// Session::flash('message', 'User Successfully Edited');

		return redirect('sidebarmenu/users');
		
		

	}


}
