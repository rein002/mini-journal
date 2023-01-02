<?php

namespace App\Models\Journal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Organization\Organization;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_id',
        'trade_date',
        'summary',
    ];
    protected $dates = ['trade_date'];

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_id', 'id');
    }
}
