<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Article;
use App\Models\Project;
use Filament\Widgets\ChartWidget;

class GrowthTrendChart extends ChartWidget
{
    protected ?string $heading = 'Croissance du contenu';

    protected static ?int $sort = 7;

    protected function getData(): array
    {
        $months = collect(range(5, 0))->map(fn ($i) => now()->subMonths($i));

        return [
            'datasets' => [
                [
                    'label' => 'Articles',
                    'data' => $months->map(fn ($date) => Article::whereYear('created_at', $date->year)->whereMonth('created_at', $date->month)->count()),
                    'borderColor' => 'rgba(148, 163, 184, 0.8)',
                    'backgroundColor' => 'rgba(148, 163, 184, 0.2)',
                    'fill' => true,
                    'tension' => 0.4,
                ],
                [
                    'label' => 'Projets',
                    'data' => $months->map(fn ($date) => Project::whereYear('created_at', $date->year)->whereMonth('created_at', $date->month)->count()),
                    'borderColor' => 'rgba(71, 85, 105, 0.8)',
                    'backgroundColor' => 'rgba(71, 85, 105, 0.2)',
                    'fill' => true,
                    'tension' => 0.4,
                ],
            ],
            'labels' => $months->map(fn ($date) => $date->format('M Y')),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => ['display' => true, 'position' => 'top'],
                'tooltip' => ['backgroundColor' => 'rgba(0, 0, 0, 0.8)', 'padding' => 12, 'cornerRadius' => 8],
            ],
            'scales' => [
                'y' => ['beginAtZero' => true, 'ticks' => ['precision' => 0], 'grid' => ['color' => 'rgba(0, 0, 0, 0.05)', 'drawBorder' => false]],
                'x' => ['grid' => ['display' => false]],
            ],
        ];
    }
}
