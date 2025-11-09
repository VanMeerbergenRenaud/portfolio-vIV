<?php

namespace App\Filament\Admin\Resources\Heroes;

use App\Filament\Admin\Resources\Heroes\Pages\ListHeroes;
use App\Filament\Admin\Resources\Heroes\Schemas\HeroForm;
use App\Filament\Admin\Resources\Heroes\Tables\HeroesTable;
use App\Models\Hero;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationLabel = 'Hero';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHome;

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return HeroForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HeroesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHeroes::route('/'),
        ];
    }
}

