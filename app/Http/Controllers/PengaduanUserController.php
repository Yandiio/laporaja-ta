<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
use Validator, Redirect, Response, File;
use RealRashid\SweetAlert\Facades\Alert;

class PengaduanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('success_message')) {
            Alert::success('Berhasil  ', session('success_message'));
        };
        $user = Auth::user()->id;
        $pengaduan = DB::table('pengaduanmasyarakat')
            ->join('jenis', 'pengaduanmasyarakat.jenis_id', '=', 'jenis.id')
            ->join('users', 'pengaduanmasyarakat.users_id', '=', 'users.id')
            ->select('pengaduanmasyarakat.*', 'pengaduanmasyarakat.id','jenis.nama AS namajenis','users.name AS namausers','pengaduanmasyarakat.tanggapan','pengaduanmasyarakat.tgl_pelaporan','pengaduanmasyarakat.isi_laporan','pengaduanmasyarakat.status','pengaduanmasyarakat.foto')->where('users.id', '=', $user)->get();          
        return view('masyarakat.pengaduansaya.index', compact('pengaduan'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('masyarakat.pengaduansaya.show', compact('pengaduan'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::where('id', $id)->get();
        return view('masyarakat.pengaduansaya.edit', compact('pengaduan'));
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
        $gambar = Pengaduan::where('id', $id)->first();

        if (!empty(request()->foto)) {
            // File::delete('img/'.$gambar ->bukti);
            request()->validate(['foto' => 'image|mimes:jpeg,png,jpg|max:2048',]);
            $namaFile = time() . '.' . request()->foto->extension();
            request()->foto->move(public_path('img'), $namaFile);
        } else {
            $namaFile = $gambar ->bukti;
        }
        DB::table('pengaduanmasyarakat')->where('id', $id)->update([
            'jenis_id' => $request->jenis,
            'users_id' => $request->users,
            'tgl_pelaporan' => $request->tanggal,
            'isi_laporan' => $request->isi_laporan,
            'petugasa_id' => $request->petugasa_id,
            'status' => $request->status,
            'tanggapan' => $request->tanggapan,
            'foto' => $namaFile
        ]);

        return redirect('/pengaduansaya')->with('suksesedit', 'Pengaduan Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pengaduan')->where('id', $id)->delete();
        return redirect('/pengaduan1')->with('sukses', 'Data berhasil dihapus');   
    }
}
