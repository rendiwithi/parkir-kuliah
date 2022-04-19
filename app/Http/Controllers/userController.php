<?php

namespace App\Http\Controllers;
// use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function user()
    {
        $user = DB::table('users')->get();
        return view('user', ['user' => $user]);
    }
    public function delete($id)
    {
        DB::table('akun')->where('id', $id)->delete();
        return redirect('pegawai');
    }
    public function tambah()
    {
        return view('tambah_user');
    }

    public function add_user(Request $request)
    {
        DB::table('users')->insert([
            'username' => $request->username,
            'nama' => $request->nama,
            'nohp' => $request->nomor
        ]);

        return redirect('user');
    }

    public function edit_user($user)
    {
        $data = DB::table('users')->where('id', $user)->get();
        return view('/edit_user', ['data' => $data]);
    }

    public function edit_user_aksi(Request $request)
    {
        DB::table('users')->where('username', $request->username)
            ->update([
                'username' => $request->username,
                'nama' => $request->nama,
                'nohp' => $request->nomor
            ]);
        return redirect('user');
    }
}
