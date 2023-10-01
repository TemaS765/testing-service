<?php

namespace App\Entity;

use App\Repository\ExamExecutionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExamExecutionRepository::class)]
class ExamExecution
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'examExecutions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Exam $exam = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Question $question = null;

    #[ORM\Column(length: 255)]
    private ?string $answerIds = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExam(): ?Exam
    {
        return $this->exam;
    }

    public function setExam(?Exam $exam): static
    {
        $this->exam = $exam;

        return $this;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): static
    {
        $this->question = $question;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getAnswerIds(): array
    {
        return explode(',', $this->answerIds);
    }

    /**
     * @param int[] $answerIds
     * @return $this
     */
    public function setAnswerIds(array $answerIds): static
    {
        $this->answerIds = implode(',', $answerIds);

        return $this;
    }

    public function answerIsSelected(int $answerId): bool
    {
        return in_array($answerId, $this->getAnswerIds());
    }
}
