<?php

namespace App\Http\Controllers;

use App\Models\DestinasiModel;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function __construct()
    {
        $this->DestinasiModel = new DestinasiModel();
    }

    public function index()
    {
        $data = [
            'destinasi' => $this->DestinasiModel->alldata(),
        ];
       
        return view('content.dashboard.V_destinasi',$data);
    }

    public function GetAllData()
    {
        $data = [
            'destinasi' => $this->DestinasiModel->alldata(),
        ];
       
        return view('layouts.index',$data);
    }

    public function add()
    {
        return view('content.dashboard.V_tambahDestinasi');
    }
    public function tambah()
    {
        $fotomin = Request()->fotomin;
        $namafiles = Request()->nama.'.'.$fotomin->extension();
        $fotomin->move(public_path('foto_tempat/mini'),$namafiles);

        $foto = Request()->foto;
        $namafile = Request()->nama.'.'.$foto->extension();
        $foto->move(public_path('foto_tempat'),$namafile);

        $data =[
            'nama' => Request()->nama,
            'ket'=> Request()->ket,
            'fotomin' => $namafiles,
            'foto' => $namafile,
        ];
        $this->DestinasiModel->tambahTempat($data);
        return redirect()->route('destinasi')->with('Massage', 'DATA BERHASIL DI TAMBAHKAN!!!');
    }
}
