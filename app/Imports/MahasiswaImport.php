<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;

class MahasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mahasiswa([
            'nim'     => $row[1],
            'nama'    => $row[2],
            'email'   => $row[3],
            'jk'      => $row[4],
            'jurusan' => $row[5],
            'alamat'  => $row[6],
        ]);
    }
}
