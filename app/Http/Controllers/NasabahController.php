<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nasabah;
use Auth;
use App\Exports\NasabahExport;
use Excel;
use PDF;

class NasabahController extends Controller
{
    


    
      public function index()
    {


        $data['nasabah'] = \App\Nasabah::where('company_code', Auth::user()->company_code)->get(); 



        return view('nasabah/index')->with($data);
    }
public function create(){

    return view('nasabah/create');

}


public function save(Request $r){


$nasabah = new Nasabah;
$nasabah->code_nasabah= uniqid();
$nasabah->nama_nasabah= $r->input('nama_nasabah');

$nasabah->nomor_rekening= $r->input('nomor_rekening');
$nasabah->sid= $r->input('sid');
$nasabah->status= $r->input('status');
$nasabah->company_code = Auth::user()->company_code;
$nasabah->save();
return redirect(url('nasabah/index'));


}

public function edit($id){

$data['nasabah'] = Nasabah::find($id);

return view('nasabah/edit')->with($data);

}

public function update(Request $r){

$id = $r->input('id');
$nasabah = Nasabah::find($id);
$nasabah->code_nasabah= uniqid();
$nasabah->nama_nasabah= $r->input('nama_nasabah');

$nasabah->nomor_rekening= $r->input('nomor_rekening');
$nasabah->sid= $r->input('sid');
$nasabah->status= $r->input('status');
$nasabah->company_code = Auth::user()->company_code;
$nasabah->save();
return redirect(url('nasabah/index'));


}
  public function deletenasabah($id)
    {
        $nasabah = Nasabah::find($id);
        $nasabah->delete();
        return redirect(url('nasabah/index'));
    }
 
 public function exportExcel(){ 
   
    return Excel::download(new NasabahExport, 'list.xlsx');
  
}
 public function downloadpdf_allnasabah()
    {
        $data['nasabah'] = Nasabah::all();
        $pdf = PDF::loadview('nasabah.pdfall',$data);
        return $pdf->download('nasabahall.pdf');
    }

}
