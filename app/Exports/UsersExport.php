<?php

namespace App\Exports;

use App\Page;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,WithHeadings {

  public function headings(): array {
    return [
       "first_name",
       "middle_name",
       "last_name",
        "email",
        "contact_number",
        "batch"
       
    ];
  }

  /**
  * @return \Illuminate\Support\Collection
  */
  public function collection() {

     return collect(Page::getUsers());
     // return Page::getUsers(); // Use this if you return data from Model without using toArray().
  }
}