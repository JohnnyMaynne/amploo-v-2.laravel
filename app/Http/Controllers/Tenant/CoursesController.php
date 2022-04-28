<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Query\CourseQuery;

class CoursesController extends Controller
{
    private CourseQuery $query;

    public function __construct(CourseQuery $query)
    {
        $this->query = $query;
    }

    public function index()
    {
        return  $this->query->getCollection();
    }
}
