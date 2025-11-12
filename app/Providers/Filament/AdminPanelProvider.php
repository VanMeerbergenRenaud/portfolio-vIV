<?php

namespace App\Providers\Filament;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentView;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->profile()
            ->brandName('Portfolio vIV')
            ->colors([
                'primary' => Color::Gray,
                'secondary' => Color::Gray,
                'gray' => Color::Slate,
                'blue' => Color::Blue,
                'green' => Color::Green,
                'yellow' => Color::Yellow,
                'purple' => Color::Purple,
                'pink' => Color::Pink,
                'orange' => Color::Orange,
                'teal' => Color::Teal,
                'rose' => Color::Rose,
                'amber' => Color::Amber,
                'indigo' => Color::Indigo,
                'neutral' => Color::Neutral,
            ])
            ->sidebarWidth('16rem')
            ->breadcrumbs(false)
            ->discoverResources(in: app_path('Filament/Admin/Resources'), for: 'App\Filament\Admin\Resources')
            ->discoverPages(in: app_path('Filament/Admin/Pages'), for: 'App\Filament\Admin\Pages')
            ->pages([
                Dashboard::class,
            ])
            /*->globalSearchKeyBindings(['command+k', 'ctrl+k'])
            ->globalSearch(position: GlobalSearchPosition::Sidebar)*/
            ->plugins([
                //
            ])
            ->discoverWidgets(in: app_path('Filament/Admin/Widgets'), for: 'App\Filament\Admin\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }

    public function boot(): void
    {
        FilamentView::registerRenderHook(
            'panels::head.end',
            fn (): string => Blade::render('
                <style>
                    .fi-section-content .fi-section-content {
                        background-color: #f9f9f9 !important;
                        border-radius: 0 0 0.75rem 0.75rem !important;
                    }

                    .fi-header {
                        padding: 0 1rem !important;
                    }

                    .filepond--drop-label {
                        min-height: 8rem !important;
                    }
                </style>
            ')
        );

        // Configuration globale pour tous les FileUpload
        FileUpload::configureUsing(function (FileUpload $component): void {
            $component
                ->disk('s3')
                ->visibility('private')
                ->placeholder('👉🏻 Cliquez pour sélectionner votre fichier 👈🏻');
        });

        // Configuration globale pour tous les RichEditor
        RichEditor::configureUsing(function (RichEditor $component): void {
            $component
                ->fileAttachmentsDisk('s3')
                ->fileAttachmentsDirectory('attachments')
                ->fileAttachmentsVisibility('private');
        });
    }
}
