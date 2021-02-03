<?php

namespace App\Models\Country;

use Illuminate\Database\Eloquent\Model;
use App\Models\Country\State;

class Country extends Model
{
    public function statesInOrder()
    {
        return $this->hasMany(State::class, 'country_code', 'code')->orderBy('state_name', 'asc');
    }
}
