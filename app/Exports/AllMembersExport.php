<?php

namespace App\Exports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class AllMembersExport implements FromCollection, WithHeadings
{

    public $region = "%%";

    // ref: https://docs.laravel-excel.com/3.1/architecture/objects.html#constructor
    public function __construct($region = "%%")
    {
        $this->region = $region;
    }

    // ref: https://stackoverflow.com/a/37157879/5832341
    public function headings(): array
    {
        $arr = DB::getSchemaBuilder()->getColumnListing("members");
        // $arr2 = [];
        // foreach($arr as $name){
        //     if($name != 'password' && $name != 'remember_token')
        //         array_push($arr2, $name);
        // }
        return $arr;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Member::where('campus', 'like', $this->region)->get();
    }
}
