<?php

namespace App\Http\Controllers;
// use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user()
    {
          $user = DB::table('users')->get();
        return view('user',['user' => $user]);
  }
    public function delete($id){
        DB::table('users')->where('id',$id)->delete();
    return redirect('user');   
   }
    public function tambah(){
        return view('tambah_user');
    }

    public function add_user(Request $request){
        DB::table('users')->insert(['username'=>$request->username,
                                    'nama'=>$request->nama,
                                    'nohp'=>$request->nomor]);
                                   
         return redirect('user');
    }

    public function edit_user($user){
        $data = DB::table('users')->where('id',$user)->get();
        return view('/edit_user', ['data'=>$data]);
    }

    public function edit_user_aksi(Request $request){
        DB::table('users')->where('username',$request->username)
        ->update(['username'=>$request->username,
                'nama'=>$request->nama,
                'nohp'=>$request->nomor]);
        return redirect('user');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
