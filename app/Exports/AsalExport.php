<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
use App\Model\Asal;

class AsalExport implements FromCollection{


    public function collection()
    {
        $asal = Asal::all();
        return $asal;
    }
}