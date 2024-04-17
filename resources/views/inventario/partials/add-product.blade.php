<x-modal-a name="add-product" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <x-content-modal classes="h-full w-full flex justify-center items-center">
        <div class="bg-white px-8 py-8 w-1/3">
            <button class="mx-3 hover:bg-white rounded-md" x-on:click="show = false">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
            <form action="">
            <input type="text" placeholder="Ingrese nombre de producto">
            <input type="text" placeholder="Ingrese la categoria">
            <input type="text" placeholder="Ingrese el costo">
            <input type="text" placeholder="Ingrese el precio">
            <input type="text" placeholder="Ingrese la cantidad">
            <input type="text" placeholder="Ingrese el estado">
            <button class="border-2" type="submit">Guardar</button>
            </form>
            
        </div>
    </x-content-modal>
</x-modal-a>