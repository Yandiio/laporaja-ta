<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use DB;


class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = DB::table('pengaduanmasyarakat')
                      ->join('jenis', 'pengaduanmasyarakat.jenis_id', '=' , 'jenis.id')
                      ->join('users','pengaduanmasyarakat.users_id','=','users.id')
                      ->select('pengaduanmasyarakat.*', 'pengaduanmasyarakat.id','jenis.nama AS namajenis','users.name AS namauser','pengaduanmasyarakat.tgl_pelaporan','pengaduanmasyarakat.isi_laporan','pengaduanmasyarakat.status','pengaduanmasyarakat.foto','pengaduanmasyarakat.tanggapan')->get();
        return view('petugas.pengaduan.index',compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!empty(request()->foto)) {
            request()->validate(['foto' => 'image|mimes:jpeg,png,jpg|max:2048',]);
            $namaFile = time() . '.' . request()->foto->extension();
            request()->foto->move(public_path('img'), $namaFile);
        } else {
            $namaFile = null;
        }

        DB::table('pengaduanmasyarakat')->insert(
            [
                'id' => $request->users,
                'users_id' => $request->users,
                'jenis_id' => $request->jenis,
                'tgl_pelaporan' => $request->tgl_pelaporan,
                'isi_laporan' => $request->isi_laporan,
                'foto' => $namaFile
            ]
        );

        return redirect('/pengaduan')->withSuccessMessage('Pengaduan berhasil di Kirim');
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
        return view('petugas.pengaduan.show',compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pengaduan = Pengaduan::where('id',$id)->get();
      return view('petugas.pengaduan.edit',compact('pengaduan'));
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
        if(!empty(request()->foto)){
            request()->validate(['foto' => 'image|mimes:jpeg,png,jpg|max:10048',]);
            $namaFile = time() . '.' . request()->foto->extension();
            request()->foto->move(public_path('img'),$namaFile);
        }else{
            $namaFile = null;
        }

        DB::table('pengaduanmasyarakat')->where('id',$id)->update([
            'jenis_id' => $request->jenis,
            'users_id' => $request->users,
            'isi_laporan' => $request->isi_laporan,
            'tgl_pelaporan' => $request->tgl_pelaporan,
            'petugasa_id' => $request->petugas,
            'status' => $request->status,
            'tanggapan' => $request->tanggapan,
            'foto' => $namaFile
        ]);


        return redirect('/pengaduan')->withSuccessMessage('Pengaduan Berhasil Dikirim');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pengaduan')->where('id',$id)->delete();
        return redirect('/pengaduan')->with('Success','Data berhasil dihapus');
    }
}
