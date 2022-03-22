<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fat_Percentage extends Model
{
    protected $guarded = [];
    public function ClientNumber()
    {
        return $this->belongsTo('App\Client', 'Client_number');
    }

    public function CategoreId()
    {
        return $this->belongsTo('App\Categorie', 'Categore_id');
    }
}
