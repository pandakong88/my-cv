<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Filament\Resources\PortfolioResource\RelationManagers;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            FileUpload::make('image')
                ->image()
                ->directory('portfolios')
                ->required(),

            TextInput::make('title')
                ->label('Project Name')
                ->required()
                ->maxLength(255),

            Textarea::make('description')
                ->label('Short Description')
                ->required(),

            TextInput::make('link')
                ->label('Project Link')
                ->url()
                ->suffixIcon('heroicon-o-link')
                ->placeholder('https://...')
                ->maxLength(255),
        ]);
    }



    public static function table(Table $table): Table
    {
        return $table->columns([
            ImageColumn::make('image')->label('Image')->square(),
            TextColumn::make('title')->label('Project Name')->searchable(),
            TextColumn::make('description')->limit(50),
            TextColumn::make('link')->label('Link')->wrap(),
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
