<?php

namespace App\Livewire;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LanguageSwitcher extends Widget
{
    protected static ?int $sort = -1;
    protected static string $view = 'livewire.language-switcher';

    public string $currentLocale = 'en';

    public function mount()
    {
        $this->currentLocale = App::getLocale();
    }

    public function toggleLanguage()
    {
        $this->currentLocale = $this->currentLocale === 'en' ? 'ar' : 'en';
        session(['locale' => $this->currentLocale]);
        App::setLocale($this->currentLocale);

        return redirect(request()->header('Referer'));
    }

}
