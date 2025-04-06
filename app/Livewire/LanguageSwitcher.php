<?php

namespace App\Livewire;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LanguageSwitcher extends Widget
{
    protected static ?int $sort = -1;
    protected static string $view = 'livewire.language-switcher';


    public function switchLanguage($locale)
    {
        // التحقق من أن اللغة المطلوبة مدعومة
        if (in_array($locale, ['en', 'ar'])) {
            Session::put('locale', $locale); // تحديث اللغة في الجلسة
            App::setLocale($locale); // تحديث اللغة فورًا
        }

        return redirect(request()->header('Referer'));
    }
}
