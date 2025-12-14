<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Service;
use App\Models\Skill;
use App\Models\Tool;
use App\Models\Testimonial;
use Filament\Widgets\ChartWidget;

class PortfolioMetricsChart extends ChartWidget
{
    protected ?string $heading = 'Métriques Portfolio';

    protected static ?int $sort = 4;

    protected function getData(): array
    {
        return [
            'datasets' => [[
                'label' => 'Portfolio',
                'data' => [Service::count(), Skill::count(), Tool::published()->count(), Testimonial::published()->count()],
                'backgroundColor' => 'rgba(71, 85, 105, 0.2)',
                'borderColor' => 'rgb(71, 85, 105)',
                'borderWidth' => 2,
            ]],
            'labels' => ['Services', 'Compétences', 'Outils', 'Témoignages'],
        ];
    }

    protected function getType(): string
    {
        return 'radar';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => ['legend' => ['display' => false]],
            'scales' => ['r' => ['beginAtZero' => true, 'ticks' => ['precision' => 0]]],
        ];
    }
}

