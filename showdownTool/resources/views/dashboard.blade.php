<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>

                {{-- show all assault rifles --}}

                <div class="p-6 bg-white dark:bg-gray-800">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Assault Rifles</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        {{-- @foreach ($assaultRifles as $assaultRifle)
                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-4">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">{{ $assaultRifle->name }} <span class="text-gray-400"> {{$assaultRifle->realName}}</span></h3>
                                <p class="text-gray-600 dark:text-gray-300">Headshot Damage: {{ $assaultRifle->headshotDamage }}</p>
                                <p class="text-gray-600 dark:text-gray-300">Torso Damage: {{ $assaultRifle->torsoDamage }}</p>
                                <p class="text-gray-600 dark:text-gray-300">Limb Damage: {{ $assaultRifle->limbDamage }}</p>
                                <p class="text-gray-600 dark:text-gray-300">Feet Damage: {{ $assaultRifle->feetDamage }}</p>
                                
                                <p class="text-gray-600 dark:text-gray-300">Magazine Size: {{ $assaultRifle->magSize }}</p>
                                <p class="text-gray-600 dark:text-gray-300">fireRate: {{ $assaultRifle->fireRate }}</p>
                                <p class="text-gray-600 dark:text-gray-300">Bullet Velocity: {{ $assaultRifle->bulletVelocity }}</p>
                                <p class="text-gray-600 dark:text-gray-300">ADS Mobility: {{ $assaultRifle->adsMobility }}</p>
                                <p class="text-gray-600 dark:text-gray-300">Firing Modes: {{ $fireTypes[$assaultRifle->firingModes -1]->firingMode }}</p>

                            </div>
                        @endforeach --}}
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
