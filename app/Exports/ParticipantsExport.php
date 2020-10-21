<?php

namespace App\Exports;

use App\Participant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ParticipantsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'Name',
            'Age',
            'Gender',
            'Address',
            'Email Address',
            'Contact Number',
            'Race Category',
            'Date Registered',
            'Shirt Size',
        ];
    }

    public function collection()
    {
        return Participant::get([
            'name',
            'age',
            'gender',
            'address',
            'email_address',
            'contact_number',
            'race_category',
            'date_registered',
            'shirt_size',
        ]);
    }
}
