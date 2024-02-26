<?php

namespace App\Filament\Resources\DetailProdukResource\Pages;

use App\Filament\Resources\DetailProdukResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailProduks extends ListRecords
{
    protected static string $resource = DetailProdukResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
