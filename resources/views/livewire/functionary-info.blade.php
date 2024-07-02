<div class="flex flex-col items-center">
    @slot('header')
        DATOS DEL FUNCIONARIO
    @endslot
    <div class="flex flex-col items-center w-full p-2 m-2 bg-white rounded shadow-lg sm:flex-row">
        <img class="object-cover m-4 shadow-md w-60 h-60" src={{ $image }}>
        <div class="flex flex-wrap">
            <div class="w-full p-0.5 rounded bg-slate-400">
            <div class="flex p-1 rounded bg-slate-100">
                <div class="mr-1 grow-0">
                    NOMBRES:
                </div>
                <div class="grow">
                </div>
                <div class="grow-0">
                    {{ $functionary->names }}
                </div>
            </div>
        </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                    <div class="mr-1 place-self-start">
                        APELLIDOS:
                    </div>
                    <div class="grow">
                    </div>
                    <div class="place-self-start">
                        {{ $functionary->surnames }}
                    </div>
                </div>
            </div>    
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                    <div class="mr-1 place-self-start">
                        EDAD:
                    </div>
                    <div class="grow">
                    </div>
                    <div class="place-self-start">
                        {{ $functionary->age }}
                    </div>
                </div>
            </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                    <div class="mr-1 place-self-start">
                        SEXO:
                    </div>
                    <div class="grow">
                    </div>
                    <div class="place-self-start">
                        {{ $functionary->getGender() }}
                    </div>
                </div>
            </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                    <div class="mr-1 place-self-start">
                        CEDULA:
                    </div>
                    <div class="grow">
                    </div>
                    <div class="place-self-start">
                        {{ $functionary->identity_document }}
                    </div>
                </div>
            </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                    <div class="mr-1 place-self-start">
                        CREDENCIAL:
                    </div>
                    <div class="grow">
                    </div>
                    <div class="place-self-start">
                        {{ $functionary->credential }}
                    </div>
                </div>
            </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                    <div class="mr-1 place-self-start">
                        PROMO:
                    </div>
                    <div class="grow">
                    </div>
                    <a> <!-- TODO LINK-->
                    <div wire:click='check("promo")' class="cursor-pointer place-self-start">
                        {{ $functionary->getPromo() }}
                    </div>
                    </a>
                </div>
            </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                    <div class="mr-1 place-self-start">
                        ESTADO:
                    </div>
                    <div class="grow">
                    </div>
                    <div class="place-self-start">
                        {{ $functionary->getStatus() }}
                    </div>
                </div>
            </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                     <!-- TODO LINK-->
                    <div class="mr-1 place-self-start">
                        RANGO:
                    </div>
                    <div class="grow">
                    </div>
                    <div wire:click='check("rank")' class="cursor-pointer place-self-start">
                        {{ $functionary->getRank() }}
                    </div>
                </div>
            </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                     <!-- TODO LINK-->
                    <div class="mr-1 place-self-start">
                        DEPENDENCIA:
                    </div>
                    <div class="grow">
                    </div>
                    <div wire:click='check("dependency")' class="cursor-pointer place-self-start">
                        {{ $functionary->getDependency() }}
                    </div>
                </div>
            </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                     <!-- TODO LINK-->
                    <div class="mr-1 place-self-start">
                        CARGOS:
                    </div>
                    <div class="grow">
                    </div>
                    <div  class="place-self-start">
                        {{ $charges }}
                    </div>
                </div>
            </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                    <div class="mr-1 place-self-start">
                        ARMA:
                    </div>
                    <div class="grow">
                    </div>
                    <div class="place-self-start">
                        {{ $functionary->weapon->weapon_type }} | {{$functionary->weapon->weapon_serial}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center p-2 m-2 bg-white rounded shadow-lg w-fit sm:flex-row">
        <button wire:click="edit" class="p-2 px-4 text-white bg-blue-900 border-2 border-sky-100">Editar</button>
    </div>
</div>
