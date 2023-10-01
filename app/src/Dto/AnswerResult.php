<?php

namespace App\Dto;

class AnswerResult
{
    public function __construct(
        public int $num,
        public string $text,
        public bool $isTrue,
        public bool $isSelected
    ) {
    }
}