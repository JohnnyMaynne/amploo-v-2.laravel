<?php

namespace App\Http\Query;

use App\Http\Relations\TrashedRelation;
use App\Models\Tenant\Base;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedInclude;

class BaseQuery extends Query
{
    public function __construct()
    {
        $query = Base::query();

        parent::__construct($query);

        $this
            ->allowedFields([
                'id', 'name','published','author_id'
            ])
            ->allowedIncludes([
               'user'
            ])
            ->allowedSorts(['id', 'name','created_at','updated_at']);
    }

  public function getSingleByCategory(string $uuid): Model
  {
      return $this
          ->where('id',$uuid)
          ->where('base_category_id', request('category'))
          ->firstOrFail();
  }
}
