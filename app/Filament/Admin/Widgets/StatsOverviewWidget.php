<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Article;
use App\Models\CaseStudy;
use App\Models\Faq;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\Tool;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        $publishedProjects = Project::published()->count();
        $publishedArticles = Article::published()->count();

        return [
            Stat::make('Projets', $publishedProjects)
                ->description((Project::count() - $publishedProjects).' brouillon(s)')
                ->descriptionIcon('heroicon-m-briefcase')
                ->chart(collect(range(6, 0))->map(fn ($d) => Project::whereDate('created_at', now()->subDays($d))->count())->toArray())
                ->color('gray'),

            Stat::make('Articles', $publishedArticles)
                ->description((Article::count() - $publishedArticles).' brouillon(s)')
                ->descriptionIcon('heroicon-m-document-text')
                ->chart(collect(range(6, 0))->map(fn ($d) => Article::whereDate('created_at', now()->subDays($d))->count())->toArray())
                ->color('gray'),

            Stat::make('Services', Service::count())
                ->description('Offres disponibles')
                ->descriptionIcon('heroicon-m-sparkles')
                ->color('gray'),

            Stat::make('Compétences', Skill::count())
                ->description('Skills maîtrisées')
                ->descriptionIcon('heroicon-m-code-bracket')
                ->color('gray'),

            Stat::make('Outils', Tool::published()->count())
                ->description('Technologies utilisées')
                ->descriptionIcon('heroicon-m-wrench-screwdriver')
                ->color('gray'),

            Stat::make('Témoignages', Testimonial::published()->count())
                ->description('Retours clients')
                ->descriptionIcon('heroicon-m-star')
                ->color('gray'),

            Stat::make('Case Studies', CaseStudy::count())
                ->description('Études de cas')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('gray'),

            Stat::make('FAQ', Faq::published()->count())
                ->description('Questions répondues')
                ->descriptionIcon('heroicon-m-question-mark-circle')
                ->color('gray'),

            Stat::make('Total', $publishedProjects + $publishedArticles + Service::count() + Skill::count() + Tool::published()->count() + Testimonial::published()->count() + CaseStudy::count() + Faq::published()->count())
                ->description('Contenus publiés')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('gray'),
        ];
    }
}
