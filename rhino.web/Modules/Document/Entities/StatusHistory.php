<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class StatusHistory extends Model
{
    protected $table = 'status_history';
    protected $fillable = [
        'entry_id',
        'status_id',
        'note',
        'date',

    ];
}
