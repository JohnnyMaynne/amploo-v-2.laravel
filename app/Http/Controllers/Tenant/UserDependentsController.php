<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Query\UserDependentQuery;

class UserDependentsController extends Controller
{

    private UserDependentQuery $query;

    public function __construct(UserDependentQuery $query)
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
