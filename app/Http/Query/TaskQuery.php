<?php

namespace App\Http\Query;

use App\Models\Tenant\Task;
use Spatie\QueryBuilder\AllowedInclude;

class TaskQuery extends Query
{
    public function __construct()
    {
        $query = Task::query();

        parent::__construct($query);

        $this
            ->allowedFields(['id','name','description','author_id','user_id','category_id','priority','complete','order_column','started_at','finished_at','created_at','updated_at',])
            ->allowedSorts(['id', 'name','created_at','updated_at'])
            ->allowedIncludes(['author', 'user', 'category', 'team',]);

    }
}
