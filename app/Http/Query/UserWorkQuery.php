<?php

namespace App\Http\Query;

use App\Models\Tenant\UserWork;

class UserWorkQuery extends Query
{
    public function __construct()
    {
        $query = UserWork::query();

        parent::__construct($query);

        $this
            ->allowedFields(['id','company','job','description','started_at','finished_at'])
            ->allowedIncludes('user')
            ->allowedSorts(['id']);
    }


    public function setUser($user): static
    {
        $this->whereUserId($user);

        return $this;
    }



}
