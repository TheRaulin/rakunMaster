<x-modal-a name="add-product" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <x-content-modal classes="h-full w-full flex justify-center items-center">
        <div class="bg-white px-8 py-8 w-1/3">
            <p>Agregar producto</p>
            <input type="text" placeholder="Ingrese nombre de producto">
            
        </div>
    </x-content-modal>
</x-modal-a>