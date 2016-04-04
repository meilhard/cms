<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    protected $table = 'content';

    use SoftDeletes;

    public function page()
    {
        return $this->belongsTo('page', 'id', 'pid');
    }
}
