<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = DB::table('users')->where('role','!=','admin');
        return view('petugas.pengguna.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $pengguna = User::find($id);
        return view('petugas.pengguna.show',compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengguna = User::where('id',$id)->get();
        return view('petugas.pengguna.edit',compact('pengguna'));
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

        $gambar = User::where('id',$id)->first();

        if(!empty(request()->photo)){
            request()->validate(['foto' => 'image|mimes:jpeg,png,jpg|max:10023']);
            $namaFile = time() . '.' . request()->foto->extension();
            request()->foto->move(public_path('img',$namaFile));
        }else{
            $namaFile = $gambar-> foto;
        }

        DB::table('users')->where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'nik' => $request->nik,
            'role' => $request->role,
            'foto' => $request->namaFile 
        ]);


        return redirect('/pengguna')->with('Sucesss','User Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('/pengguna')->with('success','Data Berhasil dihapus');
    }
}
