<?php

namespace App\Http\Controllers;

use App\Models\Netw;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Users = Netw::paginate(5);
        return view ('User.index', [
            'data'=>$Users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Netw.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'Email' => 'required',
            'Password' => 'required',
            'Confirm' => 'required'
        ]);

        Netw::create([
            'Nama' => $request->Nama,
            'Email' => $request->Email,
            'Password' => $request->Password,
            'Confirm' => $request->Confirm
        ]);

        return redirect('/Netw');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Users = Netw::find($id);
        return $Users;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $Users = Netw::find($id);
        return view('netw.edit', compact('netw'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Email' => 'required',
        ]);
        $kelas = Netw::find($id);
        $kelas->update([
            'Nama' => $request->Nama,
            'Email' => $request->Email,
            'Password' => $request->Password,
            'Confirm' => $request->Confirm
        ]);
        return redirect('/netw');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Users = Netw::find($id);
        $Users->delete();
        return redirect('/netw');
    }
}
