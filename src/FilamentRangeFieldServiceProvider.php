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

        FilamentAsset::register([
                Css::make('filament-range-field', Vite::
       asset(__DIR__ . '/../resources/css/filament-forms-range-component.css')),
        ], 'schuttelaar/filament-range-field');
    }
}
