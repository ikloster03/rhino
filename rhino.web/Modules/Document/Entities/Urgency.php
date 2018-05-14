<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class Urgency extends Model
{
    protected $table = 'urgency';
    protected $fillable = [
        'deadline',
        'type',
        'comment',
        'entry_id',

    ];
}
