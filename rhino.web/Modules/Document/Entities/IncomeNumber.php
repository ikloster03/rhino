<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class IncomeNumber extends Model
{
    protected $table = 'entry_description';
    protected $fillable = [
        'number',
        'date',
        'entry_id',

    ];
}
