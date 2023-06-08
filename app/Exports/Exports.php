<?php

namespace App\Exports;

use Corebase\Post\Models\Post;
use Maatwebsite\Excel\Concerns\FromCollection;

class Exports implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return Post::all();
        
    }
}
