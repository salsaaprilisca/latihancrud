<?php

namespace App\Http\Controllers;

use App\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujians = Ujian::all();
        return view('ujian.index',compact('ujians'));
    }

    public function add()
    {
        return view('ujian.add');
    }

    public function save(Request $request)
    {    

        Ujian::create($request->all());
        return redirect()->route('ujian.index');
        
    }
}