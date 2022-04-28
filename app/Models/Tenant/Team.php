<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public $timestamps = false;

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    protected function usersChunk(): Attribute
    {
        return Attribute::make(
            get: fn () => User::whereTeamId($this->id)->limit(4)->get(),
        );
    }

}
