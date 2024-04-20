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
            <form action="tu_archivo_php.php" method="post">
    <label for="nombre_producto">Nombre del Producto:</label>
    <input type="text" id="nombre_producto" name="nombre_producto" placeholder="Ingrese nombre de producto" required>

    <label for="categoria">Categoría:</label>
    <input type="text" id="categoria" name="categoria" placeholder="Ingrese la categoría" required>

    <label for="costo">Costo:</label>
    <input type="number" id="costo" name="costo" placeholder="Ingrese el costo" required>

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" placeholder="Ingrese el precio" required>

    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" placeholder="Ingrese la cantidad" required>

    <label for="estado">Estado:</label>
    <select id="estado" name="estado" required>
        <option value="nuevo">Nuevo</option>
        <option value="usado">Usado</option>
    </select>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" placeholder="Ingrese una descripción"></textarea>

    <button class="border-2" type="submit">Guardar</button>
</form>

            
        </div>
    </x-content-modal>
</x-modal-a>