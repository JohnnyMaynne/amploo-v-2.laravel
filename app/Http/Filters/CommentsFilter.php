<?php

namespace App\Http\Filters;

use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class CommentsFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $model = $this->getValues($value);

        $query->where('commentable_type',$model);
    }


    private function getValues($value): string
    {
        switch ($value) {
            case 'course':
                return 'App\\Models\\Tenant\\Course';
            default:
                return 'App\\Models\\Tenant\\Base';
        }
    }
}
