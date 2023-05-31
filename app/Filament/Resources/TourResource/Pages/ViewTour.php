<?php

namespace App\Filament\Resources\TourResource\Pages;

use App\Filament\Resources\TourResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTour extends ViewRecord
{
    protected static string $resource = TourResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
