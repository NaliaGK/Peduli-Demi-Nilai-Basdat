<?php
 
namespace App\Http\Controllers;

use App\Models\Faskes;
use Illuminate\Http\Request;
 
class FaskesController extends Controller
{
  
    public function index()
    {
        $faskes = Faskes::all();
      return view ('index_faskes')->with('faskes', $faskes);
    }
 
    
    public function create()
    {
        return view('create_faskes');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Faskes::create($input);
        return redirect('faskes')->with('flash_message', 'Faskes Addedd!');  
    }
 
    
    public function show($id)
    {
        $faskes = Faskes::find($id);
        return view('show_faskes')->with('faskes', $faskes);
    }
 
    
    public function edit($id)
    {
        $faskes = Faskes::find($id);
        return view('edit_faskes')->with('faskes', $faskes);
    }
 
  
    public function update(Request $request, $id)
    {
        $faskes = Faskes::find($id);
        $input = $request->all();
        $faskes->update($input);
        return redirect('faskes')->with('flash_message', 'Faskes Updated!');  
    }
 
  
    public function destroy($id)
    {
        Faskes::destroy($id);
        return redirect('faskes')->with('flash_message', 'Faskes deleted!');  
    }

 
}
