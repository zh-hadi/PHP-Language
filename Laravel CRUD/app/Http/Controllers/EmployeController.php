<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    //

    //index
    public function index()
    {
        $employes = Employe::latest()->get();
        return view('employe.index', ['employes' => $employes]);
    }

    public function show(Employe $employe)
    {
        return view('employe.show', ['employe' => $employe]);
    }

    public function create()
    {
        return view('employe.create');
    }

    public function store()
    {
        //validation
        $data = request()->validate([
            'name' => ['required'],
            'address' => ['required']
        ]);
        // save
        Employe::create([
            'name' => $data['name'],
            'address' => $data['address']
        ]);
        // redirect
        return redirect()->route('employe.index');
    }

    public function edit(Employe $employe)
    {
        return view('employe.edit', ['employe' => $employe]);
    }

    public function update(Employe $employe)
    {
        $data = request()->validate([
            'name' => ['required'],
            'address' => ['required'],
            'id' => ['required']
        ]);
        // save
        $update_employe = Employe::where('id', $data['id'])->update([
            'name' => $data['name'],
            'address' => $data['address']
        ]);
       // dd($update_employe);
        // redirect
        return redirect()->route('employe.show', ['employe' => Employe::find($data['id'])]);
    }

    public function destroy(Employe $employe)
    {
        $employe->delete();
        return redirect()->route('employe.index');
    }
}
