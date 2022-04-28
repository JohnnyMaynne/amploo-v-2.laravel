<?php

namespace App\Http\Query;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\QueryBuilder;

class Query extends QueryBuilder
{
    public function getCollection(): LengthAwarePaginator
    {
        return $this->paginate(request('limit'))
            ->appends(request()->query());
    }


    public function getSingle(string $uuid): Model
    {
        return $this->findOrFail($uuid);
    }
}
