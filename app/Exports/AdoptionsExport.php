<?php

namespace App\Exports;

use App\Models\Adoption;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class AdoptionsExport implements FromView, WithColumnWidths, WithStyles
{
    public function view(): View
    {
        return view('adoptions.excel', [
            'adoptions' => Adoption::all()
        ]);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 15,  
            'C' => 25,            
            'D' => 25,            
            'E' => 20,            
            'F' => 20,            
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true, 'size' => 16]],
        ];
    }
}


