<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Weapons') }}
            <br>
            <a href="{{ route('weapons') }}">← Back to weapons</a>
            @vite(['resources/css/gun.css', 'resources/js/gun.js'])
        </h2>
    </x-slot>
    <div class="flex items-center justify-center">
        <div id="layout" class="flex text-white gap-5">
            <div>
                {{-- load image damageModel from public/img --}}
                <div id="imgContainer" class="bg-neutral-900 p-5 rounded-xl h-5/6 w-fit flex justify-center">
                    <img src="{{ asset('img/damageModel.png') }}" alt="damageModel" class="h-full">
                    @if ($weapon->weaponType == 4)
                        <p id="headshotDamageTag">{{ $weapon->headshotDamage * $weapon->pellets }}</p>
                        <p id="torsoDamageTag">{{ $weapon->torsoDamage * $weapon->pellets }}</p>
                        <p id="limbDamageTagLeftArm">{{ $weapon->limbDamage * $weapon->pellets }}</p>
                        <p id="limbDamageTagRightArm">{{ $weapon->limbDamage * $weapon->pellets }}</p>
                        <p id="limbDamageTagLeftLeg">{{ $weapon->limbDamage * $weapon->pellets }}</p>
                        <p id="limbDamageTagRightLeg">{{ $weapon->limbDamage * $weapon->pellets }}</p>
                    @else
                        <p id="headshotDamageTag">{{ $weapon->headshotDamage }}</p>
                        <p id="torsoDamageTag">{{ $weapon->torsoDamage }}</p>
                        <p id="limbDamageTagLeftArm">{{ $weapon->limbDamage }}</p>
                        <p id="limbDamageTagRightArm">{{ $weapon->limbDamage }}</p>
                        <p id="limbDamageTagLeftLeg">{{ $weapon->limbDamage }}</p>
                        <p id="limbDamageTagRightLeg">{{ $weapon->limbDamage }}</p>
                    @endif



                </div>
            </div>
            <div>
                <div class="bg-neutral-900 p-5 rounded-xl h-fit">
                    <div class="flex items-center gap-2">
                        <h2 class="text-xl font-bold">{{ $weapon->name }}</h2>
                        <h3>Basic stats</h3>
                    </div>
                    <div>

                        <p id='category' class="text-neutral-600 text-md">
                            {{ $weaponCategories[$weapon->weaponType - 1]->name }}</p>

                        <p id="headshotDamage">Headshot Damage: {{ $weapon->headshotDamage }}</p>
                        {{-- skill bar --}}
                        <div class="w-full h-2 bg-neutral-600 rounded my-1">
                            <div class="h-full text-xs text-center text-white bg-neutral-100 rounded"
                                style="width: {{ ($weapon->headshotDamage / $minMaxStats->maxHeadshotDamage) * 100 }}%">
                            </div>
                        </div>


                        <p id="torsoDamage">Torso Damage: {{ $weapon->torsoDamage }}</p>
                        <div class="w-full h-2 bg-neutral-600 rounded my-1">
                            <div class="h-full text-xs text-center text-white bg-neutral-100 rounded"
                                style="width: {{ ($weapon->torsoDamage / $minMaxStats->maxTorsoDamage) * 100 }}%">
                            </div>
                        </div>
                        <p id="limbDamage">Limb Damage: {{ $weapon->limbDamage }}</p>
                        <div class="w-full h-2 bg-neutral-600 rounded my-1">
                            <div class="h-full text-xs text-center text-white bg-neutral-100 rounded"
                                style="width: {{ ($weapon->limbDamage / $minMaxStats->maxLimbDamage) * 100 }}%">
                            </div>
                        </div>

                        @if ($weapon->pellets > 1)
                            <p id="pellets">Pellets: {{ $weapon->pellets }}</p>
                        @endif

                        <p>Magazine Size: {{ $weapon->magSize }}</p>
                        <div class="w-full h-2 bg-neutral-600 rounded my-1">
                            <div class="h-full text-xs text-center text-white bg-neutral-100 rounded"
                                style="width: {{ ($weapon->magSize / $minMaxStats->maxMagSize) * 100 }}%">
                            </div>
                        </div>
                        @if ($weapon->fireRate == 0)
                            <p id="fireRate">Fire Rate: Semi</p>
                        @elseif($weapon->fireRate == 1)
                            <p id="fireRate">Fire Rate: Bolt Action</p>
                        @else
                            <p id="fireRate">Fire Rate: {{ $weapon->fireRate }}</p>
                            <div class="w-full h-2 bg-neutral-600 rounded my-1">
                                <div class="h-full text-xs text-center text-white bg-neutral-100 rounded"
                                    style="width: {{ ($weapon->fireRate / $minMaxStats->maxFireRate) * 100 }}%">
                                </div>
                            </div>
                        @endif
                        <p id="bulletVelocity">Bullet Velocity: {{ $weapon->bulletVelocity }}</p>
                        <div class="w-full h-2 bg-neutral-600 rounded my-1">
                            <div class="h-full text-xs text-center text-white bg-neutral-100 rounded"
                                style="width: {{ ($weapon->bulletVelocity / $minMaxStats->maxBulletVelocity) * 100 }}%">
                            </div>
                        </div>
                        <p id="adsMobility">ADS Mobility: {{ $weapon->adsMobility }}</p>
                        <div class="w-full h-2 bg-neutral-600 rounded my-1">
                            <div class="h-full text-xs text-center text-white bg-neutral-100 rounded"
                                style="width: {{ ($weapon->adsMobility / $minMaxStats->maxAdsMobility) * 100 }}%">
                            </div>
                        </div>
                        <p id="firingModes">Firing Modes: {{ $fireTypes[$weapon->firingModes - 1]->firingMode }}</p>
                    </div>


                </div>
                <div class="bg-neutral-900 p-5 rounded-xl h-fit mt-5">
                    <h3 class="text-xl font-bold">Time To Kill</h3>
                    <label for="plates" id="platesLabel">Plates: </label><br>
                    <input type="range" min="100" max="250" step="50" value="200" name="plates"
                        id="platesRange" class="slider">
                    <p id="ttkTorso"></p>
                    <p id="ttkHeadshots"></p>
                    <p id="ttkLimbs"></p>
                </div>
            </div>
            <div class="bg-neutral-900 p-5 rounded-xl h-fit">
                <canvas style="height: 250px;" id="myChart"></canvas>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const weapon = @json($weapon);
        console.log(weapon);

        const stats = @json($minMaxStats);
        console.log(stats);

        const weaponCategories = @json($weaponCategories);

        let headshotDamage = weapon.headshotDamage;
        let torsoDamage = weapon.torsoDamage;
        let limbDamage = weapon.limbDamage;


        let avgHeadshotDamage = stats.avgHeadshotDamage;
        let avgTorsoDamage = stats.avgTorsoDamage;
        let avgLimbDamage = stats.avgLimbDamage;


        let avgHeadshotDamageType = stats.avgHeadshotDamageType;
        let avgTorsoDamageType = stats.avgTorsoDamageType;
        let avgLimbDamageType = stats.avgLimbDamageType;


        if (weapon.weaponType == 4) {
            headshotDamage = weapon.headshotDamage * weapon.pellets;
            torsoDamage = weapon.torsoDamage * weapon.pellets;
            limbDamage = weapon.limbDamage * weapon.pellets;


            avgHeadshotDamageType = stats.avgHeadshotDamageType * weapon.pellets;
            avgTorsoDamageType = stats.avgTorsoDamageType * weapon.pellets;
            avgLimbDamageType = stats.avgLimbDamageType * weapon.pellets;
        }


        const avgDamage = (headshotDamage + torsoDamage + limbDamage) / 3;

        let fireRate = weapon.fireRate;
        if (weapon.fireRate < 10) {
            fireRate = 100;
        }

        const ttkTorso = document.getElementById('ttkTorso');
        const ttkHeadshots = document.getElementById('ttkHeadshots');
        const ttkLimbs = document.getElementById('ttkLimbs');
        const platesLabel = document.getElementById('platesLabel');

        const platesRange = document.getElementById('platesRange');

        ttkTorso.innerText = ttkLabel(calcTTK(torsoDamage, weapon.fireRate, platesRange.value), "TTK");
        ttkHeadshots.innerText = ttkLabel(calcTTK(headshotDamage, weapon.fireRate, platesRange.value),
            "TTK with headshots");
        ttkLimbs.innerText = ttkLabel(calcTTK(limbDamage, weapon.fireRate, platesRange.value),
            "TTK with limb shots");

        let plates = (platesRange.value / 50) - 2;
        platesLabel.innerText = `Plates: ${plates}`;

        platesRange.addEventListener('input', () => {
            ttkTorso.innerText = ttkLabel(calcTTK(torsoDamage, weapon.fireRate, platesRange.value), "TTK");
            ttkHeadshots.innerText = ttkLabel(calcTTK(headshotDamage, weapon.fireRate, platesRange.value),
                "TTK with headshots");
            ttkLimbs.innerText = ttkLabel(calcTTK(limbDamage, weapon.fireRate, platesRange.value),
                "TTK with limb shots");

            plates = (platesRange.value / 50 - 2);
            platesLabel.innerText = `Plates: ${plates}`;
        });

        const ctx = document.getElementById('myChart');


        const data = {
            labels: [
                'Headshot Damage',
                'Torso Damage',
                'Limb Damage',
                'Fire Rate',
                'Bullet Velocity',
                'ADS Mobility',
                'Magazine Size'
            ],

            datasets: [{
                    label: weapon.name,
                    data: [from0to100(headshotDamage, stats.minHeadshotDamage, stats.maxHeadshotDamage), from0to100(
                        torsoDamage, stats.minTorsoDamage, stats.maxTorsoDamage), from0to100(limbDamage,
                        stats.minLimbDamage, stats.maxLimbDamage), from0to100(fireRate, stats.minFireRate,
                        stats.maxFireRate), from0to100(weapon.bulletVelocity, stats.minBulletVelocity, stats
                        .maxBulletVelocity), from0to100(weapon.adsMobility, stats.minAdsMobility, stats
                        .maxAdsMobility), from0to100(weapon.magSize, stats.minMagSize, stats.maxMagSize)],
                    fill: true,
                    backgroundColor: 'rgba(153, 27, 27, 0.2)',
                    borderColor: 'rgb(153, 27, 27)',
                    pointBackgroundColor: 'rgb(153, 27, 27)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(153, 27, 27)'
                },

                {
                    label: 'Average ' + weaponCategories[weapon.weaponType - 1].name,
                    data: [from0to100(avgHeadshotDamageType, stats.minHeadshotDamage, stats
                        .maxHeadshotDamage), from0to100(avgTorsoDamageType, stats.minTorsoDamage,
                        stats
                        .maxTorsoDamage), from0to100(avgLimbDamageType, stats.minLimbDamage, stats
                        .maxLimbDamage), from0to100(stats.avgFireRateType, stats.minFireRate, stats
                        .maxFireRate), from0to100(stats.avgBulletVelocityType, stats.minBulletVelocity,
                        stats.maxBulletVelocity), from0to100(stats.avgAdsMobilityType, stats.minAdsMobility,
                        stats.maxAdsMobility), from0to100(stats.avgMagSizeType, stats.minMagSize, stats
                        .maxMagSize)],
                    fill: true,
                    backgroundColor: 'rgba(77, 77, 128, 0.2)',
                    borderColor: 'rgb(77, 77, 128)',
                    pointBackgroundColor: 'rgb(77, 77, 128)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(77, 77, 128)'

                },
                {
                    label: 'Average',
                    data: [from0to100(avgHeadshotDamage, stats.minHeadshotDamage, stats.maxHeadshotDamage),
                        from0to100(avgTorsoDamage, stats.minTorsoDamage, stats.maxTorsoDamage),
                        from0to100(avgLimbDamage, stats.minLimbDamage, stats.maxLimbDamage), from0to100(
                            stats.avgFireRate, stats.minFireRate, stats.maxFireRate), from0to100(stats
                            .avgBulletVelocity, stats.minBulletVelocity, stats.maxBulletVelocity), from0to100(
                            stats.avgAdsMobility, stats.minAdsMobility, stats.maxAdsMobility), from0to100(stats
                            .avgMagSize, stats.minMagSize, stats.maxMagSize)
                    ],
                    fill: true,
                    backgroundColor: 'rgba(82, 82, 82, 0.2)',
                    borderColor: 'rgb(82, 82, 82)',
                    pointBackgroundColor: 'rgb(82, 82, 82)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(82, 82, 82)'
                }
            ]
        };

        const config = {
            type: 'radar',
            data: data,
            options: {
                plugins: {
                    tooltip: {
                        enabled: false
                    }
                },
                elements: {
                    line: {
                        borderWidth: 3
                    }
                },
                scales: {
                    r: {
                        angleLines: {
                            display: false
                        },
                        ticks: {
                            display: false
                        },
                        suggestedMin: 0,
                        suggestedMax: 100
                    }
                },


            }
        };


        const myChart = new Chart(ctx, config);

        function calcTTK(damage, firerate, health) {
            const shotsToKill = Math.ceil(health / damage);

            const sum = ((60 / firerate) * (shotsToKill - 1)).toFixed(3)
            if (sum == Infinity || sum > 2) {
                return 'N/A';
            } else {
                return sum * 1000;
            }
        }

        function from0to100(value, min, max) {
            return ((value - min) / (max - min)) * 100;
        }

        function ttkLabel(value, text) {
            if (value == 'N/A') {
                return `${text}: N/A`;
            } else if (value == 0) {
                return `${text}: Instant kill`;
            } else {
                return `${text}: ${value}ms`;
            }

        }
    </script>
</x-app-layout>
