<?php

namespace App\Filament\Resources\ContentResource\Pages;

use App\Filament\Resources\ContentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContent extends CreateRecord
{
    protected static string $resource = ContentResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index'); // Mengarahkan ke halaman Index
    }
}
