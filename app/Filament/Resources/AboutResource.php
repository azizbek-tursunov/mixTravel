<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Home';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description')
                        ->required()
                        ->maxLength(65535),
                    Forms\Components\Select::make('lang')
                        ->options([
                            'uz' => 'O\'zbekcha',
                            'en' => 'English',
                            'ru' => 'Ruscha',
                        ])
                        ->required(),
                ])->columnSpan(8),
                Forms\Components\Card::make([
                    Forms\Components\FileUpload::make('image_first')
                        ->image()
                        ->imageResizeMode('force')
                        ->imageResizeTargetWidth('380')
                        ->imageResizeTargetHeight('535')
                        ->required(),
                    Forms\Components\FileUpload::make('image_second')
                        ->image()
                        ->imageResizeMode('force')
                        ->imageResizeTargetWidth('330')
                        ->imageResizeTargetHeight('535')
                        ->required(),
                ])->columnSpan(4),


            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('lang'),
                Tables\Columns\ImageColumn::make('image_first'),
                Tables\Columns\ImageColumn::make('image_second'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'view' => Pages\ViewAbout::route('/{record}'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
