<?php

namespace App\Http\Query;

use App\Models\Tenant\User;
use Spatie\QueryBuilder\AllowedFilter;

class UserQuery extends Query
{
    public function __construct()
    {
        $query = User::query();

        parent::__construct($query);

        $this
            ->allowedFields(['id','name', 'email','created_at'])
            ->allowedIncludes('team')
            ->allowedFilters([
                AllowedFilter::exact('team_id')
            ])
            ->allowedSorts(['id','name', 'email']);

    }
}
