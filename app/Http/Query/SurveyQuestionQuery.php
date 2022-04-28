<?php

namespace App\Http\Query;

use App\Models\Tenant\SurveyQuestion;

class SurveyQuestionQuery extends Query
{
    public function __construct()
    {
        $query = SurveyQuestion::query();

        parent::__construct($query);

        $this
            ->allowedFields(['id','name','created_at','updated_at'])
            ->allowedSorts(['id', 'name','created_at','updated_at']);

    }
}
