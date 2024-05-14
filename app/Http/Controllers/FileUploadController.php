<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function fileUpload(){
        return view('file-upload');
    }
    // Jobsheet 13, A.Persiapan Awal
    public function prosesFileUpload(Request $request){
        return "Pemrosesan file upload di sini";
    }
}
