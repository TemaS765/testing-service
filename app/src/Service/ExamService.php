<?php

namespace App\Service;

use App\Dto\AnswerResult;
use App\Dto\ExamResult;
use App\Dto\QuestionResult;
use App\Entity\Answer;
use App\Entity\Exam;
use App\Entity\ExamExecution;
use App\Repository\ExamExecutionRepository;
use App\Repository\ExamRepository;
use App\Repository\QuestionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityManagerInterface;

class ExamService
{

    public function __construct(
        private ExamRepository $examRepository,
        private QuestionRepository $questionRepository,
        private ExamExecutionRepository $examExecutionRepository,
        private EntityManagerInterface $entityManager
    ){}

    public function createExam(): Exam
    {
        $examCount = $this->examRepository->count([]) + 1;
        $exam = new Exam();
        $exam->setName("Exam - {$examCount}");

        $this->entityManager->persist($exam);

        $questions = $this->questionRepository->findAll();
        shuffle($questions);

        foreach ($questions as $question) {
            $examExecution = new ExamExecution();
            $examExecution->setExam($exam);
            $examExecution->setQuestion($question);
            $examExecution->setAnswerIds([]);
            $this->entityManager->persist($examExecution);
        }

        $this->entityManager->flush();

        return $exam;
    }

    /**
     * @param Exam $exam
     * @return Collection<int,QuestionResult>
     */
    public function checkExamExecution(Exam $exam): Collection
    {
        $result = new ArrayCollection();

        foreach ($exam->getExamExecutions() as $examExecution) {
            $question = $examExecution->getQuestion();
            $answers = $question->getAnswers();
            $trueIds = $answers
                ->filter(fn(Answer $answer) => $answer->isTrue())
                ->map(fn(Answer $answer) => $answer->getId())
                ->toArray();
            $answerIds = $examExecution->getAnswerIds();
            $answersIsTrue = !empty($answerIds) && empty(array_diff($answerIds, $trueIds));
            $answerResults = $answers->map(
                fn(Answer $answer) => new AnswerResult(
                    $answer->getNum(),
                    $answer->getText(),
                    $answer->isTrue(),
                    in_array($answer->getId(), $answerIds)
                )
            );
            $result->add(new QuestionResult($question->getText(), $answersIsTrue, $answerResults));
        }

        return $result;
    }
}