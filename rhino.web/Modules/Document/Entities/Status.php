<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $fillable = [
        'title',
        'note',

    ];
}
