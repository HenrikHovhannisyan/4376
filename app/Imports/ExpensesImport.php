<?php

namespace App\Imports;

use App\Models\Expens;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExpensesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {
        $expenses = new Expens([
            'phase' => $row['phase'],
            'category' => $row['category'],
            'description' => $row['description'],
            'qty' => $row['qty'],
            'costPerUnit' => $row['costperunit'],
            'cost' => $row['cost'],
            'recoveryPercent' => $row['recoverypercent'],
            'recovery' => $row['recovery']
        ]);

        return $expenses;
    }
}
