<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonalProfileResource\Pages;
use App\Filament\Resources\PersonalProfileResource\RelationManagers;
use App\Models\PersonalProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

class PersonalProfileResource extends Resource
{
    protected static ?string $model = PersonalProfile::class;
    
    protected static bool $isSingleton = true; // << Tambahkan ini

    // Jika pakai Filament v3 ke atas, gunakan cara ini:
    public static function isSingleton(): bool
    {
        return true;
    }
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('full_name')->required()->label('Nama Lengkap'),
                TextInput::make('nickname')->label('Nama Panggilan'),
                TextInput::make('slogan'),
                Textarea::make('about')->label('Tentang Saya')->rows(5),
                TextInput::make('github')->url(),
                TextInput::make('linkedin')->url(),
                TextInput::make('instagram')->url(),
                TextInput::make('whatsapp'),
                TextInput::make('email')->email(),
                TextInput::make('maps')->url()->label('Link Alamat (Google Maps)'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name')->label('Nama'),
                TextColumn::make('slogan')->limit(30),
                TextColumn::make('email'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ])
            ->paginated(false); // Menghilangkan pagination
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
            'index' => Pages\ListPersonalProfiles::route('/'),
            'edit' => Pages\EditPersonalProfile::route('/{record}/edit'),
            // 'edit' => Pages\EditPersonalProfile::route('/edit'),
        ];
    }

    public static function getNavigation(): ?string
    {
        return null; // Menonaktifkan tombol navigasi untuk membuat record baru
    }


}
