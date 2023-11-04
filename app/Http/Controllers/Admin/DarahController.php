<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Darah;
use Illuminate\Http\Request;

class DarahController extends Controller
{
    public function index()
    {
        $data = Darah::all();
        return view('admin.darah.index', compact('data'));
    }

    public function create()
    {
        return view('admin.darah.tambah');
    }

    public function store(Request $request)
    {
        $darah = new Darah(); 
        $darah->darah = $request->input('darah');
        $darah->jumlah_darah = $request->input('jumlah_darah');
        $darah->save();

        return redirect()->route('index.darah')->with('status', 'Sukses Menambah Darah');
    }
    public function edit($id)
    {
        $darah = Darah::find($id); 
        return view('admin.darah.edit', compact('darah'));
    }

    public function update(Request $request, $id)
    {
        $darah = Darah::find($id); 
        $darah->darah = $request->input('darah');
        $darah->jumlah_darah = $request->input('jumlah_darah');
        $darah->save();

        return redirect()->route('index.darah')->with('status', 'Sukses Mengubah Data');
    }
    public function delete($id)
    {
        $formulir = Darah::findOrFail($id);
        $formulir->delete();

        return redirect()->back()->with('status', 'Formulir berhasil dihapus');
    }
}
