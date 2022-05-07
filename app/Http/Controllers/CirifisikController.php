<?php

namespace App\Http\Controllers;

use App\Models\Cirifisik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CirifisikController extends Controller
{
    public function index()
    {
        return view('ciri-fisik.index');
    }

    public function tambah()
    {
        return view('ciri-fisik.form');
    }

    public function edit($id)
    {
        $data = Cirifisik::find($id);
        return view('ciri-fisik.edit', ['data' => $data]);
    }

    public function update(Request $rq)
    {
         $data = $rq->all();
         $cf = Cirifisik::find($data['id']);
         $cf->update($data);
         return back()->with('success', 'Data Berhasil diperbarui');
    }

    public function list()
    {
        $cf = Cirifisik::where('id_user', Auth::user()->id)->get();
        return view('ciri-fisik.list', ['lists' => $cf]);
    }

    public function store(Request $rq){
        $data = $rq->all();
        // dd($data);
        $create = new Cirifisik();
        $create->id_user = Auth::user()->id;
        $create->warna = $data["warna"];
        $create->bentuk = $data["bentuk"];
        $create->kerusakan = $data["kerusakan"];
        $create->umur = $data["umur"];
        $create->save();

        return back()->with('success', "berhasil ditambah");
    }
}
