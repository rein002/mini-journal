<?php

namespace App\Models\Journal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Journal\Journal;

class JournalDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'journal_id',
        'lend_borrow',
        'amount',
        'created_user',
        'updated_user',
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class, 'journal_id', 'id');
    }
}
