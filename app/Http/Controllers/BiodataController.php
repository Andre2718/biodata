<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{

public function menampilkanBiodata()
{
    $dataNama = Biodata::$nama;
    $dataSekolah = Biodata::$sekolah;
    $dataKelas = Biodata::$kelas;
    $dataAlamat = Biodata::$alamat;
    $dataHobi = Biodata::$hobi;
    $dataEmail = Biodata::$email;
    $dataBesti = Biodata::$besti;
    return view('biodata', compact('dataNama','dataSekolah','dataKelas', 'dataAlamat', 'dataHobi', 'dataEmail', 'dataBesti'));
}

}