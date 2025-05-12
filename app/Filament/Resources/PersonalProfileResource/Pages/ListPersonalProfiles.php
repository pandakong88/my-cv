<?php

namespace App\Filament\Resources\PersonalProfileResource\Pages;

use App\Filament\Resources\PersonalProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersonalProfiles extends ListRecords
{
    protected static string $resource = PersonalProfileResource::class;

    
    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
