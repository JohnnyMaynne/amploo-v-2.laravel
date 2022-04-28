<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Query\UserEducationQuery;

class UserEducationsController extends Controller
{
    private UserEducationQuery $query;

    public function __construct(UserEducationQuery $query)
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
