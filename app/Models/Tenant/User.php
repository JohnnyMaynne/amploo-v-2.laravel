<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const MALE    =  1;
    const FEMALE  =  2;

    protected $guarded =  [''];

    protected $appends = ['gender'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected function gender(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value
                ? $value === self::MALE ? 'Male' : 'Female'
                : '-',
        );
    }

    public function team(): BelongsTo
    {
        return  $this->belongsTo(Team::class);
    }
}
