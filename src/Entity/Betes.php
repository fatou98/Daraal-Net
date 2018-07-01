<?php
<<<<<<< HEAD
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
=======

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
/**
 * @ORM\Entity(repositoryClass="App\Repository\BetesRepository")
 */
class Betes
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
    private $DateNaissance;
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Taille;
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Poids;
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * @ORM\Column(type="text")
     */
    private $Description;
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * @ORM\Column(type="boolean")
     */
    private $Etat;
    
    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Bergeries")
    * @ORM\JoinColumn(nullable=false)
    */
    private $bergerie;
<<<<<<< HEAD
    
    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Betes" ,  inversedBy="bete")
    * @ORM\JoinColumn(nullable=false)
    */
    private $images;
=======
>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Races")
    * @ORM\JoinColumn(nullable=false)
    */
    private $race;
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
    public function getDateNaissance(): ?string
    {
        return $this->DateNaissance;
    }
<<<<<<< HEAD
    public function setDateNaissance(string $DateNaissance): self
    {
        $this->DateNaissance = $DateNaissance;
        return $this;
    }
=======

    public function setDateNaissance(string $DateNaissance): self
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    public function getTaille(): ?string
    {
        return $this->Taille;
    }
<<<<<<< HEAD
    public function setTaille(string $Taille): self
    {
        $this->Taille = $Taille;
        return $this;
    }
=======

    public function setTaille(string $Taille): self
    {
        $this->Taille = $Taille;

        return $this;
    }

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    public function getPoids(): ?string
    {
        return $this->Poids;
    }
<<<<<<< HEAD
    public function setPoids(string $Poids): self
    {
        $this->Poids = $Poids;
        return $this;
    }
=======

    public function setPoids(string $Poids): self
    {
        $this->Poids = $Poids;

        return $this;
    }

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    public function getDescription(): ?string
    {
        return $this->Description;
    }
<<<<<<< HEAD
    public function setDescription(string $Description): self
    {
        $this->Description = $Description;
        return $this;
    }
=======

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

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
     * Get the value of race
     */ 
    public function getRace()
    {
        return $this->race;
    }
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * Set the value of race
     *
     * @return  self
     */ 
    public function setRace($race)
    {
        $this->race = $race;
<<<<<<< HEAD
        return $this;
    }
=======

        return $this;
    }

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * Get the value of bergerie
     */ 
    public function getBergerie()
    {
        return $this->bergerie;
    }
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * Set the value of bergerie
     *
     * @return  self
     */ 
    public function setBergerie($bergerie)
    {
        $this->bergerie = $bergerie;
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
        return $this;
    }
}
