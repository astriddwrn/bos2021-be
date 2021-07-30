<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Facades\Excel;

class ALSExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'Nama',
            'NIM',
            'Kampus',
            'Jurusan',
            'No HP',
            'Line ID',
            'Jenis kelamin',
            'Alamat',
            'Domisili',
            'Tempat lahir',
            'Tanggal lahir',
            'Batch FYP'
        ];
    }

    public function collection()
    {
        return User::select('fullName', 'nim', 'campus', 'major', 'whatsapp', 'line_id', 'gender', 'address', 'domicile', 'placeBirth', 'birthDate', 'batch')->where('campus','=','ALS')->get();
    }

}
