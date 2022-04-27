<?php

namespace App\Http\Controllers;
// use Illuminate\support\Facades\DB;

use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class generalController extends Controller
{
    public function login(Request $request)
    {
        $password = $request->password;
        $username = $request->username;
        $data = DB::select(DB::raw("select a.nama, a.username, a.password, m.nama, r.tipe from akun as a JOIN mall as m on m.id=a.id_mall join role as r on r.id=a.id_role where a.username='$username' and a.password = '$password';"));
        if ($data == null) {
            return redirect('login');
        } else {
            if ($data[0]->tipe == "masuk") {
                return redirect('admin/masuk');
            } else if ($data[0]->tipe == "lapangan") {
                return redirect('admin/lapangan');
            } else if ($data[0]->tipe == "keluar") {
                return redirect('admin/keluar');
            } else {
                return redirect('/parkir');
            }
        }
    }
    public function loginView()
    {
        return view('login');
    }
    public function userView()
    {
        return view('user_search');
    }
    public function user_search(Request $request)
    {
        $plat = $request->plat;
        $data = DB::select(DB::raw("SELECT dp.id,dp.plat, dp.masuk, dp.keluar, tp.kondisi,tp.id as tempat, p.nama as jenis_parkir, m.nama as mall FROM detail_parkir as dp JOIN tempat_parkir as tp on tp.id=dp.tempat_parkir join parkiran as p on p.id=tp.id_parkiran join mall as m on m.id=p.id_mall where isNull(dp.keluar) and dp.plat='$plat';"));
        return view('user_search_result', ['data' => $data]);
    }
    public function parkir_kosong()
    {
        $data = DB::select(DB::raw("SELECT tp.nama, p.nama as jenis FROM tempat_parkir as tp JOIN parkiran as p ON p.id = tp.id_parkiran WHERE tp.kondisi=false ;"));
        return view('parkir_kosong', ['data' => $data]);
    }
    public function admin_masuk()
    {
        $data = DB::select(DB::raw('SELECT dp.id,dp.plat, dp.masuk, dp.keluar FROM detail_parkir as dp where isNull(dp.keluar);'));
        return view('admin_masuk', ['data' => $data]);
    }
    public function admin_keluar()
    {
        $data = DB::select(DB::raw('SELECT dp.id,dp.plat, dp.masuk, dp.keluar, dp.harga, dp.tempat_parkir as tempat FROM detail_parkir as dp WHERE isNull(dp.keluar);'));
        return view('admin_keluar', ['data' => $data]);
    }
    public function admin_lapangan()
    {
        $data = DB::select(DB::raw('SELECT dp.id,dp.plat, dp.masuk, dp.keluar FROM detail_parkir as dp where isNull(dp.keluar) AND isNull(dp.tempat_parkir);'));
        return view('admin_lapangan', ['data' => $data]);
    }
    public function tambah()
    {
        return view('tambah_masuk_parkir');
    }
    public function add_kendaraan(Request $request)
    {
        $plat = $request->plat;
        $cek = DB::select(DB::raw("SELECT * FROM detail_parkir as dt WHERE dt.plat= '$plat' AND IsNull(dt.keluar);"));
        $cek_plat = DB::select(DB::raw("SELECT * FROM kendaraan as k where k.plat='$plat';"));
        if ($cek == null) {
            if ($cek_plat == null) {
                DB::select(DB::raw("INSERT INTO `kendaraan` (`plat`) VALUES ('$plat');"));
            }
            $dt = new DateTime();
            DB::table('detail_parkir')->insert([
                'id' => NULL,
                'plat' => $request->plat,
                'tempat_parkir' => NULL,
                'masuk' => $dt,
                'keluar' => NULL
            ]);
            return redirect('admin/masuk');
        } else {
            return redirect('admin/masuk/tambah');
        }
    }
    public function edit_kendaraan($plat)
    {
        $data = DB::select(DB::raw("SELECT * FROM detail_parkir as dp where dp.plat='$plat' AND isNull(dp.tempat_parkir);"));
        $tempat_parkir = DB::table('tempat_parkir')->where(
            'kondisi',
            false
        )->get();
        return view('edit_detail_lapangan', ['data' => $data, 'tempat_parkir' => $tempat_parkir]);
    }
    public function edit_kendaraan_aksi(Request $request)
    {
        DB::table('tempat_parkir')->where('id', $request->tp_id)
            ->update([
                'kondisi' => 1
            ]);
        DB::table('detail_parkir')->where('id', $request->tp_id)->update([
            'tempat_parkir' => $request->tp_id,
        ]);
        DB::table('detail_parkir')->where('id', $request->id)->update([
            'tempat_parkir' => $request->tp_id,
        ]);
        return redirect('/admin/lapangan');
    }
    public function delete($id, $tempat, $masuk)
    {
        $dt = new DateTime();
        $date = $dt->format('Y-m-d H:i:s');
        $masukF = strtotime($masuk);
        $keluar = strtotime($date);

        $jam = round(abs($keluar - $masukF) / 3600, 2);
        if ($jam < 1) {
            $jam = 1;   
        }
        if($tempat!="kosong"){
            DB::table('tempat_parkir')->where('id', $tempat)
            ->update([
                'kondisi' => 0
            ]);
        }
        $harga = $jam * 10000;

        DB::table('detail_parkir')->where('id', $id)->update([
            'keluar' => $date,
            'harga' => $harga,
        ]);
        return redirect('admin/keluar');
    }
    // public function delete($id, $tempat)
    // {
    //     $dt = new DateTime();
    //     $date = $dt->format('Y-m-d H:i:s');
    //     DB::table('tempat_parkir')->where('id', $tempat)
    //         ->update([
    //             'kondisi' => 0
    //         ]);

    //     DB::table('detail_parkir')->where('id', $id)->update([
    //         'keluar' => $date,
    //     ]);
    //     return redirect('parkir');
    // }
    // // ke view tambah
    // public function tambah()
    // {
    //     $tempat_parkir = DB::table('tempat_parkir')->where(
    //         'kondisi',
    //         false
    //     )->get();
    //     return view('tambah_detail_parkir', ['tempat_parkir' => $tempat_parkir]);
    // }

    // public function add_kendaraan(Request $request)
    // {
    //     $plat = $request->plat;
    //     $cek = DB::select(DB::raw("SELECT * FROM detail_parkir as dt WHERE dt.plat= '$plat' AND IsNull(dt.keluar);"));
    //     if (empty($cek)) {
    //         $plat = DB::table('kendaraan')->where('plat', $request->plat)->get();
    //         if (empty($plat) == false) {
    //             DB::table('kendaraan')->insert(['plat' => $request->plat]);
    //         }
    //         $dt = new DateTime();
    //         DB::table('tempat_parkir')->where('id', $request->tempat_parkir)
    //             ->update([
    //                 'kondisi' => 1
    //             ]);
    //         DB::table('detail_parkir')->insert([
    //             'id' => NULL,
    //             'plat' => $request->plat,
    //             'tempat_parkir' => $request->tempat_parkir,
    //             'masuk' => $dt,
    //             'keluar' => NULL
    //         ]);
    //         return redirect('parkir');
    //     } else {
    //         return redirect('parkir/tambah');
    //     }
    // }
    // public function edit_detail_parkir($parkir)
    // {
    //     $data = DB::table('detail_parkir')->where('plat', $parkir)->get();
    //     $tempat_parkir = DB::table('tempat_parkir')->where(
    //         'kondisi',
    //         false
    //     )->get();
    //     return view('/edit_detail_parkir', ['data' => $data, 'tempat_parkir' => $tempat_parkir]);
    // }
    // public function edit_parkir_aksi(Request $request)
    // {
    //     $plat = DB::table('kendaraan')->where('plat', $request->plat)->get();
    //     if (empty($plat) == true) {
    //         DB::table('kendaraan')->insert(['plat' => $request->plat]);
    //     }
    //     $dt = new DateTime();
    //     DB::table('tempat_parkir')->where('id', $request->id)
    //         ->update([
    //             'kondisi' => 0
    //         ]);
    //     DB::table('tempat_parkir')->where('id', $request->tp_id)
    //         ->update([
    //             'kondisi' => 1
    //         ]);
    //     DB::table('detail_parkir')->where('id', $request->tp_id)->update([
    //         'plat' => $request->plat,
    //         'tempat_parkir' => $request->tp_id,
    //     ]);

    //     return redirect('parkir');
    // }
}
