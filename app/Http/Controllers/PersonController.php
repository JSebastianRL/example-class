<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{

    public function store(Request $request)
    {
        $person = new Person($request->all());
        $person->save();
        return back();
    }
    public function delete($id)
    {
        $person = Person::find($id);
        $person -> delete();
        return back();
    }
    public function edit(Person $person){
        return view('edit',compact('person'));
    }
    public function update(Request $request)
    {   
        $person = Person::find($id);
        $data = $request -> only('name','surname','age','phone','email');
        $person= $request->all();
        $person->update($data);

        return redirection()->back();
    }
}
