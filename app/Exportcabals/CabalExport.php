<?php

namespace App\Exportcabals;

use App\Cabal;
use Maatwebsite\Excel\Concerns\FromCollection;
use \Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadings;


class CabalExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	$date = Carbon::now()->format('Y-m-d');
        return Cabal::where('created_at', '>',$date)->get(['id','accountno','branchcode','debit','credit','postentry','narration','accounttype','flag']);
    }   

      public function headings(): array
    {
        return [
            '#',
            'Account Nuban',
            'Branch Code',	
            'Debit',	
            'Credit',    
            'Post Entry',    
            'Narration',    
            'Account Type',    
            'Flag',    
        ];

    }
}
