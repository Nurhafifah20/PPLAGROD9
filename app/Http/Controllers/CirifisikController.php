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
        //  dd($data['warna']);
         $cf = Cirifisik::find($data['id']);
         $cf->warna = $data['warna'];
         $cf->bentuk = $data['bentuk'];
         $cf->kerusakan = $data['kerusakan'];
         $cf->tekstur = $data['tekstur'];
         $cf->umur = $data['umur'];
         $cf->save();
         return back()->with('success', 'Data Berhasil diperbarui');
    }
    public function hasil($id)
    {
        $cf = Cirifisik::find($id);
        return view('ciri-fisik.hasil-diagnosa', ['hasil' => $cf]);
    }   

    public function list()
    {
        if(Auth::user()->role == 'ahli' || Auth::user()->role == "admin"){
            $cf = Cirifisik::get();
            // dd($cf);
        }else{
            $cf = Cirifisik::where('id_user', Auth::user()->id)->get();
        }
        // dd($cf);
        return view('ciri-fisik.list', ['lists' => $cf]);
    }
    
    public function delete($id){
        $cf = Cirifisik::find($id);
        $cf->delete();
        return back()->with('success', "berhasil dihapus");
    }

    public function store(Request $rq){
        $data = $rq->all();
        $create = new Cirifisik();
        $create->id_user = Auth::user()->id;
        $create->warna = $data["warna"];
        $create->bentuk = $data["bentuk"];
        $create->kerusakan = $data["kerusakan"];
        $create->tekstur = $data["tekstur"];
        $create->umur = $data["umur"];
        $create->save();
        return back()->with('success', "berhasil ditambah");
    }
}
