<?php

class Entity {

    private $_id;
    private $_nom;
    private $_forcePerso;
    private $_degats;
    private $_niveau;
    private $_experience;

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
                
            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
            // On appelle le setter.
            $this->$method($value);
            }
        }
    }
    
    public function getId() 
    {
        return $this->$_id;    
    }

    public function setId($id)
    {
        if (!is_int($id))
        {
            trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        $this->$_id = $id;
    }
    
    public function getNom() 
    {
        return $this->$_nom;
    }

    public function setNom($nom)
    {
        if (!is_string($nom))
        {
            trigger_error('Il faut une chaîne de caractère', E_USER_WARNING);
            return;
        }
        $this->$_nom = $nom;
    }
    
    public function getForcePerso() 
    {
        return $this->$_forcePerso;
    }

    public function setForcePerso($forcePerso)
    {
        if (!is_int($forcePerso) && $forcePerso < 0 && $forcePerso > 100)
        {
            trigger_error('Le nombre doit être un entier plus grand que 0 et inférieur a 100', E_USER_WARNING);
            return;
        }
        $this->$_forcePerso = $forcePerso;
    }
    
    public function getDegats() 
    {
        return $this->$_degats;
    }

    public function setDegats($degats)
    {
        if (!is_int($degats) && $degats < 0 && $degats > 100)
        {
            trigger_error('Le nombre doit être un entier plus grand que 0 et inférieur a 100', E_USER_WARNING);
            return;
        }
        $this->$_degats = $degats;
    }
    
    public function getNiveau() 
    {
        return $this->$_niveau;
    }

    public function setNiveau($niveau)
    {
        if (!is_int($niveau) && $niveau < 0 && $niveau > 100)
        {
            trigger_error('Le nombre doit être un entier plus grand que 0 et inférieur a 100', E_USER_WARNING);
            return;
        }
        $this->_niveau = $niveau;
    }
    
    public function getExperience() 
    {
        return $this->$_experience;
    }

    public function setExperience($experience)
    {
        if (!is_int($experience) && $experience < 0 && $experience > 100)
        {
            trigger_error('Le nombre doit être un entier plus grand que 0 et inférieur a 100', E_USER_WARNING);
            return;
        }
        $this->$_experience = $experience;
    }

}
