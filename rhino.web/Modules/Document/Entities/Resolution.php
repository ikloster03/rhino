<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class Resolution extends Model
{
    protected $table = 'resolution';
    protected $fillable = [
        'person_id',
        'description',
        'priority',
        'sign_date',

    ];
}
