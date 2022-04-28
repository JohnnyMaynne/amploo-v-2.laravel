<?php

namespace App\Http\Query;

use App\Models\Tenant\Survey;

class SurveyQuery extends Query
{
    public function __construct()
    {
        $query = Survey::query();

        parent::__construct($query);

        $this
            ->allowedFields(['id','name','created_at','updated_at'])
            ->allowedSorts(['id', 'name','created_at','updated_at']);

    }
}
