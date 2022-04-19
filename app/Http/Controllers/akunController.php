<?php

namespace App\Http\Controllers;
// use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class akunController extends Controller
{
    public function akun()
    {
        $akun = DB::select(DB::raw('SELECT akun.id,akun.nama, mall.nama as nama_mall, role.tipe as tipe FROM akun JOIN mall on akun.id_mall =mall.id JOIN role on role.id = akun.id_role;'));
        return view('pegawai', ['akun' => $akun]);
    }
    public function delete($id)
    {
        DB::table('akun')->where('id', $id)->delete();
        return redirect('user');
    }
    public function tambah()
    {
        $mall = DB::table('mall')->get();
        $role = DB::table('role')->get();
        return view('tambah_pegawai', ['mall' => $mall, 'role' => $role]);
    }

    public function add_akun(Request $request)
    {
        DB::table('akun')->insert([
            'id' => NULL,
            'nama' => $request->name,
            'id_role' => $request->role_id,
            'id_mall' => $request->mall_id
        ]);

        return redirect('pegawai');
    }

    public function edit_akun($akun)
    {
        $data = DB::table('akun')->where('id', $akun)->get();
        $mall = DB::table('mall')->get();
        $role = DB::table('role')->get();
        return view('/edit_pegawai', ['data' => $data, 'mall' => $mall, 'role' => $role]);
    }

    public function edit_akun_aksi(Request $request)
    {
        DB::table('akun')->where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'id_role' => $request->role_id,
                'id_mall' => $request->mall_id
            ]);
        return redirect('pegawai');
    }
}
