<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Exception;

class MainController extends Controller
{
    // public $communes = [
    //     "Golfe" => [
    //         "Golfe 1",
    //         "Golfe 2",
    //         "Golfe 3",
    //         "Golfe 4",
    //         "Golfe 5",
    //         "Golfe 6",
    //         "Golfe 7",
    //     ],
    //     "Agoe" => [
    //         "Agoè-Nyivé 1",
    //         "Agoè-Nyivé 2",
    //         "Agoè-Nyivé 3",
    //         "Agoè-Nyivé 4",
    //         "Agoè-Nyivé 5",
    //         "Agoè-Nyivé 6",
    //     ],
    //     "Zio" => [
    //         "Zio 1",
    //         "Zio 2",
    //         "Zio 3",
    //         "Zio 4",
    //     ],
    //     "Lacs" => [
    //         "Lacs 1",
    //         "Lacs 2",
    //         "Lacs 3",
    //         "Lacs 4",
    //     ],
    //     "Vo" => [
    //         "Vo 1",
    //         "Vo 2",
    //         "Vo 3",
    //         "Vo 4",
    //     ],
    //     "Yoto" => [
    //         "Yoto 1",
    //         "Yoto 2",
    //         "Yoto 3",
    //     ],
    //     "Bas-Mono" => [
    //         "Bas-Mono 1",
    //         "Bas-Mono 2",
    //     ],
    //     "Ave" => [
    //         "Avé 1",
    //         "Avé 2",
    //     ],
    //     "Haho" => [
    //         "Haho 1",
    //         "Haho 2",
    //         "Haho 3",
    //         "Haho 4",
    //     ],
    //     "Wawa" => [
    //         "Wawa 1",
    //         "Wawa 2",
    //         "Wawa 3",
    //     ],
    //     "Amou" => [
    //         "Amou 1",
    //         "Amou 2",
    //         "Amou 3",
    //     ],
    //     "Ogou" => [
    //         "Ogou 1",
    //         "Ogou 2",
    //         "Ogou 3",
    //         "Ogou 4",
    //     ],
    //     "Kloto" => [
    //         "Kloto 1",
    //         "Kloto 2",
    //         "Kloto 3",
    //     ],
    //     "Kpele" => [
    //         "Kpélé 1",
    //         "Kpélé 2",
    //     ],
    //     "Akebou" => [
    //         "Akébou 1",
    //         "Akébou 2",
    //     ],
    //     "Danyi" => [
    //         "Danyi 1",
    //         "Danyi 2",
    //     ],
    //     "Agou" => [
    //         "Agou 1",
    //         "Agou 2",
    //     ],
    //     "Moyen-Mono" => [
    //         "Moyen-Mono 1",
    //         "Moyen-Mono 2",
    //     ],
    //     "Est-Mono" => [
    //         "Est-Mono 1",
    //         "Est-Mono 2",
    //         "Est-Mono 3",
    //     ],
    //     "Anie" => [
    //         "Anié 1",
    //         "Anié 2",
    //     ],
    //     "Blitta" => [
    //         "Blitta 1",
    //         "Blitta 2",
    //         "Blitta 3",
    //     ],
    //     "Tchamba" => [
    //         "Tchamba 1",
    //         "Tchamba 2",
    //         "Tchamba 3",
    //     ],
    //     "Mo" => [
    //         "Mô 1",
    //         "Mô 2",
    //     ],
    //     "Sotubooua" => [
    //         "Sotouboua 1",
    //         "Sotouboua 2",
    //         "Sotouboua 3",
    //     ],
    //     "Tchaoudjo" => [
    //         "Tchaoudjo 1",
    //         "Tchaoudjo 2",
    //         "Tchaoudjo 3",
    //         "Tchaoudjo 4",
    //     ],
    //     "Assoli" => [
    //         "Assoli 1",
    //         "Assoli 2",
    //         "Assoli 3",
    //     ],
    //     "Doufelgou" => [
    //         "Doufelgou 1",
    //         "Doufelgou 2",
    //         "Doufelgou 3",
    //     ],
    //     "Binah" => [
    //         "Binah 1",
    //         "Binah 2",
    //     ],
    //     "Kozah" => [
    //         "Kozah 1",
    //         "Kozah 2",
    //         "Kozah 3",
    //         "Kozah 4",
    //     ],
    //     "Dankpen" => [
    //         "Dankpen 1",
    //         "Dankpen 2",
    //         "Dankpen 3",
    //     ],
    //     "Bassar" => [
    //         "Bassar 1",
    //         "Bassar 2",
    //         "Bassar 3",
    //         "Bassar 4",
    //     ],
    //     "Keran" => [
    //         "Kéran 1",
    //         "Kéran 2",
    //         "Kéran 3",
    //     ],
    //     "Tandjouare" => [
    //         "Tandjouare 1",
    //         "Tandjouare 2",
    //     ],
    //     "Oti Sud" => [
    //         "Oti Sud 1",
    //         "Oti Sud 2",
    //     ],
    //     "Oti" => [
    //         "Oti 1",
    //         "Oti 2",
    //     ],
    //     "Kpendjal Ouest" => [
    //         "Kpendjal Ouest 1",
    //         "Kpendjal Ouest 2",
    //     ],
    //     "Kpendjal" => [
    //         "Kpendjal 1",
    //         "Kpendjal 2",
    //     ],
    //     "Tone" => [
    //         "Tône 1",
    //         "Tône 2",
    //         "Tône 3",
    //         "Tône 4",
    //     ],
    //     "Cinkasse" => [
    //         "Cinkassé 1",
    //         "Cinkassé 2",
    //     ],

