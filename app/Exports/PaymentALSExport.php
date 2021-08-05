<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PaymentALSExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Time Stamp',
            'Nama',
            'LnT Course',
        ];
    }

    public function collection()
    {
        return User::select('updated_at', 'fullName', 'lnt_course')->where('campus','=','ALS')->where('status','=','1')->get();
    }
}
