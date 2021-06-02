<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function insert()
    {
        $result = DB::insert('insert into mahasiswas (npm, nama_mahasiswa, tempat_lahir, tanggal_lahir, 
        alamat, created_at) values (?, ?, ?, ?, ?, ?)', ['1822240097','Hafidh','Palembang',
        '2000-03-22','Jl Green Palm', now()]);
        dump($result);
    }

    public function update()
    {
        $result = DB::update('update mahasiswas set nama_mahasiswa = "Zixy",updated_at = now() where npm = ?', ['2024240022']);
        dump($result);
    }

    public function delete()
    {
        $result = DB::delete('delete from mahasiswas where npm = ?', ['2024240022']);
        dump($result);
    }
    
    public function select()
    {
        $result = DB::select("select * from mahasiswas");
        dump($result);
    }
}


