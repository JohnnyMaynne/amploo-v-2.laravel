<?php

namespace App\Http\Query;

use App\Models\Tenant\Board;

class BoardQuery extends Query
{
    public function __construct()
    {
        $query = Board::query();

        parent::__construct($query);

        $this
            ->allowedFields(['id','name','created_at','updated_at'])
            ->allowedSorts(['id', 'name','created_at','updated_at']);

    }
}
