<?php

namespace App\Http\Relations;

use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Includes\IncludeInterface;

class TrashedRelation implements IncludeInterface
{
    public function __invoke(Builder $query, string $relations)
    {
        $query->with([$relations => function($q) {
            return $q
                ->whereChildId(NULL)
                ->with('children')
                ->withTrashed();
        }]);
    }
}
