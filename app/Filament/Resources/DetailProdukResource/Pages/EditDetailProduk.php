<?php

namespace App\Filament\Resources\DetailProdukResource\Pages;

use App\Filament\Resources\DetailProdukResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailProduk extends EditRecord
{
    protected static string $resource = DetailProdukResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
