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
     * @ORM\Column(type="integer")
     */
    private $id_vehicule;

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
     * @ORM\Column(type="date")
     */
    private $date_achat;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix_achat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dtype;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVehicule(): ?int
    {
        return $this->id_vehicule;
    }

    public function setIdVehicule(int $id_vehicule): self
    {
        $this->id_vehicule = $id_vehicule;

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

    public function getNumeroSerie(): ?string
    {
        return $this->numero_serie;
    }

    public function setNumeroSerie(string $numero_serie): self
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

    public function getPlaqueImmatriculation(): ?string
    {
        return $this->plaque_immatriculation;
    }

    public function setPlaqueImmatriculation(string $plaque_immatriculation): self
    {
        $this->plaque_immatriculation = $plaque_immatriculation;

        return $this;
    }

    public function getNbKilometre(): ?int
    {
        return $this->nb_kilometre;
    }

    public function setNbKilometre(int $nb_kilometre): self
    {
        $this->nb_kilometre = $nb_kilometre;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->date_achat;
    }

    public function setDateAchat(\DateTimeInterface $date_achat): self
    {
        $this->date_achat = $date_achat;

        return $this;
    }

    public function getPrixAchat(): ?int
    {
        return $this->prix_achat;
    }

    public function setPrixAchat(int $prix_achat): self
    {
        $this->prix_achat = $prix_achat;

        return $this;
    }

    public function getDtype(): ?string
    {
        return $this->dtype;
    }

    public function setDtype(string $dtype): self
    {
        $this->dtype = $dtype;

        return $this;
    }
}
