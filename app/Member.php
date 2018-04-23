<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;


class Member extends Model
{
    protected $guarded = [];

    /**
     * @return Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
