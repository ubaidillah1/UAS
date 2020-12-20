<?php

namespace App\Exports;

use App\Models\TransaksiModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
class ExportTransaksi implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TransaksiModel::all();
    }
}
