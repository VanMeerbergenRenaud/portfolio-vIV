<?php

namespace App\Filament\Admin\Resources\Heroes\Pages;

use App\Filament\Admin\Resources\Heroes\HeroResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHeroes extends ListRecords
{
    protected static string $resource = HeroResource::class;

    protected static ?string $title = 'Hero';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
