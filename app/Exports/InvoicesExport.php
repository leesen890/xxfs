<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class InvoicesExport implements FromCollection
{
    /**
    *@return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Invoices::all();
    }
}