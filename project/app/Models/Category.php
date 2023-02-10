<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 */
class Category extends Model
{
    use HasFactory;

    public $timestamps = false; //в файле миграции убрали timestamps, в котором создавались другие поля

}
