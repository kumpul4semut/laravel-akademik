<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        $request->validate([
            'nim' => ['required'],
            'nama' => ['required'],
            'email' => ['required'],
            'jenis_kelamin' => ['required'],
            'jurusan' => ['required'],
            'alamat' => ['required'],
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'email' => $request->email,
            'jk' => $request->jenis_kelamin,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat,
        ]);

        return redirect('/list');
    }

    public function show()
    {
        $mhs = Mahasiswa::get();
        return view('list', [
            'mahasiswa' => $mhs
        ]);
    }

    public function destroy(Mahasiswa $id)
    {
        $id->delete();
        return back();
    }

    public function export()
    {
        return Excel::download(new MahasiswaExport, 'mahasiswa.xlsx');
    }
}
