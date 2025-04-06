<x-filament-widgets::widget>
    <x-filament::section>
        <div style="text-align: center;">
            <h3>{{ __('filament.switch_language') }}</h3>


            <x-filament::button
                wire:click="switchLanguage('en')"
                style="margin-right: 10px;"
            >
                {{ __('filament.english') }}
            </x-filament::button>


            <x-filament::button
                wire:click="switchLanguage('ar')"
            >
                {{ __('filament.arabic') }}
            </x-filament::button>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>




