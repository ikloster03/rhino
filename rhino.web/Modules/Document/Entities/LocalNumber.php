<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class LocalNumber extends Model
{
    protected $table = 'local_number';
    protected $fillable = [
        'number',
        'date',
        'entry_id',

    ];
}
