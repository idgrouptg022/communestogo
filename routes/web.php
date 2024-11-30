<?php

use App\Http\Controllers\Guest\MainController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->as("guests:")->group(function () {

    Route::get("", [MainController::class, "home"])->name("home");

    Route::get("/presentation-communes", [MainController::class, "presentation"])->name("presentation");

    Route::get("/contact", [MainController::class, "contact"])->name("contact");

    Route::get("/bureau", [MainController::class, "bureau"])->name("bureau");

    Route::get("/localisation", [MainController::class, "location"])->name("location");

    Route::get("/etat-civil", [MainController::class, "etat"])->name("etat");

    Route::get("/taxes", [MainController::class, "taxes"])->name("taxes");

    Route::get("/devenir-partenaire", [MainController::class, "bePartner"])->name("bePartner");

    Route::get("/proposer-projet", [MainController::class, "proposer"])->name("proposer");

    Route::get("/siteweb", [MainController::class, "website"])->name("website");

    Route::get("/sante", [MainController::class, "sante"])->name("sante");

    Route::get("/tourisme", [MainController::class, "tourisme"])->name("tourisme");

    Route::get("/opportunites-affaires", [MainController::class, "business"])->name("business");

    Route::get("/jumelages", [MainController::class, "jumelages"])->name("jumelages");

    Route::get("/marches-publics", [MainController::class, "publicMarket"])->name("publicMarket");

    Route::get("/actions-sociales", [MainController::class, "social"])->name("social");

    Route::get("/emplois", [MainController::class, "emploi"])->name("emploi");

    Route::get("/urbanisme", [MainController::class, "urbanisme"])->name("urbanisme");

    Route::get("/environnement", [MainController::class, "environnement"])->name("environnement");

    Route::get("/education", [MainController::class, "education"])->name("education");

    Route::get("/culture", [MainController::class, "culture"])->name("culture");

    Route::get("/securite", [MainController::class, "securite"])->name("securite");

    Route::get("/cantons-quartiers", [MainController::class, "cantons"])->name("cantons");

    Route::get("/presentation-communes/{commune}/maquette", [MainController::class, "maquette"])->name("maquette");

    Route::get('fonctionnalites', [MainController::class, "functions"])->name("functions");

});
