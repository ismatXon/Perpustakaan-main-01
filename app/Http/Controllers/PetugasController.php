<?php

namespace App\Http\Controllers;

use App\Models\PetugasModel;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function petugastampil()
    {
        $databuku = PetugasModel::orderby('namapetugas', 'ASC')
        ->paginate(5);

        return view('halaman/view_petugas',['petugas'=>$datapetugas]);
    }
}
