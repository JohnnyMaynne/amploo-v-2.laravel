<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Query\BaseQuery;

class BasesController extends Controller
{
    private BaseQuery $query;

    public function __construct(BaseQuery $query)
    {
        $this->query = $query;
    }

    public function index()
    {
        return $this->query->getCollection();
    }
}
