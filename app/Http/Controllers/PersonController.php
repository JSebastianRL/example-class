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
    public function edit($id){
        $person = Person::find($id);
        return view('edit',compact('person'));
    }
    public function update(Request $request, $id)
    {   
        $person = Person::find($id);
        $person = new Person($request->all());
        // $person->name=$request->input('name');
        // $person->surname=$request->input('surname');
        // $person->age=$request->input('age');
        // $person->phone=$request->input('phone');
        // $person->email=$request->input('email');
        $person->save();
        return view('welcome', compact('person'));
}
}
