<?php

namespace Packages\Filament\Clusters\Packages\Resources\PackageResource\Pages;

use Packages\Filament\Clusters\Packages\Resources\PackageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPackages extends ListRecords
{
    protected static string $resource = PackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
