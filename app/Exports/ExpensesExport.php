<?php

namespace App\Exports;

use App\Models\Expens;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExpensesExport implements FromCollection
{
    /**
    * @return Collection
    */
    public function collection()
    {
        return Expens::all();
    }
}
