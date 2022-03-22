<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Height extends Model
{
    protected $guarded = [];
    public function ClientId()
    {
        return $this->belongsTo('App\Client', 'Client__Id');
    }

    public function CategoreId()
    {
        return $this->belongsTo('App\Categorie', 'Categore_id');
    }
}
