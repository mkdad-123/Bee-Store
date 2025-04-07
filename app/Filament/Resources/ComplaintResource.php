<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ComplaintResource\Pages;
use App\Models\Compliant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class ComplaintResource extends Resource
{
    protected static ?int $navigationSort = 1;

    protected static ?string $model = Compliant::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left';

    public static function getNavigationLabel(): string
    {
        return 'Compliants';
    }
    public static function getPluralLabel(): string
    {
        return __('filament.complaints');
    }

    public static function getModelLabel(): string
    {
        return __('filament.complaint');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\Layout\Grid::make()
                    ->columns(1)
                    ->schema([
                        TextColumn::make('content')
                            ->label(__('filament.content'))
                            ->tooltip(fn ($record) => $record->description),

                    ])
            ])
            ->contentGrid(['md' => 2 , 'xl' => 3])

            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function canCreate(): bool
    {
        return false; // تعطيل زر "إضافة"
    }

    public static function canEdit($record): bool
    {
        return false; // تعطيل زر "تعديل"
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
            'index' => Pages\ListComplaints::route('/'),
            'create' => Pages\CreateComplaint::route('/create'),
            'edit' => Pages\EditComplaint::route('/{record}/edit'),
        ];
    }
}
