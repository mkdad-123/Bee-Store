{{--<x-filament-widgets::widget>--}}
{{--    <x-filament::section>--}}
{{--        <div style="text-align: center;">--}}
{{--            <h3>{{ __('filament.switch_language') }}</h3>--}}


{{--            <x-filament::button--}}
{{--                wire:click="switchLanguage('en')"--}}
{{--                style="margin-right: 10px;"--}}
{{--            >--}}
{{--                {{ __('filament.english') }}--}}
{{--            </x-filament::button>--}}


{{--            <x-filament::button--}}
{{--                wire:click="switchLanguage('ar')"--}}
{{--            >--}}
{{--                {{ __('filament.arabic') }}--}}
{{--            </x-filament::button>--}}
{{--        </div>--}}
{{--    </x-filament::section>--}}
{{--</x-filament-widgets::widget>--}}

<x-filament-widgets::widget>
    <x-filament::section>
        <div style="text-align: center;">
            <h3>{{ __('filament.switch_language') }}</h3>

            <!-- الزر الرئيسي -->
            <x-filament::button
                wire:click="toggleLanguage"
                id="language-switcher-button"

            >
                {{ __('filament.current_language', ['locale' => App::getLocale()]) }}
            </x-filament::button>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>




