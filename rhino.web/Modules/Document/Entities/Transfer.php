<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $table = 'transfer';
    protected $fillable = [
        'entry_id',
        'type',
        'letter_number',
        'resolution_id',
        'company_send_id',
        'company_get_id',
        'person_send_id',
        'person_get_id',
        'date_send',
        'date_get',
        'sign_date',
        'note',
        'comment',

    ];
}
