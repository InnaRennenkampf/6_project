<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class Review extends Model
{
    use HasFactory;

    public $timestamps = false; //в файле миграции убрали timestamps, в котором создавались другие поля
}
