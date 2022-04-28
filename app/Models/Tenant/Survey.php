<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Survey extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [''];

    public function user(): BelongsTo
    {
        return  $this->belongsTo(User::class);
    }
}
