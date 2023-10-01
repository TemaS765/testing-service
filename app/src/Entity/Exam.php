<?php

namespace App\Entity;

use App\Repository\ExamRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExamRepository::class)]
class Exam
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'exam', targetEntity: ExamExecution::class)]
    private Collection $examExecutions;

    public function __construct()
    {
        $this->examExecutions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, ExamExecution>
     */
    public function getExamExecutions(): Collection
    {
        return $this->examExecutions;
    }

    public function addExamExecution(ExamExecution $examExecution): static
    {
        if (!$this->examExecutions->contains($examExecution)) {
            $this->examExecutions->add($examExecution);
            $examExecution->setExam($this);
        }

        return $this;
    }

    public function removeExamExecution(ExamExecution $examExecution): static
    {
        if ($this->examExecutions->removeElement($examExecution)) {
            // set the owning side to null (unless already changed)
            if ($examExecution->getExam() === $this) {
                $examExecution->setExam(null);
            }
        }

        return $this;
    }
}
