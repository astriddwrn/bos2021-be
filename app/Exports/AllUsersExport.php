<?php

namespace App\Exports;

use App\Models\User2;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class AllUsersExport implements FromCollection, WithHeadings
{

    // ref: https://stackoverflow.com/a/37157879/5832341
    public function headings(): array
    {
        return DB::getSchemaBuilder()->getColumnListing("users");
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User2::where('role','=', 0)->get();
    }
}
