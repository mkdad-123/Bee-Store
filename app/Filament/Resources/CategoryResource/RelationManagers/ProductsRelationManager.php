<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextColumn\TextColumnSize;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ProductsRelationManager extends RelationManager
{
    protected static string $relationship = 'products';

    public static function getModelLabel(): string
    {
        return __('filament.product');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label(__('filament.name'))
                    ->required()
                    ->maxLength(255),

                TextInput::make('price')
                    ->label(__('filament.price'))
                    ->required()
                    ->numeric(),

                Textarea::make('description')
                    ->label(__('filament.description'))
                    ->required()
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label(__('filament.image'))

                    ->image()
                    ->disk('public')
                    ->directory('product-images')
                    ->maxSize(2048)
                    ->nullable(),

                Select::make('category_id')
                    ->label(__('filament.category'))
                    ->relationship('category', 'name')
                    ->required(),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                ImageColumn::make('image')->label(__('filament.image'))->url(fn ($record) => Storage::url($record->image))
                    ->width(300)
                    ->height(350),

                TextColumn::make('name')->label(__('filament.name'))
                    ->weight(FontWeight::SemiBold)
                    ->size(TextColumnSize::Large)
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->label(__('filament.description'))
                    ->limit(150)
                    ->html()
                    ->tooltip(fn ($record) => $record->description),
                TextColumn::make('category.name')->label(__('filament.category'))->searchable(),

                TextColumn::make('price')->label(__('filament.price'))->money('SYP')->sortable(),

            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
}
