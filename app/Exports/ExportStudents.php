<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportStudents implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $headers = [
            'id', 'email', 'password', 'created_at', 'updated_at'
        ];

        $arrayForExcel = collect([$headers]);
        $data = User::all();
        foreach ($data as $x){
            $arrayForExcel->push([
                $x->id,
                $x->email,
                $x->password,
                $x->created_at,
                $x->updated_at
            ]);
        };
        return $arrayForExcel;
    }
}
