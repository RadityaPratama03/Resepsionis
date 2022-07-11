<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {
        $data_tamu = \App\Models\Tamu::where('status', 'Check In')->get();
        // $data_tamu = \App\Models\Tamu::all();
        return view('tamu.index',['data_tamu' => $data_tamu]);
    }
    public function create(Request $request)
    {
        \App\Models\Tamu::create($request->all());
        return redirect('/tamu')->with('sukses','Data berhasil di input');

    }
    public function edit($id)
    {
        $data_tamu = \App\Models\Tamu::find($id);
        return view('tamu.edit',['tamu' => $data_tamu]);

    }

    public function update(Request $request, $id)
    {
        $data_tamu = \App\Models\Tamu::find($id);
        $data_tamu->update($request->all());
        return redirect('tamu')->with('sukses','Data berhasil di update');

    }
    public function delete($id)
    {
        $data_tamu = \App\Models\Tamu::find($id);
        $data_tamu->delete();
        return redirect('/tamu')->with('sukses','Data berhasil di hapus');

    }
}
