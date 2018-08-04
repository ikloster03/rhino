<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $table = 'attachment';
    protected $fillable = [
        'description',
        'date',
        'entry_id',

    ];
}
