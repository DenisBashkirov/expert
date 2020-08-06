<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    public function services() {
        return $this->hasMany('App\Service', 'category_id', 'id');
    }
}
