<?php
<<<<<<< HEAD
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
=======

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandesRepository")
 */
class Commandes
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
     * @ORM\Column(type="datetime")
     */
    private $Date;
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
    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Betes")
    * @ORM\JoinColumn(nullable=false)
    */
    private $bete;
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * @ORM\Column(type="boolean")
     */
    private $Etat;
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    public function getId()
    {
        return $this->id;
    }
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }
<<<<<<< HEAD
    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;
        return $this;
    }
=======

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    public function getEtat(): ?bool
    {
        return $this->Etat;
    }
<<<<<<< HEAD
    public function setEtat(bool $Etat): self
    {
        $this->Etat = $Etat;
        return $this;
    }
=======

    public function setEtat(bool $Etat): self
    {
        $this->Etat = $Etat;

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
=======

        return $this;
    }

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * Get the value of bete
     */ 
    public function getBete()
    {
        return $this->bete;
    }
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * Set the value of bete
     *
     * @return  self
     */ 
    public function setBete($bete)
    {
        $this->bete = $bete;
<<<<<<< HEAD
        return $this;
    }
}
=======

        return $this;
    }
}
>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
