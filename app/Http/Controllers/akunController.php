<?php

namespace App\Http\Controllers;
// use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class akunController extends Controller
{
    public function akun()
    {
        // $user = DB::table('akun')->get();
        // $user = DB::join('akun') SELECT * FROM akun JOIN mall on akun.id_mall =mall.id
        $user = DB::select(DB::raw('SELECT akun.id,akun.nama, mall.nama as nama_mall, role.tipe as tipe FROM akun JOIN mall on akun.id_mall =mall.id JOIN role on role.id = akun.id_role;'));
        return view('user', ['user' => $user]);
    }
    public function delete($id)
    {
        DB::table('akun')->where('id', $id)->delete();
        return redirect('user');
    }
    public function tambah()
    {
        return view('tambah_user');
    }

    public function add_akun(Request $request)
    {
        DB::table('akun')->insert([
            'plat' => $request->username,
            'tempat_parkir' => $request->nama,
            'masuk' => $request->nomor
        ]);

        return redirect('user');
    }

    public function edit_akun($akun)
    {
        $data = DB::table('akun')->where('id', $akun)->get();
        return view('/edit_akun', ['data' => $data]);
    }

    public function edit_akun_aksi(Request $request)
    {
        DB::table('akuns')->where('akunname', $request->akunname)
            ->update([
                'akunname' => $request->akunname,
                'nama' => $request->nama,
                'nohp' => $request->nomor
            ]);
        return redirect('akun');
    }
}
