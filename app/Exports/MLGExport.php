<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Facades\Excel;

class MLGExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'Nama',
            'Personal Email',
            'Email BINUS',
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
            'Batch FYP',
            'Course LnT'
        ];
    }

    public function collection()
    {
        return User::select('fullName', 'personal_email','email','nim', 'campus', 'major', 'whatsapp', 'line_id', 'gender', 'address', 'domicile', 'placeBirth', 'birthDate', 'batch','lnt_course')->where('campus','=','MLG')->get();
    }

}

