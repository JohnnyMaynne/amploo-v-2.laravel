<?php

namespace App\Http\Query;

use App\Models\Tenant\Course;

class CourseQuery extends Query
{
    public function __construct()
    {
        $query = Course::query();

        parent::__construct($query);

        $this
            ->allowedFields([
                'id','name','published','author_id',
            ])
            ->allowedFilters('user_id')
            ->allowedIncludes(['author','pages'])
            ->allowedSorts(['id','name','created_at']);
    }
}
