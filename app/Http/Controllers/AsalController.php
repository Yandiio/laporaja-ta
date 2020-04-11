<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Models\Asal;
use RealRashid\SweetAlert\Facades\Alert;
use Validator, Redirect, Response, File;
use App\Exports\AsalExport;
use Maatwebsite\Excel\Facades\Excel;

class AsalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asal = DB::table('asal')->get();

        if(session('success_message')){
            Alert::success('Berhasil', session('success_message'));
        };

        return view('petugas.asal.index',compact('asal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('asal')->insert([
            'nama' => $request->nama
        ]);

        return redirect('/asal')->withSuccessMessage('Data Berhasil Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $asals = Asal::find($id);
       return view ('petugas.asal.show',compact('asals')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Asal::where('id',$id)->get();
        return view('petugas.asal.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('asal')->where('id',$id)->update([
            'nama' => $request->nama
        ]);

        return redirect('/asal')->with('Success','Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('asal')->where('id',$id)->delete();
        return redirect('/asal')->with('Success','Data berhasil dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function exportPdf()
    {
        $cetak = Asal::get();
        $pdf = PDF::loadview('asal.cetakpdf',compact('cetak'));
        return $pdf->stream('dataasal.pdf');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function exportExcel()
    {
        return Excel::download(new AsalExport,'asal.xlsx');
    }
}
