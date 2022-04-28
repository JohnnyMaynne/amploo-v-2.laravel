<?php

namespace App\Http\Query;

use App\Models\Tenant\UserDependent;

class UserDependentQuery extends Query
{
    public function __construct()
    {
        $query = UserDependent::query();

        parent::__construct($query);

        $this
            ->allowedFields(['id','name','dependents','phone','started_at'])
            ->allowedIncludes('user')
            ->allowedSorts(['id']);
    }


    public function setUser($user): static
    {
        $this->whereUserId($user);

        return $this;
    }



}
