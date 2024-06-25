<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @slot('header')
        RELLENE EL FORMULARIO PARA AÑADIR FUNCIONARIO
    @endslot
    <div class="p-2 bg-white rounded shadow-md md:m-10 lg:mx-80">
       
        <form method="POST" class="grid gap-5 md:grid-cols-2 " id="inputform">
            @csrf
            <!--fullname and age inputs-->
            <div class="flex flex-col">
                <input type="text" placeholder="Ingrese los nombres" class="w-full" wire:model='names'/> 
                <div>@error('names') {{ $message }} @enderror</div>
            </div>
            <div class="flex flex-col">
                <input type="text" placeholder="Ingrese los apellidos" wire:model='surnames'/> 
                <div>@error('surnames') {{ $message }} @enderror</div>
            </div>

            <div class="flex flex-col">
                <input type="text" placeholder="Edad" pattern="/[0-9]{2}/" wire:model='age'/> 
                <div>@error('age') {{ $message }} @enderror</div>
            </div>
            <!--id.doc and crdential inputs-->
            <div class="flex flex-col">
                <input type="text" class="w-full" placeholder="Ingrese la credencial" pattern="/[0-9]{9}/" wire:model='credential'/> 
                <div>@error('credential') {{ $message }} @enderror</div>
            </div>

            <div class="flex flex-col">
                <input type="text" class="w-full" placeholder="Ingrese la cedula" wire:model='identity_document' pattern="/[0-9]{7}/"/> 
                <div>@error('identity_document') {{ $message }} @enderror</div>
            </div>
            <!--gender select-->
            <div class="flex flex-col pt-0 mt-0">
                <select wire:model='gender_id' class="w-full h-10 pl-3">
                    <option value='0' selected='selected' disabled='true'>SELECCIONA UN SEXO</option>
                    <?php foreach($data['genders'] as $gender): ?>
                    <option value={{$gender->id}}>{{$gender->gender}}</option>
                    <?php endforeach; ?>
                </select>
                <div>@error('gender_id') {{ $message }} @enderror</div>
            </div>
            <!--promo. range, charge,status and dependency selects-->
            <div class="flex flex-col">
                <select wire:model='promo_id' class="w-full h-10 pl-3">
                    <option value='0' selected='selected' disabled='true'>SELECCIONA UNA PROMO</option>
                    <?php foreach($data['promos'] as $promo): ?>
                    <option value={{$promo->id}}>{{$promo->promo}}</option>
                    <?php endforeach; ?>
                </select>
                <div>@error('promo_id') {{ $message }} @enderror</div>
            </div>
            <div class="flex flex-col">
                <select wire:model='rank_id' class="w-full h-10 pl-3">
                    <option value='0' selected='selected' disabled='true'>SELECCIONA UN RANGO</option>
                    <?php foreach($data['ranks'] as $rank): ?>
                    <option value={{$rank->id}}>{{$rank->name}}</option>
                    <?php endforeach; ?>
                </select>
                <div>@error('rank_id') {{ $message }} @enderror</div>
            </div>

            <div class="flex flex-col">
                <select wire:model='charge_id' class="w-full h-10 pl-3">
                    <option value='0' selected='selected' disabled='true'>SELECCIONA UN CARGO</option>
                    <?php foreach($data['charges'] as $charge): ?>
                    <option value={{$charge->id}}>{{$charge->charge}}</option>
                    <?php endforeach; ?>
                </select>
                <div>@error('charge_id') {{ $message }} @enderror</div>
            </div>

            <div class="flex flex-col">
                <select wire:model='dependency_id' class="w-full h-10 pl-3">
                    <option value='0' selected='selected' disabled='true'>SELECCIONA UNA DEPENDENCIA</option>
                    <?php foreach($data['dependencies'] as $dependency): ?>
                    <option value={{$dependency->id}}>{{$dependency->name}}</option>
                    <?php endforeach; ?>
                </select>
                <div>@error('dependency_id') {{ $message }} @enderror</div>
            </div>

            <div class="flex flex-col">
                <select wire:model='status_id' class="w-full h-10 pl-3">
                    <option value='0' selected='selected' disabled='true'>SELECCIONA UN ESTADO</option>
                    <?php foreach($data['statuses'] as $status): ?>
                    <option value={{$status->id}}>{{$status->name}}</option>
                    <?php endforeach; ?>
                </select>
                <div>@error('status_id') {{ $message }} @enderror</div>
            </div>

            <!--start and end date input-->
            <div class="flex flex-col">
                <input wire:model='start_date' class="w-full" placeholder="FECHA DE INGRESO" type="text" onfocus="(this.type='date')">
                <div>@error('start_date') {{ $message }} @enderror</div>
            </div>  
            {{-- {{ html()->label('Seleccione fecha de egreso','end_date')->class('m-2') }} <br/>
            {{ html()->input('date','end_date')->class('m-2')->attributes(['wire:model'=>'end_date']) }} <br/>
            <div>@error('end_date') {{ $message }} @enderror</div> --}}
            
            <input class="col-span-2 py-2 text-white bg-blue-600 border-2 border-black hover:bg-blue-700 active:bg-blue-500 active:transition-colors" type="submit" value="Añadir" wire:click.prevent='save'>
        </form>
        
    </div>
    @include('sweet-alert')
</div>
