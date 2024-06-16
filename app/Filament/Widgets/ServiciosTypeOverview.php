<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ServiciosTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [

            Stat::make('Servicio_id', Servicio::all()->count()),


        ];
    }
}
