<?php

namespace App\Filament\Resources\ProdukResource\Pages;

use App\Filament\Resources\ProdukResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;
use App\Models\Kategori;

class ManageProduks extends ManageRecords
{
    protected static string $resource = ProdukResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
