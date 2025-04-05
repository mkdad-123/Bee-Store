<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
//use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

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

                Textarea::make('description')
                    ->label('Description')
                    ->required()
                    ->columnSpanFull(),


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

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\Layout\Grid::make()
                ->columns(1)
                ->schema([

                    ImageColumn::make('image')->label('Image')->url(fn ($record) => Storage::url($record->image))
                        ->width(300)
                        ->height(350),

                    TextColumn::make('name')->label('Name')
                        ->weight(FontWeight::SemiBold)
                        ->size(TextColumnSize::Large)
                        ->searchable()
                        ->sortable(),

                    TextColumn::make('description')
                        ->label('Description')
                        ->limit(150)
                        ->html()
                        ->tooltip(fn ($record) => $record->description),
                    TextColumn::make('category.name')->label('Category')->searchable(),

                    TextColumn::make('price')->label('Price')->money('SYP')->sortable(),


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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
