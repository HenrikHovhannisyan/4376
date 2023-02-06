<?php

namespace App\Exports;

use App\Models\Staff;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class StaffExport implements FromCollection
{
    /**
    * @return Collection
    */
    public function collection()
    {
        return Staff::all();
    }
}
