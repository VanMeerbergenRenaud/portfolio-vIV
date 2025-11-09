<?php

namespace App\Enums;

enum ProjectType: string
{
    case WEB = 'web';
    case MOBILE = 'mobile';
    case DESKTOP = 'desktop';
    case SAAS = 'saas';
    case API = 'api';
    case ACADEMIQUE = 'academique';

    public function label(): string
    {
        return match ($this) {
            self::WEB => 'Web App',
            self::MOBILE => 'Mobile App',
            self::DESKTOP => 'Desktop App',
            self::SAAS => 'SaaS',
            self::API => 'API',
            self::ACADEMIQUE => 'Académique',
        };
    }
}
