<?php
 
namespace App\Http\Controllers;

use App\Models\Booster;
use Illuminate\Http\Request;
 
class BoosterController extends Controller
{
  
    public function index()
    {
        $boost = Booster::all();
      return view ('index_booster')->with('boost', $boost);
    }
 
    
    public function create()
    {
        return view('create_booster');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Booster::create($input);
        return redirect('booster')->with('flash_message', 'Booster Addedd!');  
    }
 
    
    public function show()
    {
        $boost = Booster::all();
        return view('show_booster')->with('boost', $boost);
    }
 
    
    public function edit($id)
    {
        $boost = Booster::find($id);
        return view('edit_booster')->with('boost', $boost);
    }
 
  
    public function update(Request $request, $id)
    {
        $boost = Booster::find($id);
        $input = $request->all();
        $boost->update($input);
        return redirect('booster')->with('flash_message', 'Booster Updated!');  
    }
 
  
    public function destroy($id)
    {
        Booster::destroy($id);
        return redirect('booster')->with('flash_message', 'Booster deleted!');  
    }
}