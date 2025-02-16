<?php

namespace App\Providers;

use Native\Laravel\Facades\Window;
use Native\Laravel\Contracts\ProvidesPhpIni;

class NativeAppServiceProvider implements ProvidesPhpIni
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Window::open()
        ->route('filament.admin.auth.login')
        ->rememberState()
        ->resizable(false)
        ->showDevTools(false)
        ->width('1200')
        ->height('900');
    }

    public function phpIni(): array
    {
        return [
            'error_reporting' => 'E_ALL',
        ];
    }
}
