<?php

namespace App\Models;

use App\Connexion;
use PDO;

require "Connexion.php";
class CpuModel
{
    protected $maTable;

    public function  __construct($_maTable)
    {
        $this->maTable = $_maTable;
    }


    public function getCPU(): array
    {
        $connexion = Connexion::getInstance();

        $rq = "SELECT  cpu_id, cpu_family , cpu_mhz FROM " . $this->maTable;
        $states = $connexion->query($rq);
        $cpuData = $states->fetchAll();
        return $cpuData;
    }

    public function create($_famille, $_modele, $_frequence): void
    {
        $connexion = Connexion::getInstance();
        $rq = "INSERT INTO $this->maTable VALUES(cpu_id , :family , :model , :frequence)";
        $states = $connexion->query($rq);
        $states->bindParam(":family", $_famille, PDO::PARAM_STR);
        $states->bindParam(":model", $_modele, PDO::PARAM_STR);
        $states->bindParam(":frequence", $_frequence, PDO::PARAM_INT);

        $states->execute();
    }
}
