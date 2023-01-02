<?php

namespace App\Models\Account;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Organization\Organization;

class AccountTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_id',
        'category',
        'name',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_id', 'id');
    }
}
