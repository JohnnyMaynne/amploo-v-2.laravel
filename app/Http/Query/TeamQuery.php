<?php

namespace App\Http\Query;

use App\Models\Tenant\Team;
use Spatie\QueryBuilder\AllowedInclude;

class TeamQuery extends Query
{
    public function __construct()
    {
        $query = Team::query();

        parent::__construct($query);

        $this
            ->allowedFields(['id', 'name'])
            ->allowedSorts(['id', 'name'])
            ->allowedIncludes([
                'users',
                AllowedInclude::count('users'),

            ]);

    }
}
