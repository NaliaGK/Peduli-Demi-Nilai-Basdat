<?php
 
namespace App\Http\Controllers;

use App\Models\DftrPCR;
use Illuminate\Http\Request;
 
class DftrPCRController extends Controller
{
  
    public function index()
    {
        $daftar = DftrPCR::all();
      return view ('index_dftrpcr')->with('daftar', $daftar);
    }
 
    
    public function create()
    {
        return view('create_dftrpcr');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        DftrPCR::create($input);
        return redirect('order-pcr')->with('flash_message', 'Order Addedd!');  
    }
 
    
    public function show($id)
    {
        $daftar = DftrPCR::find($id);
        return view('show_dftrpcr')->with('daftar', $daftar);
    }
 
    
    public function edit($id)
    {
        $daftar = DftrPCR::find($id);
        return view('edit_dftrpcr')->with('daftar', $daftar);
    }
 
  
    public function update(Request $request, $id)
    {
        $daftar = DftrPCR::find($id);
        $input = $request->all();
        $daftar->update($input);
        return redirect('order-pcr')->with('flash_message', 'Order Updated!');  
    }
 
  
    public function destroy($id)
    {
        DftrPCR::destroy($id);
        return redirect('order-pcr')->with('flash_message', 'Order deleted!');  
    }

 
}
