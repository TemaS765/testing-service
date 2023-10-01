<?php

namespace App\Controller;

use App\Dto\QuestionResult;
use App\Repository\ExamRepository;
use App\Service\ExamService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExamController extends AbstractController
{
    public function __construct(
        private ExamService $examService,
        private ExamRepository $examRepository,
        private EntityManagerInterface $entityManager
    ){
    }

    #[Route('/exam/{id}', name: 'app_exam', methods: ['GET'])]
    public function index(int $id = 0): Response
    {
        if ($id > 0) {
            $exam = $this->examRepository->find($id);
            if (!$exam) {
                return new Response('Exam not found');
            }
        } else {
            $exam = $this->examService->createExam();
            return $this->redirectToRoute('app_exam', [
                'id' => $exam->getId()
            ]);
        }

        return $this->render('exam/index.html.twig', [
            'exam' => $exam,
        ]);
    }

    #[Route('/exam/{id}', name: 'app_exam_save', methods: ['POST'])]
    public function save(int $id, Request $request): Response
    {
        $exam = $this->examRepository->find($id);
        if (!$exam) {
            return new Response('Exam not found');
        }

        $answers = $request->request->all('answers');

        foreach ($exam->getExamExecutions() as $execution) {
            if (isset($answers[$execution->getId()])) {
                $execution->setAnswerIds($answers[$execution->getId()]);
                $this->entityManager->persist($execution);
            }
        }
        $this->entityManager->flush();

        return $this->redirectToRoute('app_exam_result', [
            'id' => $exam->getId()
        ]);
    }

    #[Route('/exam/{id}/result', name: 'app_exam_result', methods: ['GET'])]
    public function result(int $id): Response
    {
        $exam = $this->examRepository->find($id);
        if (!$exam) {
            return new Response('Exam not found');
        }

        $results = $this->examService->checkExamExecution($exam);

        return $this->render('exam/result.html.twig', [
            'exam' => $exam,
            'trueResults' => $results->filter(fn(QuestionResult $res) => $res->isTrue),
            'falseResults' => $results->filter(fn(QuestionResult $res) => !$res->isTrue),
        ]);
    }
}
