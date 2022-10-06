<?php
 
namespace App\Http\Controllers;

use App\Models\PCR;
use Illuminate\Http\Request;
 
class PCRController extends Controller
{
  
    public function index()
    {
        $pcr = PCR::all();
      return view ('index_pcr')->with('pcr', $pcr);
    }
 
    
    public function create()
    {
        return view('create_pcr');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        PCR::create($input);
        return redirect('pcr')->with('flash_message', 'PCR Addedd!');  
    }
 
    
    public function show($id)
    {
        $pcr = PCR::find($id);
        return view('show_pcr')->with('pcr', $pcr);
    }
 
    
    public function edit($id)
    {
        $pcr = PCR::find($id);
        return view('edit_pcr')->with('pcr', $pcr);
    }
 
  
    public function update(Request $request, $id)
    {
        $pcr = PCR::find($id);
        $input = $request->all();
        $pcr->update($input);
        return redirect('pcr')->with('flash_message', 'PCR Updated!');  
    }
 
  
    public function destroy($id)
    {
        PCR::destroy($id);
        return redirect('pcr')->with('flash_message', 'PCR deleted!');  
    }
}