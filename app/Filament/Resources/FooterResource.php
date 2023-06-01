<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterResource\Pages;
use App\Filament\Resources\FooterResource\RelationManagers;
use App\Models\Footer;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Home';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Footer Information')
                    ->schema([
                        Forms\Components\Select::make('lang')
                            ->options([
                                'uz' => 'O\'zbekcha',
                                'en' => 'English',
                                'ru' => 'Ruscha',
                            ])
                            ->required(),
                        Forms\Components\RichEditor::make('about')
                            ->required()
                            ->maxLength(65535),
                        Forms\Components\RichEditor::make('contact')
                            ->required()
                            ->maxLength(65535),
                    ]),

                Forms\Components\Repeater::make('social')
                    ->schema([
                        Forms\Components\Select::make('name')
                            ->options([
                                'fa-facebook-f' => 'Facebook',
                                'fa-twitter' => 'Twitter',
                                'fa-instagram' => 'Instagram',
                                'fa-youtube' => 'Youtube',
                                'fa-telegram' => 'Telegram',
                                'fa-whatsapp' => 'Whatsapp',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('url')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('lang'),
                Tables\Columns\TextColumn::make('about'),
                Tables\Columns\TextColumn::make('contact'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListFooters::route('/'),
            'create' => Pages\CreateFooter::route('/create'),
            'edit' => Pages\EditFooter::route('/{record}/edit'),
        ];
    }
}
