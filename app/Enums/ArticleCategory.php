<?php

namespace App\Enums;

enum ArticleCategory: string
{
    case EXPERIENCE = 'experience';
    case TUTORIEL = 'tutorial';
    case REFLEXION = 'reflection';
    case ACTUALITE = 'news';

    public function label(): string
    {
        return match ($this) {
            self::EXPERIENCE => 'Expérience',
            self::TUTORIEL => 'Tutoriel',
            self::REFLEXION => 'Réflexion',
            self::ACTUALITE => 'Actualité',
        };
    }
}
