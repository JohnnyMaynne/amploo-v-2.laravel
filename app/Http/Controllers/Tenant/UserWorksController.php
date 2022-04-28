<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Query\UserWorkQuery;

class UserWorksController extends Controller
{
    private UserWorkQuery $query;

    public function __construct(UserWorkQuery $query)
    {
        $this->query = $query;
    }

    public function index($user)
    {
        return $this
            ->query
            ->setUser($user)
            ->getCollection();
    }
}
