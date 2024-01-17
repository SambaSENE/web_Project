<?php

namespace App;

class Router
{
    public static function start()
    {

        $partiesUrl = explode("/", $_GET["page"]);

        $partieUrlController = "";

        if (count($partiesUrl) > 0 && $partiesUrl[0] != "") {
            $partieUrlController = $partiesUrl[0];
        } else {
            $partieUrlController = "Accueil";
        }


        if (count($partiesUrl) > 1 && $partiesUrl[1] != "") {
            $partieUrlMethode = $partiesUrl[1];
        } else {
            $partieUrlMethode = "index";
        }

        $nomController = "Controllers\\" . ucfirst($partieUrlController) . "Controller";

        if (!method_exists($nomController, $partieUrlMethode)) {

            $nomController = "Controllers\AccueilController";
            $partieUrlMethode = "nonTrouve";
        }


        $parametres = array_slice($partiesUrl, 2);


        $controller = new $nomController();

        $controller->$partieUrlMethode($parametres);
    }
}
