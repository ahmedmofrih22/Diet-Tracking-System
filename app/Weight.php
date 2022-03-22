<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    protected $guarded = [];



    public function idClient()
    {
        return $this->belongsTo('App\Client', 'id_Client');
    }

    public function CategoreId()
    {
        return $this->belongsTo('App\Categorie', 'Categore_id');
    }
}
