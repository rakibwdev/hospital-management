<?php

namespace App\Traits;

trait ModelTrait
{
    public function filterByDate($query, $date)
    {
        return $query->when($date, function ($query, $date) {
            $query->where('created_at', '>=', $date);
            $query->orWhere('updated_at', '>=', $date);
            $query->orWhere('deleted_at', '>=', $date);
        });
    }

    public function searchByCoumn($query, $search)
    {
        // return $query->when($search, function ($query, $search) {
        //     $query->where('name', 'like', '%'.$search.'%');
        // });
        return $query->when($search, function($query, $search){
            $query->where('name','like', '%' .$search. '%');
        });
    }
}
