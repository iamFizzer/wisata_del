<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DestinasiModel extends Model
{
    public function alldata()
    {
       return DB::table('t_destinasi')->get();

    }
    public function tambahTempat($data)
    {
        DB::table('t_destinasi')->insert($data);
    }
    
}
