<?php

namespace App\Filament\Admin\Resources\CaseStudies;

use App\Filament\Admin\Resources\CaseStudies\Pages\ListCaseStudies;
use App\Filament\Admin\Resources\CaseStudies\Schemas\CaseStudyForm;
use App\Filament\Admin\Resources\CaseStudies\Tables\CaseStudiesTable;
use App\Models\CaseStudy;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CaseStudyResource extends Resource
{
    protected static ?string $model = CaseStudy::class;

    protected static ?string $navigationLabel = 'Case Studies';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static ?int $navigationSort = 8;

    public static function form(Schema $schema): Schema
    {
        return CaseStudyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CaseStudiesTable::configure($table);
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
            'index' => ListCaseStudies::route('/'),
        ];
    }
}
