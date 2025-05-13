<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Service;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\File;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ServiceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ServiceResource\RelationManagers;


class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        // Ambil semua file SVG dari folder
    $iconOptions = collect(File::files(public_path('assets/images/svg')))
        ->mapWithKeys(function ($file) {
            $name = $file->getFilename();
            return [$name => pathinfo($name, PATHINFO_FILENAME)];
        })
        ->toArray();

    return $form
        ->schema([
            Select::make('icon')
                ->label('Pilih Icon')
                ->options($iconOptions)
                ->required(),

            TextInput::make('nama')
                ->label('Nama Service')
                ->required(),

            Textarea::make('deskripsi')
                ->label('Deskripsi')
                ->required()
                ->rows(4),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('icon')
                ->label('Icon')
                ->url(fn ($record) => asset('assets/icons/' . $record->icon))
                ->height(30), // atau ukuran lain

            TextColumn::make('nama')->label('Nama'),
            TextColumn::make('deskripsi')->label('Deskripsi')->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
