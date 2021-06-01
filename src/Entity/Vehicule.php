<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehiculeRepository::class)
 */
class Vehicule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modele;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numero_serie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $couleur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $plaque_immatriculation;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_kilometre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_achat;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix_achat;

    /**
     * @ORM\Column(type="integer")
     */
    private $duree_location;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getNumero_Serie(): ?string
    {
        return $this->numero_serie;
    }

    public function setNumero_Serie(string $numero_serie): self
    {
        $this->numero_serie = $numero_serie;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getPlaque_Immatriculation(): ?string
    {
        return $this->plaque_immatriculation;
    }

    public function setPlaque_Immatriculation(string $plaque_immatriculation): self
    {
        $this->plaque_immatriculation = $plaque_immatriculation;

        return $this;
    }

    public function getNb_Kilometre(): ?int
    {
        return $this->nb_kilometre;
    }

    public function setNb_Kilometre(int $nb_kilometre): self
    {
        $this->nb_kilometre = $nb_kilometre;

        return $this;
    }

    public function getDate_Achat(): string
    {
        return $this->date_achat;
    }

    public function setDate_Achat(string $date_achat): self
    {
        $this->date_achat = $date_achat;

        return $this;
    }

    public function getPrix_Achat(): ?int
    {
        return $this->prix_achat;
    }

    public function setPrix_Achat(int $prix_achat): self
    {
        $this->prix_achat = $prix_achat;

        return $this;
    }

    public function getDuree_Location(): ?int
    {
        return $this->duree_location;
    }

    public function setDuree_Location(int $duree_location): self
    {
        $this->duree_location = $duree_location;

        return $this;
    }


}
