<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Query\SurveyQuery;
use Illuminate\Http\Request;

class SurveysController extends Controller
{
    private SurveyQuery $query;

    public function __construct(SurveyQuery $query)
    {
        $this->query = $query;
    }

    public function index()
    {
        return $this->query->getCollection();
    }
}
