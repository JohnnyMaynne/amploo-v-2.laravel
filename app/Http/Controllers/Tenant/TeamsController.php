<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Query\TeamQuery;

class TeamsController extends Controller
{
    private TeamQuery $query;

    public function __construct(TeamQuery $query)
    {
        $this->query = $query;
    }

    public function index()
    {
        return $this->query->getCollection();
    }

    public function show($team)
    {
        return $this->query->getSingle($team);
    }
}
