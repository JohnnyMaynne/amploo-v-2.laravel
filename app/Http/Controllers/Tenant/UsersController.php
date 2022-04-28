<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Query\UserQuery;

class UsersController extends Controller
{
    private UserQuery $query;

    public function __construct(UserQuery $query)
    {
        $this->query = $query;
    }

    public function index()
    {
        return $this->query->getCollection();
    }

    public function show($user)
    {
        return $this->query->getSingle($user);
    }


}
