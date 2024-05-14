<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function fileUpload(){
        return view('file-upload');
    }
    // Jobsheet 12 - A. Persiapan Awal
    // public function prosesFileUpload(Request $request){
    //     return "Pemrosesan file upload di sini";
    // }

    //Jobsheet 12 - B. Infromasi FIle Upload
    public function prosesFileUpload(Request $request){
    //    dump($request->berkas);
    //    dump($request->file('file'));
        
    // if($request->hasFile('berkas'))
    //  {
    //      echo "path(): ".$request->berkas->path();
    //      echo "<br>";
    //      echo "extension(): ".$request->berkas->extension();
    //      echo "<br>";
    //      echo "getClientOriginalExtension(): ".
    //         $request->berkas->getClientOriginalExtension();
    //      echo "<br>";
    //      echo "getMimeType(): ".$request->berkas->getMimeType();
    //      echo "<br>";
    //      echo "getClientOriginalName(): ".
    //          $request->berkas->getClientOriginalName();
    //      echo "<br>";
    //      echo "getSize(): ".$request->berkas->getSize();
    //  }
    //  else
    //  {
    //      echo "Tidak ada berkas yang diupload";
    //  }

    // Jobsheet 12 - C. Validasi File Upload
    $request->validate([
        'berkas'=>'required|file|image|max:500',]);
    //    $path = $request->berkas->store('uploads');

        // Jobsheet 12 - D. Memindah File Upload
        $extfile=$request->berkas->getClientOriginalName();
        $namaFile='web-' .time().".".$extfile;
    //    $path = $request->berkas->storeAs('uploads', 'berkas');
        $path = $request->berkas->storeAs('uploads', $namaFile);
        echo "proses upload berhasil, data disimpan pada: $path ";
    //   echo "proses upload berhasil, file berada di: $path ";
    //   echo $request->berkas->getClientOriginalName()."lolos validasi";

    }
}
