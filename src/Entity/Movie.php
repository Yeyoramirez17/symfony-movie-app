<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: MovieRepository::class)]
#[UniqueEntity(fields: ['title'], message: 'Este titulo ya esta en uso')]
class Movie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 120)]
    #[Assert\NotBlank(message: 'El titulo no puede estar vacio')]
    #[Assert\Length(max: 120, maxMessage: 'El titulo no puede tener más de {{ limit }} caracteres')]
    private ?string $title = null;

    #[ORM\Column(length: 2000)]
    #[Assert\NotBlank(message: 'La descripción no puede estar vacía')]
    #[Assert\Length(max: 1200, maxMessage: 'La descripción no puede tener más de {{ limit }} caracteres')]
    private ?string $description = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'La duración no puede estar vacía')]
    #[Assert\Positive(message: 'La duación debe ser un número positivo')]
    private ?int $runtime = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'El presupuesto no puede estar vacio')]
    #[Assert\Positive(message: 'El presupuesto debe ser un número positivo')]
    private ?int $budget = null;

    #[ORM\Column(length: 250)]
    #[Assert\NotBlank(message: 'El cartel no puede estar vacio')]
    #[Assert\Length(max: 255, maxMessage: 'El cartel no puede tener más de {{ limit }} caracteres')]
    private ?string $poster = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: 'La fecha no puede estar vacía')]
    #[Assert\Type(type: 'DateTimeInterface', message: 'La fecha de estreno debe ser una fecha válida')]
    private ?\DateTimeInterface $release_date = null;

    #[ORM\ManyToOne(inversedBy: 'movies', cascade: ["persist"])]
    #[Assert\NotBlank(message: 'El género no puede estar vacio')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Genre $genre = null;

    #[ORM\ManyToOne(inversedBy: 'movies', cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank(message: 'El pais no puede estar vacio')]
    private ?Country $country = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getRuntime(): ?int
    {
        return $this->runtime;
    }

    public function setRuntime(int $runtime): self
    {
        $this->runtime = $runtime;

        return $this;
    }

    public function getBudget(): ?int
    {
        return $this->budget;
    }

    public function setBudget(int $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getPoster(): ?string
    {
        return $this->poster;
    }

    public function setPoster(string $poster): self
    {
        $this->poster = $poster;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->release_date;
    }

    public function setReleaseDate(?\DateTimeInterface $release_date): self
    {
        $this->release_date = $release_date;

        return $this;
    }

    public function getGenre(): ?Genre
    {
        return $this->genre;
    }

    public function setGenre(?Genre $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }

}
