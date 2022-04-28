<?php

namespace App\Http\Query;

use App\Models\Tenant\UserLeaveBalance;

class UserLeaveBalanceQuery extends Query
{
    public function __construct()
    {
        $query = UserLeaveBalance::query();

        parent::__construct($query);

        $this
            ->allowedFields(['id','leave','current','available','scheduled','started_at','finished_at'])
            ->allowedIncludes('user')
            ->allowedSorts(['id']);
    }


    public function setUser($user): static
    {
        $this->whereUserId($user);

        return $this;
    }



}
