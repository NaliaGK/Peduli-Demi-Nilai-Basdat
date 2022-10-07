<?php
 
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
 
class UserController extends Controller
{
  
    public function index()
    {
        $users = User::all();
      return view ('index_user')->with('users', $users);
    }
 
    
    public function create()
    {
        return view('create_user');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('users')->with('flash_message', 'User Addedd!');  
    }
 
    
    public function show($id)
    {
        $users = User::find($id);
        return view('show_user')->with('users', $users);
    }
 
    
    public function edit($id)
    {
        $users = User::find($id);
        return view('edit_user')->with('users', $users);
    }
 
  
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('users')->with('flash_message', 'User Updated!');  
    }
 
  
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('users')->with('flash_message', 'User deleted!');  
    }
}