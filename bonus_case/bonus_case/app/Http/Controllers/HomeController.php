<?php

namespace App\Http\Controllers;
use App\Models\Instansi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $instansi = Instansi::all();
        return view('home', compact('instansi'));
        // return \view('home');

    }
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'instansi' => 'required',
            'diskripsi' => 'required',
        ]);



        $kriteria = Kriteria::create([
            'instansi' => $request->instansi,
            'diskripsi' => $request->diskripsi,
        ]);

        return redirect()->back()->with('success','Data berhasil disimpan');
    }

}
