<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Product;
use App\Models\Tool;
use Filament\Widgets\ChartWidget;
use Illuminate\Contracts\Support\Htmlable;

class DashboardChart extends ChartWidget
{
    protected static bool $isLazy = false;

    public function getHeading(): string|Htmlable|null
    {
        return __('filament.number of products and tools');
    }

    protected function getData(): array
    {

        $productCount = Product::query()->count();
        $toolCount = Tool::query()->count();
        $articleCount = Article::query()->count();

        return [
            'datasets' => [
                [
                    'label' => __('filament.products'),
                    'data' => [$productCount],
                    'backgroundColor' => 'rgba(255, 255, 0, 0.3)',
                ],
                [
                    'label' => __('filament.tools'),
                    'data' => [$toolCount],
                    'backgroundColor' => '#FF0000B3'
                ],
                [
                    'label' => __('filament.articles'),
                    'data' => [$articleCount],
                    'backgroundColor' => '#0000FF80'
                ],
            ],
            'labels' => [__('filament.total')],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
