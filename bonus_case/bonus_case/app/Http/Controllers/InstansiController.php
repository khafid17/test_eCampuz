<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instansi;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instansi = Instansi::all();
        return view('index', compact('instansi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'instansi' => 'required',
            'diskripsi' => 'required',
        ]);



        $instansi = instansi::create([
            'instansi' => $request->instansi,
            'diskripsi' => $request->diskripsi,
        ]);

        return redirect()->back()->with('success','Data berhasil disimpan');
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
        $instansi = instansi::findorfail($id);
        return view('edit', compact('instansi'));
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
        $this->validate($request, [
            'instansi' => 'required',
            'diskripsi' => 'required',
        ]);

        $instansi = [
            'instansi' => $request->instansi,
            'diskripsi' => $request->diskripsi,
        ];

        instansi::whereId($id)->update($instansi);

        return redirect()->route('instansi.index')->with('success','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instansi = instansi::findorfail($id);
        $instansi->delete();

        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }
    public function cari(Request $request){

        $query = $request->get('query');
        $instansi =  instansi::where("instansi", "like", "%".$query."%")->paginate(6);
      

        return \view('index', \compact('instansi'));

    }
}
