<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permintaan;
use Illuminate\Http\Request;

class PermintaanController extends Controller
{
    public function index()
    {
        $data = Permintaan::with("unit", "darah")->where('status', 'konfirmasi')->get();

        return view('admin.unit.index', compact('data'));
    }

    public function confirm()
    {
        $data = Permintaan::with("unit", "darah")->where('status', 'proses')->get();

        return view('admin.unit.confirm', compact('data'));
    }

    public function confir($id)
    {
        $formulir = Permintaan::where('id', $id)->first();

        $formulir->status = 'konfirmasi';
        $formulir->save();

        return redirect()->route('index.permintaan')->with('status', 'Formulir berhasil dikonfirmasi');
    }

    public function delete($id)
    {
        $formulir = Permintaan::findOrFail($id);
        $formulir->delete();

        return redirect()->back()->with('status', 'Formulir berhasil dihapus');
    }
    
}
