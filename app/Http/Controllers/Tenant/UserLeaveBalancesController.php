<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Query\UserLeaveBalanceQuery;
use Illuminate\Http\Request;

class UserLeaveBalancesController extends Controller
{

    private UserLeaveBalanceQuery $query;

    public function __construct(UserLeaveBalanceQuery $query)
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
