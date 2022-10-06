<?php
 
namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
 
class ObatController extends Controller
{
  
    public function index()
    {
        $meds = Obat::all();
      return view ('index_obat')->with('meds', $meds);
    }
 
    
    public function create()
    {
        return view('create_obat');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Obat::create($input);
        return redirect('obat')->with('flash_message', 'Obat Addedd!');  
    }
 
    
    public function show($id)
    {
        $meds = Obat::find($id);
        return view('show_obat')->with('meds', $meds);
    }
 
    
    public function edit($id)
    {
        $meds = Obat::find($id);
        return view('edit_obat')->with('meds', $meds);
    }
 
  
    public function update(Request $request, $id)
    {
        $meds = Obat::find($id);
        $input = $request->all();
        $meds->update($input);
        return redirect('obat')->with('flash_message', 'Obat Updated!');  
    }
 
  
    public function destroy($id)
    {
        Obat::destroy($id);
        return redirect('obat')->with('flash_message', 'Obat deleted!');  
    }
}