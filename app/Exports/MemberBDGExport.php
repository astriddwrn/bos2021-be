<?php

namespace App\Exports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MemberBDGExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'BNCC ID',
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
            'Batch FYP',
            'Linkedin',
            'Github',
            'Course LnT'
        ];
    }

    public function collection()
    {
        return Member::select('bnccid','fullName', 'nim', 'campus', 'major', 'whatsapp', 'line_id', 'gender', 'address', 'domicile', 'placeBirth', 'birthDate', 'batch', 'linkedinUrl', 'githubUrl','lnt_course')->where('campus','=','BDG')->get();
    }
}
