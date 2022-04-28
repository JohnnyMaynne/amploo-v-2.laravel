<?php

namespace App\Http\Query;

use App\Http\Relations\TreeRelation;
use App\Models\Tenant\BaseCategory;
use Spatie\QueryBuilder\AllowedInclude;

class BaseCategoryQuery extends Query
{
    public function __construct()
    {
        $query = BaseCategory::query();

        parent::__construct($query);

        $this
            ->allowedFields(['id','name','created_at','updated_at',
                'bases.id','bases.name','bases.base_category_id',
                'base.id','base.name','base.base_category_id'
            ])
            ->allowedSorts(['id', 'name','created_at','updated_at'])
            ->allowedIncludes([
                'bases',
                'base',
                AllowedInclude::custom('bases_tree', new TreeRelation(), 'bases'),
            ]);
    }
}
