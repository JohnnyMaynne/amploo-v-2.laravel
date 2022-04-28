<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Query\BoardQuery;
use Illuminate\Http\Request;

class BoardsController extends Controller
{
    private BoardQuery $query;

    public function __construct(BoardQuery $query)
    {
        $this->query = $query;
    }

    public function index()
    {
        return $this->query->getCollection();
    }
}
