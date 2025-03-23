<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ProductsRelationManager extends RelationManager
{
    protected static string $relationship = 'products';

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('price')
                    ->label('Price')
                    ->required()
                    ->numeric(),

                TextInput::make('description')
                    ->label('Description')
                    ->required()
                    ->nullable(),


                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('product-images')
                    ->maxSize(2048)
                    ->nullable(),

                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->required(),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                ImageColumn::make('image')->label('Image')->url(fn ($record) => Storage::url($record->image))
                    ->width(200)->height(200),
                TextColumn::make('name')->label('Name')->searchable()->sortable(),
                TextColumn::make('description')->label('Description'),
                TextColumn::make('price')->label('Price')->money('SYP')->sortable(),
                TextColumn::make('category.name')->label('Category')->searchable(),
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
