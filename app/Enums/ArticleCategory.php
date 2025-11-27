<?php

namespace App\Enums;

enum ArticleCategory: string
{
    case EXPERIENCE = 'experience';
    case TUTORIEL = 'tutoriel';
    case REFLEXION = 'reflexion';
    case ACTUALITE = 'actualite';

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
