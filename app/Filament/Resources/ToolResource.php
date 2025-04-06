<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ToolResource\Pages;
use App\Models\Tool;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextColumn\TextColumnSize;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class ToolResource extends Resource
{
    protected static ?string $model = Tool::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function getNavigationLabel(): string
    {
        return __('filament.tools');
    }
    public static function getPluralLabel(): string
    {
        return __('filament.tools');
    }

    public static function getModelLabel(): string
    {
        return __('filament.tool');
    }

    public static function form(Form $form): Form
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
                    ->directory('product-images')
                    ->maxSize(2048)
                    ->nullable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\Layout\Grid::make()
                    ->columns(1)
                    ->schema([

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
            ])
            ->contentGrid(['md' => 2 , 'xl' => 3])
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
