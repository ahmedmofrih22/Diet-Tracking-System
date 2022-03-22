<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function Categorie()
    {
        return $this->belongsTo('App\Categorie', 'categorie_id');
    }
}
