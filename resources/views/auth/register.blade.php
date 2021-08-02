<x-guest-layout headertext="Signup for Unilorin Alumni Platform">
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        @include('auth.reg-form')
    </x-auth-card>
</x-guest-layout>
