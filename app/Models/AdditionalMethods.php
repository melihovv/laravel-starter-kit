<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

trait AdditionalMethods
{
    /**
     * Scope a query to select last record in the table.
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeLast($query)
    {
        return $query->orderBy('id', 'desc')->limit(1);
    }
}
