<?php

namespace App\Http\Relations;

use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Includes\IncludeInterface;

class TreeRelation implements IncludeInterface
{

    public function __invoke(Builder $query, string $relations)
    {
        $query->with([$relations => function($q) {
            return $q
                ->whereParentId(null)
                ->select(['id','name','base_category_id'])
                ->with('children');
        }]);
    }
}
