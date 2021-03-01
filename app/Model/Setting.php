<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /** atributos filables */
    protected $fillable = [
        'id', 
        'name', 
        'email', 
        'url', 
        'description', 
        'keyword', 
        'address', 
        'google_maps', 
        'phone', 
        'phone_mobile', 
        'whatsapp', 
        'logotipo', 
        'icon',
    ];

    /** Gera URL amigavel para slug */
    // public function setNameAtribute($value)
    // {
    //     $this->attributes['name'] = $value;
    //     //$this->attributes['slug'] = Str::slug($value);
    // }
}
