<?php

namespace App\Filament\Admin\Resources\Processes;

use App\Filament\Admin\Resources\Processes\Pages\ListProcesses;
use App\Filament\Admin\Resources\Processes\Schemas\ProcessForm;
use App\Filament\Admin\Resources\Processes\Tables\ProcessesTable;
use App\Models\Process;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProcessResource extends Resource
{
    protected static ?string $model = Process::class;

    protected static ?string $navigationLabel = 'Processus';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedQueueList;

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return ProcessForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProcessesTable::configure($table);
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
            'index' => ListProcesses::route('/'),
        ];
    }
}
