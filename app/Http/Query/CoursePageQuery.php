<?php

namespace App\Http\Query;

use App\Models\Tenant\CoursePage;

class CoursePageQuery extends Query
{
    public function __construct()
    {
        $query = CoursePage::query();

        parent::__construct($query);

        $this
            ->allowedFields(['id','name','content','active','type'])
            ->allowedFilters('course_id')
            ->allowedIncludes(['course','questions'])
            ->allowedSorts(['id','name','created_at']);
    }
}
