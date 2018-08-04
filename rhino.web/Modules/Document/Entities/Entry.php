<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entry';
    protected $fillable = [
        'doc_type',
        'copy_id',
        'exemplar_id',
        'person_id',
        'company_id',
        'company_got_id',
        'person_got_id',
        'letter_id',
        'document_id',
        'person_printed_id',
        'company_printed_id',
        'person_signed_id',
        'income_number_id',
        'local_number_id',
        'entry_description_id',
    ];
}
