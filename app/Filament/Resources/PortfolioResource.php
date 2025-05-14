<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Portfolio;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Pages\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\TextInput\Mask;
use Filament\Tables\Actions\DeleteBulkAction;

use App\Filament\Resources\PortfolioResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PortfolioResource\RelationManagers;
use App\Filament\Resources\PortfolioResource\Pages\ListPortfolios;
use App\Filament\Resources\PortfolioResource\Pages\CreatePortfolio;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Portfolios';

    public static function form(Form $form): Form
    {
        return $form->schema([

            TextInput::make('name')->required()->label('Nama Project'),
            Textarea::make('short_description')->label('Deskripsi Singkat'),
            RichEditor::make('detailed_description')->label('Penjelasan Detail'),
            FileUpload::make('images')
                ->multiple()
                ->image()
                ->directory('portfolio-images')
                ->label('Gambar Hasil'),
            TextInput::make('link')
                ->url()
                ->label('Link Website'),
        ]);
    }



    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->label('Nama Project')->searchable(),
            TextColumn::make('short_description')->limit(30)->label('Deskripsi'),
            TextColumn::make('link')
                ->label('Link')
                ->url(fn ($record) => $record->link)
                ->openUrlInNewTab(),

        ])->filters([])->actions([
            Tables\Actions\EditAction::make(),
        ])->bulkActions([
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
