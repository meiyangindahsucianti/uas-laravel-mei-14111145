<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mahasiswa;


class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
		$data= Mahasiswa::all();
       return view ('home')->with('dataList',$data); //
    }
	
	 public function awal()
    {
        $data = Mahasiswa::all();
		return View('awal')->with('dataList', $data);
    }
	public function tambah()
	{
		return view('tambah');
	}
	
	public function add_action(Request $request)
	{
		$items			= new Mahasiswa;
		$items->nama	= $request->nama;
		$items->nim		= $request->nim;
		$items->alamat	= $request->alamat;
		$items->save();
		
		return redirect('awal');
	}
	
	public function ubah($id)
	{
		$data =Mahasiswa::FindOrFail($id);
		return view ('edit')->with('dataList', $data);//
	}
	
	 public function ganti(Request $request, $id)
	{
		$items			= Mahasiswa::Find($id);
		$items->nama	= $request->nama;
		$items->nim		= $request->nim;
		$items->alamat	= $request->alamat;
		$items->save();
		
		return redirect('awal');
	}
	
	public function hapus ($id)
	{
	 	$data = Mahasiswa::FindOrFail($id);
		$data -> delete();//
		return redirect('awal');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // // public function create()
    // {
        // //
    // }
		
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function add_action(Request $request)
    // {
		
        // //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function ubah($id)
    // {
        // //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function ganti($id)
    // {
		// //
	// }

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
