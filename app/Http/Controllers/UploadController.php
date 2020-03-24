<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use Rap2hpoutre\FastExcel\FastExcel;

class UploadController extends Controller
{
    public function index() {
        return view('importExcel');
    }

    /**
    * Import excel upload file into upload database table
    *
    */
    public function importExcel(Request $request) {
        if ($request->hasFile('import_file') ) {
            $path = $request->file('import_file')->getRealPath();

	    $data= (new FastExcel)->import($path);

            if(!empty($data) && $data->count()){
		dd($data);
                return back()->with('success','File loaded okay');
            }

            return back()->with('error','File found, but it\'s empty!');
        }
        return back()->with('error','No file found in request object');
    }
}
