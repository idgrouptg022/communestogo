<?php

namespace App\Utils;


use Illuminate\Support\Facades\DB;
use stdClass;

class CommuneLink
{
    public static function getCommuneLink(int $communeId): stdClass|null
    {
        return DB::table("commune_links")->where("commune_id", "=", $communeId)->first();
    }
}
