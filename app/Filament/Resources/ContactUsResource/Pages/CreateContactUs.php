<?php

namespace App\Filament\Resources\ContactUsResource\Pages;

use App\Filament\Resources\ContactUsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContactUs extends CreateRecord
{
    protected static string $resource = ContactUsResource::class;

    public static function getNavigationLabel(): string
    {
        return 'Contact Us'; // Nama menu baru
    }
}
