<?php
<<<<<<< HEAD
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
=======

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
/**
 * @ORM\Entity(repositoryClass="App\Repository\BergeriesRepository")
 */
class Bergeries
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;
<<<<<<< HEAD
    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    */
    private $user;
    
=======

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Utilisateurs")
    * @ORM\JoinColumn(nullable=false)
    */
    private $utilisateur;

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    public function getId()
    {
        return $this->id;
    }
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    public function getNom(): ?string
    {
        return $this->Nom;
    }
<<<<<<< HEAD
    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;
        return $this;
    }
=======

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }
<<<<<<< HEAD
    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;
        return $this;
    }
=======

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * Get the value of utilisateur
     */ 
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * Set the value of utilisateur
     *
     * @return  self
     */ 
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
<<<<<<< HEAD
        return $this;
    }
}
=======

        return $this;
    }
}
>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
