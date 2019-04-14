<?php
namespace App\Exports;
use App\Nasabah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Auth;	
class NasabahExport implements FromCollection
{
  public function collection()
  {
    return Nasabah::where('company_code', Auth::user()->company_code)->get();
  }
}
