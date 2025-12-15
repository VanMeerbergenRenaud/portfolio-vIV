<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Article;
use App\Models\Project;
use Filament\Widgets\ChartWidget;

class PublishRateChart extends ChartWidget
{
    protected ?string $heading = 'Taux de publication';

    protected static ?int $sort = 6;

    protected function getData(): array
    {
        $publishedProjects = Project::published()->count();
        $publishedArticles = Article::published()->count();

        return [
            'datasets' => [
                [
                    'label' => 'Publiés',
                    'data' => [$publishedProjects, $publishedArticles],
                    'backgroundColor' => 'rgba(71, 85, 105, 0.8)',
                ],
                [
                    'label' => 'Brouillons',
                    'data' => [Project::count() - $publishedProjects, Article::count() - $publishedArticles],
                    'backgroundColor' => 'rgba(148, 163, 184, 0.4)',
                ],
            ],
            'labels' => ['Projets', 'Articles'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => ['legend' => ['display' => true, 'position' => 'bottom']],
            'scales' => ['y' => ['beginAtZero' => true, 'stacked' => true, 'ticks' => ['precision' => 0]], 'x' => ['stacked' => true]],
        ];
    }
}
