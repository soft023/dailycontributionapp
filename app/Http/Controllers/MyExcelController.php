<?php

namespace App\Http\Controllers;

use App\Exports\CustomerinfosExport;
use App\Exportcabals\CabalExport;
use App\Exportcallover\CalloverExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Customerinfo;
use App\Cabal;



class MyExcelController extends Controller
{

public function export() 
{
    return Excel::download(new CustomerinfosExport, 'customerinfos.xlsx');
}

public function exportcabals() 
{
    return Excel::download(new CabalExport, 'dcbankoneupload.csv');
}



}
