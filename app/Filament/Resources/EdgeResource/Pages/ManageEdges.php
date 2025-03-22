<?php

namespace App\Filament\Resources\EdgeResource\Pages;

use App\Filament\Resources\EdgeResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEdges extends ManageRecords
{
    protected static string $resource = EdgeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
