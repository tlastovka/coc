<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Action extends Model
{
    protected $guarded = [];


    /**
     * @return HasMany
     */
    public function user()
    {
        return $this->HasMany(User::class);
    }



}