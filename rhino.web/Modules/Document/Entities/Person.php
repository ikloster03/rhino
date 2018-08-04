<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';
    protected $fillable = [
        'name',
        'surname',
        'midname',
        'company_id',

    ];
}
