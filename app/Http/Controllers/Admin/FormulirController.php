<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Darah;
use App\Models\Formulir;
use App\Models\Jadwal;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function index()
    {
        $data = Formulir::with("darah", "jadwal")->where('status', 'konfirmasi')->get();

        return view('admin.formulir.index', compact('data'));
    }

    public function confirm()
    {
        $data = Formulir::with("darah", "jadwal")->where('status', 'proses') ->get();

        return view('admin.formulir.confirm', compact('data'));
    }

    public function confir($id)
    {
        $formulir = Formulir::where('id', $id)->first();

        $formulir->status = 'konfirmasi';
        $formulir->save();

        return redirect()->route('index.formulir')->with('status', 'Formulir berhasil dikonfirmasi');
        
    }

    public function delete($id)
    {
        $formulir = Formulir::findOrFail($id);
        $formulir->delete();

        return redirect()->back()->with('status', 'Formulir berhasil dihapus');
    }

}
