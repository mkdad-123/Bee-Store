<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ToolResource\Pages;
use App\Models\Tool;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ToolResource extends Resource
{
    protected static ?string $model = Tool::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Form $form): Form
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label('Image')->url(fn ($record) => Storage::url($record->image))
                    ->width(200)->height(200),
                TextColumn::make('name')->label('Name')->searchable()->sortable(),
                TextColumn::make('description')
                    ->label('Description')
                    ->limit(50)
                    ->tooltip(fn ($record) => $record->description),
                TextColumn::make('price')->label('Price')->money('SYP')->sortable(),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTools::route('/'),
            'create' => Pages\CreateTool::route('/create'),
            'edit' => Pages\EditTool::route('/{record}/edit'),
        ];
    }
}
