<?php

namespace App\Http\Controllers;

use App\Models\Cirifisik;
use App\Models\Diagnosa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiagnosaController extends Controller
{
    public function list()
    {
        $cf = Cirifisik::get();
        return view('diagnosa.list', ['lists' => $cf]);
    }

    public function hasil($id)
    {
        $cf = Diagnosa::find($id);
        return view('ciri-fisik.hasil-diagnosa', ['hasil' => $cf]);
    }   

    public function delete($id){
        $d = Diagnosa::find($id);
        $d->delete();
        // dd($cf);
        $cf = Cirifisik::where('id_diagnosa', $id)->first();
        $cf->update(['id_diagnosa' => null]);
        return back()->with('success', "berhasil dihapus");
        
    }

    public function edit($id){
        $diagnosa = Diagnosa::find($id);
        return view("diagnosa.edit", ["diagnosa" => $diagnosa]);
    }

    public function update(Request $request){
        $data = $request->all();
        $cf = Diagnosa::find($data['id']);

        $cf->nama = $data['nama'];
        $cf->kerusakan = $data['kerusakan'];
        $cf->kelayakan = $data['kelayakan'];
        $cf->warna = $data['warna'];
        $cf->save();
        return back()->with('success', "berhasil diupdate");

    }


    public function tambah($id)
    {
        return view('diagnosa.tambah', ['id' => $id]);
    }

    public function store(Request $rq){
        $data = $rq->all();
        // dd($data);

        
        $create = new Diagnosa();
        $create->warna = $data["warna"];
        $create->kerusakan = $data["kerusakan"];
        $create->kelayakan = $data["kelayakan"];
        $create->nama = $data["nama"];
        $create->save();



        $cf = Cirifisik::find($data['id']);
        $data = [
            'id_diagnosa' => $create->id,
            'status' => 'sudah'
            
        ];
        $cf->update($data);
        // dd($data);


        return back()->with('success', "berhasil ditambah");
    }
}
