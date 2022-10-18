<?php

namespace Filament\Tests\App\Fixtures\Resources\ProductResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Tests\App\Fixtures\Resources\ProductResource;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}