<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class RedBlank extends Model
{
    protected $table = 'red_blank';
    protected $fillable = [
        'number',
        'date',
        'entry_id',

    ];
}
