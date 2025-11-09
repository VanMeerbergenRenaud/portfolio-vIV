<?php

namespace App\Filament\Admin\Resources\Tools;

use App\Filament\Admin\Resources\Tools\Pages\ListTools;
use App\Filament\Admin\Resources\Tools\Schemas\ToolForm;
use App\Filament\Admin\Resources\Tools\Tables\ToolsTable;
use App\Models\Tool;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ToolResource extends Resource
{
    protected static ?string $model = Tool::class;

    protected static ?string $navigationLabel = 'Outils';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedWrench;

    protected static ?int $navigationSort = 7;

    public static function form(Schema $schema): Schema
    {
        return ToolForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ToolsTable::configure($table);
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
            'index' => ListTools::route('/'),
        ];
    }
}
