<?php

namespace Schuttelaar\Filament;

use Illuminate\Support\Facades\Vite;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\AlpineComponent;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentRangeFieldServiceProvider extends PackageServiceProvider
{
    /**
     * {@inheritDoc}
     *
     * @param Package $package
     * @return void
     */
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-range-field')
            ->hasAssets()
            ->hasViews();
    }

    public function packageBooted(): void
    {

        // to include the asset you need to run php artisan filament:assets
        FilamentAsset::register([
                Css::make('filament-range-field', __DIR__ . '/../resources/css/filament-forms-range-component.css'),
        ], 'schuttelaar/filament-range-field');
    }
}
