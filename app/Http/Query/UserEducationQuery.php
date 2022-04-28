<?php

namespace App\Http\Query;

use App\Models\Tenant\UserEducation;

class UserEducationQuery extends Query
{
    public function __construct()
    {
        $query = UserEducation::query();

        parent::__construct($query);

        $this
            ->allowedFields(['id','school_name','degree','major','gpa','started_at','finished_at'])
            ->allowedIncludes('user')
            ->allowedSorts(['id']);
    }


    public function setUser($user): static
    {
        $this->whereUserId($user);

        return $this;
    }



}
