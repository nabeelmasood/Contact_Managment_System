<?php

namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\contact;
class contactController extends Controller
{
    public function index()
    {
        $contacts = contact::all();
        return view ('contacts.index')->with('contacts', $contacts);
    }
 
    
    public function create()
    {
        return view('contacts.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        contact::create($input);
        return redirect('contact')->with('flash_message', 'contact Addedd!');  
    }
 
    
    public function show($id)
    {
        $contact = contact::find($id);
        return view('contacts.show')->with('contacts', $contact);
    }
 
    
    public function edit($id)
    {
        $contact = contact::find($id);
        return view('contacts.edit')->with('contacts', $contact);
    }
 
  
    public function update(Request $request, $id)
    {
        $contact = contact::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'contact Updated!');  
    }
 
   
    public function destroy($id)
    {
        contact::destroy($id);
        return redirect('contact')->with('flash_message', 'contact deleted!');  
    }
}
