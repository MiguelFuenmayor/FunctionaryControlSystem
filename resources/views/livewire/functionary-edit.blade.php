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
                    <input wire:model='names' class="w-56 h-6" type="text">
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
                    <div class="grow-0">
                        <input wire:model='surnames' class="w-56 h-6" type="text">
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
                    <div class="grow-0 ">
                        <input wire:model='age' class="w-56 h-6 pl-3" type="number">
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
                    <div class="grow-0">
                        <select class="w-56 pl-3" wire:model.change='gender'>
                            <?php foreach($genders as $gender): ?>
                            <option value={{$gender->id}}>{{$gender->name}}</option>
                            <?php endforeach; ?>
                        </select>
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
                    <div class="grow-0">
                        <input wire:model='identity_document' class="w-56 h-6" type="text">
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
                    <div class="grow-0">
                        <input wire:model='credential' class="w-56 h-6 " type="text">
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
                    <div class="grow-0">
                        <select class="w-56 pl-3" wire:model='promo' name="promo" id="">
                            <?php foreach($promos as $promo): ?>
                            <option value={{$promo->id}}>{{$promo->name}}</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                    <div class="mr-1 place-self-start">
                        ESTADO:
                    </div>
                    <div class="grow">
                    </div>
                    <div class="grow-0">
                        <select class="w-56 pl-3" wire:model='status'  name="status" id="">  
                            <?php foreach($statuses as $status): ?>
                            <option value={{$status->id}}>{{$status->name}}</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                    <div class="mr-1 place-self-start">
                        RANGO:
                    </div>
                    <div class="grow">
                    </div>
                    <div class="grow-0">
                        <select wire:model='rank' class="w-56 pl-3" name="" id="">
                            <?php foreach($ranks as $rank): ?>
                            <option value={{$rank->id}}>{{$rank->name}}</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                    <div class="mr-1 place-self-start">
                        DEPENDENCIA:
                    </div>
                    <div class="grow">
                    </div>
                    <div class="grow-0">
                        <select wire:model='dependency' class="w-56 pl-3">
                            <?php foreach($dependencies as $dependency): ?>
                            <option value={{$dependency->id}}>{{$dependency->name}}</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="w-full p-0.5 rounded bg-slate-400">
                <div class="flex p-1 rounded bg-slate-100">
                    <div class="mr-1 place-self-start">
                        CARGOS:
                    </div>
                    <div class="grow">
                    </div>
                    <div class="grow-0">
                        <fieldset>
                            @foreach($all_charges as $one_charge)
                                <input type="checkbox" wire:model='charges'
                                    name="charges" id={{$one_charge['id']}} 
                                    value={{$one_charge['id']}}
                                    @if (in_array($one_charge['id'], $charges))checked @endif>
                                <label for="checkbox1">{{$one_charge['name']}}</label>
                            @endforeach
                        </fieldset>
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
                    <div class="grow-0">
                        <select wire:model='weapon' class="w-56 pl-3">
                            <?php foreach($weapons as $weapon): ?>
                            <option value={{$weapon->id}}>{{$weapon->weapon_type}}</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="flex flex-col items-center p-2 m-2 bg-white rounded shadow-lg w-fit sm:flex-row">
            <button wire:click='save' class="p-2 px-4 text-white bg-blue-900 border-2 border-sky-100">Guardar cambios</button>
        </div>
        <div class="flex flex-col items-center p-2 m-2 bg-white rounded shadow-lg w-fit sm:flex-row">
            <button wire:click='cancel' class="p-2 px-4 text-white bg-red-500 border-2 border-sky-100">Volver</button>
        </div>   
    </div>

   @include('sweet-alert')
</div>
