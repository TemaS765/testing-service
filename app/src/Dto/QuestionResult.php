<?php

namespace App\Dto;

use Doctrine\Common\Collections\Collection;

class QuestionResult
{
    /**
     * @param string $text
     * @param bool $isTrue
     * @param Collection<int,AnswerResult> $answers
     */
    public function __construct(
        public string $text,
        public bool $isTrue,
        public Collection $answers
    ) {
    }
}