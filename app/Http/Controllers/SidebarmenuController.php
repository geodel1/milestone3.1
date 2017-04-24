<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Item;
use App\Supplier;

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


	function showItems(){
	$items = Item::all();
	return view('sidebarmenu/sidebaritems', compact('items'));
	}

	function addItems(){
	return view('sidebarmenu/additemform');


	}

	function saveItems(Request $request){
		echo ($request->item_name." ".$request->description." ".$request->user_id." ".$request->user_name." ".$request->category_name." ".$request->UOM_name." ".$request->supplier_name);
		$new_item = new Item();
		$new_item->item_name = $request->item_name;
		$new_item->description = $request->description;
		$new_item->user_id = Auth::user()->id;
		$new_item->user_name= Auth::user()->name;
		$new_item->category_name = $request->category_name;
		$new_item->UOM_name = $request->UOM_name;
		$new_item->supplier_name = $request->supplier_name;
		$new_item->save();

		return redirect('sidebarmenu/sidebaritems');
		
	}
		
	function edititemform($id){
		$itbe = Item::find($id);

		// Session::flash('message', 'Edit Article');

		return view('sidebarmenu/edititemform', compact('itbe'));
	}

	function editItem($id, Request $request){
		
		$itbe = Item::find($id);	
		
		$itbe->item_name = $request->item_name;
		$itbe->description = $request->description;
		$itbe->user_id = $request->user_id;
		$itbe->user_name = $request->user_name;
		$itbe->category_name = $request->category_name;
		$itbe->UOM_name = $request->UOM_name;
		$itbe->supplier_name = $request->supplier_name;
		$itbe->save();

		// Session::flash('message', 'User Successfully Edited');

		return redirect('sidebarmenu/sidebaritems');
		
	}

	function deleteItem($id){
		$itbe = Item::find($id);
		$itbe->delete();
		$items = Item::all();
		
		// Session::flash('message', 'User Successfully Deleted');
		return redirect('sidebarmenu/sidebaritems');

	}


	function showSuppliers(){
	$suppliers = Supplier::all();
	return view('sidebarmenu/sidebarsuppliers', compact('suppliers'));
	}

	function addSupplier(){
	return view('sidebarmenu/addsupplierform');


	}

	function saveSupplier(Request $request){
		echo ($request->supplier_name." ".$request->supplier_address." ".$request->supplier_email." ".$request->contact_no." ".$request->order_price." ".$request->terms);
		$new_supplier = new Supplier();
		$new_supplier->supplier_name = $request->supplier_name;
		$new_supplier->supplier_address = $request->supplier_address;
		$new_supplier->supplier_email = $request->supplier_email;
		$new_supplier->contact_no = $request->contact_no;
		$new_supplier->order_price = $request->order_price;
		$new_supplier->terms = $request->terms;
		
		$new_supplier->save();

		return redirect('sidebarmenu/sidebarsuppliers');
		
	}

	function deleteSupplier($id){
		$stbd = Supplier::find($id);
		$stbd->delete();
		$stbd = Supplier::all();
		
		// Session::flash('message', 'User Successfully Deleted');
		return redirect('sidebarmenu/sidebarsuppliers');

	}
}
