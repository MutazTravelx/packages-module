<?php

namespace Tests;

use BladeUI\Heroicons\BladeHeroiconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Filament\Actions\ActionsServiceProvider;
use Filament\FilamentServiceProvider;
use Filament\Forms\FormsServiceProvider;
use Filament\Infolists\InfolistsServiceProvider;
use Filament\Notifications\NotificationsServiceProvider;
use Filament\Support\SupportServiceProvider;
use Filament\Tables\TablesServiceProvider;
use Filament\Widgets\WidgetsServiceProvider;
use Livewire\LivewireServiceProvider;
use Nwidart\Modules\LaravelModulesServiceProvider;
use Packages\Filament\Clusters\Packages\Resources\PackageResource\Pages\CreatePackage;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Packages\Filament\Clusters\Packages\Resources\PackageResource;
use Packages\Tests\Fakes\AdminPanelProvider;
use RyanChandler\BladeCaptureDirective\BladeCaptureDirectiveServiceProvider;
use Spatie\LaravelPackageTools\PackageServiceProvider;

use function Pest\Livewire\livewire;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->loadLaravelMigrations();

    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.key','AckfSECXIvnK5r28GVIWUAxmbBSjTsmF');
    }
    
    protected function getPackageProviders($app)
    {
        return [
            ActionsServiceProvider::class,
            BladeCaptureDirectiveServiceProvider::class,
            BladeHeroiconsServiceProvider::class,
            BladeIconsServiceProvider::class,
            FilamentServiceProvider::class,
            FormsServiceProvider::class,
            InfolistsServiceProvider::class,
            LivewireServiceProvider::class,
            NotificationsServiceProvider::class,
            SupportServiceProvider::class,
            TablesServiceProvider::class,
            WidgetsServiceProvider::class,
            LaravelModulesServiceProvider::class,
            PackageServiceProvider::class,
            AdminPanelProvider::class,
            // PackageResource::class,
            // CreatePackage::class,
        ];
    }
}
