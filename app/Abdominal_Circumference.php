<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abdominal_Circumference extends Model
{
    protected $guarded = [];

    public function Client()
    {
        return $this->belongsTo('App\Client', 'Client_id');
    }
    public function CategoreId()
    {
        return $this->belongsTo('App\Categorie', 'Categore_id');
    }
}
