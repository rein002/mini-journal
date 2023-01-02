<?php

namespace App\Models\Organization;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User\User;
use App\Models\Account\AccountTitle;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_user',
        'updated_user',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'organization_id', 'id');
    }

    public function accunt_titles()
    {
        return $this->hasMany(AccountTitle::class, 'organization_id', 'id');
    }

    public function journals()
    {
        return $this->hasMany(AccountTitle::class, 'organization_id', 'id');
    }
}
