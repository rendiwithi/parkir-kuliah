<?php

namespace App\Http\Controllers;
// use Illuminate\support\Facades\DB;

use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class parkirController extends Controller
{
    public function parkir()
    {
        $data = DB::select(DB::raw('SELECT dp.id,dp.plat, dp.masuk, dp.keluar, dp.harga, dp.tempat_parkir as tempat FROM detail_parkir as dp;'));
        return view('detail_parkir', ['data' => $data]);
    }
    public function delete($id, $tempat)
    {
        $dt = new DateTime();
        $date = $dt->format('Y-m-d H:i:s');
        DB::table('tempat_parkir')->where('id', $tempat)
            ->update([
                'kondisi' => 0
            ]);
        DB::table('detail_parkir')->where('id', $id)->update([
            'keluar' => $date,
        ]);
        return redirect('parkir');
    }
    // ke view tambah
    public function tambah()
    {
        $tempat_parkir = DB::table('tempat_parkir')->where(
            'kondisi',
            false
        )->get();
        return view('tambah_detail_parkir', ['tempat_parkir' => $tempat_parkir]);
    }

    public function add_kendaraan(Request $request)
    {
        $plat = $request->plat;
        $cek = DB::select(DB::raw("SELECT * FROM detail_parkir as dt WHERE dt.plat= '$plat' AND IsNull(dt.keluar);"));
        if (empty($cek)) {
            $plat = DB::table('kendaraan')->where('plat', $request->plat)->get();
            if (empty($plat) == false) {
                DB::table('kendaraan')->insert(['plat' => $request->plat]);
            }
            $dt = new DateTime();
            DB::table('tempat_parkir')->where('id', $request->tempat_parkir)
                ->update([
                    'kondisi' => 1
                ]);
            DB::table('detail_parkir')->insert([
                'id' => NULL,
                'plat' => $request->plat,
                'tempat_parkir' => $request->tempat_parkir,
                'masuk' => $dt,
                'keluar' => NULL
            ]);
            return redirect('parkir');
        } else {
            return redirect('parkir/tambah');
        }
    }
    public function edit_detail_parkir($parkir)
    {
        $data = DB::table('detail_parkir')->where('plat', $parkir)->get();
        $tempat_parkir = DB::table('tempat_parkir')->where(
            'kondisi',
            false
        )->get();
        return view('/edit_detail_parkir', ['data' => $data, 'tempat_parkir' => $tempat_parkir]);
    }
    public function edit_parkir_aksi(Request $request)
    {
        $plat = DB::table('kendaraan')->where('plat', $request->plat)->get();
        if (empty($plat) == true) {
            DB::table('kendaraan')->insert(['plat' => $request->plat]);
        }
        $dt = new DateTime();
        DB::table('tempat_parkir')->where('id', $request->id)
            ->update([
                'kondisi' => 0
            ]);
        DB::table('tempat_parkir')->where('id', $request->tp_id)
            ->update([
                'kondisi' => 1
            ]);
        DB::table('detail_parkir')->where('id', $request->tp_id)->update([
            'plat' => $request->plat,
            'tempat_parkir' => $request->tp_id,
        ]);

        return redirect('parkir');
    }
}
