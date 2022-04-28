<?php

namespace App\Http\Query;

use App\Models\Tenant\Task;
use App\Models\Tenant\TaskCategory;

class TaskCategoryQuery extends Query
{
    public function __construct()
    {
        $query = TaskCategory::query();

        parent::__construct($query);

        $this
            ->allowedFields(['id','name','description','order_column'])
            ->allowedSorts(['id', 'name'])
            ->allowedIncludes(['tasks']);
    }
}
