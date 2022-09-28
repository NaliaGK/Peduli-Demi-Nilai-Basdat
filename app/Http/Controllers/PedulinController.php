<?php
 
namespace App\Http\Controllers;

use App\Models\Pedulin;
use Illuminate\Http\Request;
 
class PedulinController extends Controller
{
  
    public function index()
    {
        $pedulins = Pedulin::all();
      return view ('index')->with('pedulins', $pedulins);
    }
 
    
    public function create()
    {
        return view('create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Pedulin::create($input);
        return redirect('pedulin')->with('flash_message', 'User Addedd!');  
    }
 
    
    public function show($id)
    {
        $pedulin = Pedulin::find($id);
        return view('show')->with('pedulins', $pedulin);
    }
 
    
    public function edit($id)
    {
        $pedulin = Pedulin::find($id);
        return view('edit')->with('pedulins', $pedulin);
    }
 
  
    public function update(Request $request, $id)
    {
        $pedulin = Pedulin::find($id);
        $input = $request->all();
        $pedulin->update($input);
        return redirect('pedulin')->with('flash_message', 'User Updated!');  
    }
 
  
    public function destroy($id)
    {
        Pedulin::destroy($id);
        return redirect('pedulin')->with('flash_message', 'User deleted!');  
    }
}