    // ];


    // public $prefectures = DB::table("prefectures")->get();

    public function home(): View
    {
        $page = "home";
        $prefectures = DB::table("prefectures")->get();
        $annonces = DB::table("annonces")->orderByDesc('id')->get();
        return view("pages.guests.home", compact("page", "prefectures", "annonces"));
    }

    public function presentation()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.presentation", compact("prefectures", "page"));
    }

    public function contact()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.contact", compact("prefectures", "page", "prefectures"));
    }

    public function bureau()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.bureau", compact("prefectures", "page"));
    }

    public function location()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.location", compact("prefectures", "page"));
    }

    public function etat()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.etat", compact("prefectures", "page"));
    }

    public function taxes()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.taxes", compact("prefectures", "page"));
    }

    public function bePartner()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.bePartner", compact("prefectures", "page"));
    }

    public function proposer()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.proposer", compact("prefectures", "page"));
    }

    public function website()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.website", compact("prefectures", "page"));
    }

    public function sante()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.sante", compact("prefectures", "page"));
    }

    public function tourisme()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.tourisme", compact("prefectures", "page"));
    }

    public function cantons()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.cantons", compact("prefectures", "page"));
    }

    //nouveau
    public function business()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.business", compact("prefectures", "page"));
    }

    public function jumelages()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.jumelages", compact("prefectures", "page"));
    }

    public function publicMarket()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.public_market", compact("prefectures", "page"));
    }

    public function social()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.social", compact("prefectures", "page"));
    }

    public function emploi()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.emplois", compact("prefectures", "page"));
    }

    public function urbanisme()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.urbanisme", compact("prefectures", "page"));
    }

    public function environnement()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.environnement", compact("prefectures", "page"));
    }

    public function education()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.education", compact("prefectures", "page"));
    }

    public function culture()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.culture", compact("prefectures", "page"));
    }

    public function securite()
    {
        $prefectures = DB::table("prefectures")->get();

        $page = "home";

        return view("pages.guests.securite", compact("prefectures", "page"));
    }

    public function maquette(int $commune): View
    {
        $page = "home";

        if (!is_int($commune)) abort(500);

        try {
            $communeLink = DB::table("commune_links")->where("commune_id", $commune)->first();

            // $prefectures = DB::table("prefectures")->get();

            return view("pages.guests.communes.monographie", compact("page", "communeLink", "commune"));
        } catch(Exception) {
            abort(404);
        }
    }

    public function functions()
    {
        $page = "home";

        return view("pages.guests.functions", compact("page"));
    }
}
