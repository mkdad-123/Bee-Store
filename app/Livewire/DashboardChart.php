<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Product;
use App\Models\Tool;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class DashboardChart extends ChartWidget
{
    protected static ?string $heading = 'Number of products and tools';
    protected static bool $isLazy = false;

    protected function getData(): array
    {

        $productCount = Product::count();
        $toolCount = Tool::count();

        return [
            'datasets' => [
                [
                    'label' => 'Products',
                    'data' => [$productCount],
                    'backgroundColor' => 'rgba(255, 255, 0, 0.3)',
                ],
                [
                    'label' => 'Tools',
                    'data' => [$toolCount],
                    'backgroundColor' => '#FF0000B3'
                ],
            ],
            'labels' => ['Total'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
