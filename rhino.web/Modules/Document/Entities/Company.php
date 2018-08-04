<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $fillable = [
        'name',
        'description',
        'parent_id',

    ];
}
