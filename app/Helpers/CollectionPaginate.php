<?php

namespace App\Helpers;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class CollectionPaginate
{
    public static function paginate($items, $per_page, $request)
    {
        $page = $request->get('page', 1);
        $offset = ($page * $per_page) - $per_page;

        return new LengthAwarePaginator(
            $items->forPage($page, $per_page)->values(),
            $items->count(),
            $per_page,
            Paginator::resolveCurrentPage(),
            ['path' => Paginator::resolveCurrentPath()]
        );
    }
}
