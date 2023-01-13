<?php

abstract class Personne {
    protected string $prenom;
    protected string $nom;
    protected int $matricule;

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getMatricule()
    {
        return $this->matricule;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }
}

interface SavoirMarcherEnRang {
    public function marcher();
}
interface SavoirCrier {
    public function crier();
}
interface SavoirConduire {
    public function conduire();
}
interface AvoirVoiture {
    public function voiture();
}

class Soldat extends Personne implements SavoirMarcherEnRang {
    public function marcher()
    {
        echo "Je suis un soldat avant tout et je sais marcher en rang";
    }
}

class Lieutenant extends Soldat implements SavoirCrier, SavoirConduire {
    public function crier()
    {
        echo "Je suis un lieutenant et je sais crier";
    }
    public function conduire()
    {
        echo "Je suis un lieutenant et je sais conduire";
    }
}

class General extends Lieutenant implements SavoirCrier, AvoirVoiture {
    public function crier()
    {
        echo "Je suis un lieutenant et je sais crier différemment";
    }
    public function voiture()
    {
        echo "Je suis un général et j'ai ma propre voiture";
    }
}

class SuperGaneral extends General implements AvoirVoiture {
    public function voiture()
    {
        echo "Je suis un SuperGénéral et j'ai ma propre voiture jolie";
    }
}


class Sirenne {
    public static function sonne(){
        echo "je donne l'alerte";
    }
}



Sirenne::sonne();