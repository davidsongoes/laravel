<?php

namespace Charlie;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $casts = [
        'special_customer' => 'boolean',
        'birthdate' => 'date',
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

}
