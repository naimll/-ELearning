<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index(){
        return view('admin');
    }
    public function upload(Request $request){
    //     // $filename=time().'.'.$request->file->extension();
    //     $request['file']->move(public_path('uploads'),'file.pdf');
    //     return redirect()->route('admin')->with(['succes'=>'File was uploaded successfully','filename'=>'file.pdf']);
    //

    // $fileName = time().'.'.$request->file()->extension();
    $request->validate([
        'file' => 'required|mimes:pdf,csv|max:2048',
    ]);

    $fileName = time().'.'.$request->file->extension();

    $request->file->move(public_path('uploads'), $fileName);

    return back()->with('success','File uploaded successfully.')->with('file',$fileName);

}
}
