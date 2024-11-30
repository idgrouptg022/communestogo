<?php

namespace App\Utils;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Commune
{
    public static function all(int $prefecture): Collection
    {
        return DB::table("communes")->where("prefecture_id", "=", $prefecture)->get();
    }
}
