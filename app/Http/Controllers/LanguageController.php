<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage($lang)
    {
        if (in_array($lang, ['ar', 'en'])) {
            Session::put('locale', $lang); // حفظ اللغة في الجلسة
            App::setLocale($lang); // تعيين اللغة الحالية
        }

        return response()->json(['success' => true]);}
    }