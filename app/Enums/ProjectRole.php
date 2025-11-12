<?php

namespace App\Enums;

enum ProjectRole: string
{
    case FRONTEND = 'frontend';
    case BACKEND = 'backend';
    case DESIGN = 'design';
    case FULLSTACK = 'fullstack';
    case UX = 'ux';
    case UI = 'ui';
    case DEVOPS = 'devops';
    case PROJECT_MANAGEMENT = 'project_management';

    public function label(): string
    {
        return match ($this) {
            self::FRONTEND => 'Frontend',
            self::BACKEND => 'Backend',
            self::DESIGN => 'Design',
            self::FULLSTACK => 'Fullstack',
            self::UX => 'UX',
            self::UI => 'UI',
            self::DEVOPS => 'DevOps',
            self::PROJECT_MANAGEMENT => 'Gestion de projet',
        };
    }

    public function icon(): string
    {
        return match ($this) {
            self::FRONTEND => 'heroicon-o-device-phone-mobile',
            self::BACKEND => 'heroicon-o-server',
            self::DESIGN => 'heroicon-o-paint-brush',
            self::FULLSTACK => 'heroicon-o-square-3-stack-3d',
            self::UX => 'heroicon-o-users',
            self::UI => 'heroicon-o-computer-desktop',
            self::DEVOPS => 'heroicon-o-cloud',
            self::PROJECT_MANAGEMENT => 'heroicon-o-clipboard-document-list',
        };
    }
}
