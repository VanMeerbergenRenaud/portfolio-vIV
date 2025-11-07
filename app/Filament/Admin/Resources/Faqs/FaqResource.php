<?php

namespace App\Filament\Admin\Resources\Faqs;

use App\Filament\Admin\Resources\Faqs\Pages\ListFaqs;
use App\Filament\Admin\Resources\Faqs\Schemas\FaqForm;
use App\Filament\Admin\Resources\Faqs\Tables\FaqsTable;
use App\Models\Faq;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationLabel = 'Faq';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedQuestionMarkCircle;

    protected static ?int $navigationSort = 9;

    public static function form(Schema $schema): Schema
    {
        return FaqForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FaqsTable::configure($table);
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
            'index' => ListFaqs::route('/'),
        ];
    }
}
