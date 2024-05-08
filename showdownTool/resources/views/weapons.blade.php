<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Weapons') }}
        </h2>
    </x-slot>

     <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
        }

        main {
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        div.weapon {
            background-color: #fff;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        #weaponsContainer {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
    </style>

                        <div id="weaponsContainer">
                            @foreach ($weapons as $weapon)
                                <div class="weapon">
                                    <h3><b>{{ $weapon->name }} </b><span> {{ $weapon->realName }}</span></h3>
                                    <p>{{$weaponCategories[$weapon->weaponType - 1]->name }}</p>

                                    <button onclick="window.location.href='{{ route('weapon.show', ['id' => $weapon->id]) }}'">View Details</button>
                                    


                                </div>
                            @endforeach
                        </div>
</x-app-layout>


   
                    