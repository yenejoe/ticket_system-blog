<?php

namespace App;

use Pdeio\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable = ['name', 'display_name', 'description'];
}
