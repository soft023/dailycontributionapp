<?php

namespace App\Exports;

use App\Customerinfo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class CustomerinfosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Customerinfo::all();
    }

      public function headings(): array
    {
        return [
            '#',
            'firstname',
            'surname',	
            'othername',	
            'landmark',	
            'address',	
            'town',	
            'lga',	
			'state',	
			'phone',	
			'dob',	
			'maritalstatus',	
			'nationality',	
			'nokname',	
			'nokrelationship',	
			'nokaddress',	
			'nokphone',	
			'occupation',	
			'contribution',	
			'religion',	
			'passport',	
			'signature',	
			'idcard',	
			'accountno',	
			'bvn',	
			'balance',	
			'withdrawable',	
			'createdby',	
			'status',	
			'created_at',	
			'updated_at',

        ];

    }
}
