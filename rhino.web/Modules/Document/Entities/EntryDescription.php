<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class EntryDescription extends Model
{
    protected $table = 'entry_description';
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'description',
        'amount_pages',
        'category',
    ];
}
