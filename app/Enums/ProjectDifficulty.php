<?php

namespace App\Enums;

enum ProjectDifficulty: string
{
    case EASY = 'easy';
    case MEDIUM = 'medium';
    case HARD = 'hard';

    public function label(): string
    {
        return match ($this) {
            self::EASY => 'Facile',
            self::MEDIUM => 'Moyen',
            self::HARD => 'Difficile',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::EASY => 'success',
            self::MEDIUM => 'warning',
            self::HARD => 'danger',
        };
    }
}
