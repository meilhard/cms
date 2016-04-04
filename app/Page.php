<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;
    //

    public function content() {
        return $this->hasMany('App\Content', 'pid');
    }

    public function children() {
        return $this->hasMany('App\Page', 'pid');
    }
}
