<?php

namespace App\Filament\Resources\PersonalProfileResource\Pages;

use Filament\Actions;
use App\Models\PersonalProfile;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PersonalProfileResource;
use Illuminate\Database\Eloquent\Model;  // Mengimpor Model

class EditPersonalProfile extends EditRecord
{
    protected static string $resource = PersonalProfileResource::class;

    public function getRecord(): Model
    {
        // Hanya ambil satu record
        return PersonalProfile::first();  // Pastikan hanya ada satu data
    }

    // Hanya izinkan edit, tanpa tombol delete atau create
    protected function getActions(): array
    {
        return [
            // Tidak ada aksi delete atau create
        ];
    }
}
