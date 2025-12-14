<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Article;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Tool;
use App\Models\Testimonial;
use App\Models\CaseStudy;
use App\Models\Faq;
use Filament\Widgets\ChartWidget;

class ContentDistributionChart extends ChartWidget
{
    protected ?string $heading = 'Répartition du contenu';

    protected static ?int $sort = 5;

    protected function getData(): array
    {
        return [
            'datasets' => [[
                'data' => [
                    Project::published()->count(),
                    Article::published()->count(),
                    Service::count(),
                    Skill::count(),
                    Tool::published()->count(),
                    Testimonial::published()->count(),
                    CaseStudy::count(),
                    Faq::published()->count(),
                ],
                'backgroundColor' => array_map(fn($i) => "rgba(71, 85, 105, " . (0.9 - $i * 0.1) . ")", range(0, 7)),
                'borderColor' => '#fff',
                'borderWidth' => 2,
            ]],
            'labels' => ['Projets', 'Articles', 'Services', 'Compétences', 'Outils', 'Témoignages', 'Case Studies', 'FAQ'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getOptions(): array
    {
        return ['plugins' => ['legend' => ['display' => true, 'position' => 'bottom']]];
    }
}

