<?php

namespace App\Exports;

use App\Models\SupplierModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class ExportSupplier implements FromCollection , WithMapping , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SupplierModel::all();
    }
    public function map($supplier): array
    {
        return [
            $supplier->id_sup,
            $supplier->nama,
            $supplier->kota
        ];
    }
    public function headings(): array
    {
        return [
            'ID Supplier',
            'Nama Supplier',
            'Kota'
        ];
    }
}
