<?php

namespace App\Models;

use App\Enums\Page;
use App\Enums\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CMS extends Model
{
    use HasFactory;
    protected $guarded=[];

    // protected $casts = [
    //     "page"      => Page::class,
    //     "section"   => Section::class,
    // ];
}
