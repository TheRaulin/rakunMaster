<x-app-layout>
    <div class="h-full w-full px-6 py-6" style="background-color: #F8F9FA">
        <div class="w-full flex justify-between">
            <div class="">
                <input class="w-80" type="text" name="b-prodcut" id="buscar-input" placeholder="Buscar...">
                <select class="mx-2" name="categorias" id="categorias">
                    <option value="">Ver Categorias</option>
                    <option value="">Gaseosas</option>
                </select>
                <select name="categorias" id="categorias">
                    <span>Ordenar:</span>
                    <option value="">Ordenar: </option>
                    <option value="">Unidades vendidas</option>
                </select>
            </div>
            <div class="">
                <button class="bg-green-500 w-40 h-10">Ver Categorias</button>
                <button class="bg-blue-500 w-40 mx-2 h-10" x-data="" x-on:click.prevent="$dispatch('open-modal', 'add-category')" type="submit">Crear categoria</button>
                <button class="bg-red-500 w-40 h-10">Agregar producto</button>
            </div>
        </div>
        <div class="w-full flex mt-6 bg-gray-800">
            <div class=" h-20 w-1/3"></div>
            <div class=" h-20 w-1/3"></div>
            <div class=" h-20 w-1/3"></div>
        </div>
        <div class="w-full flex mt-6 px-6 py-6 border border-gray-300">
            <table class="table-auto w-full border border-gray-400">
                <thead class="border border-gray-300">
                    <tr>
                        <th class="px-4 py-2"> </th>
                        <th class="px-4 py-2">Producto</th>
                        <th class="px-4 py-2">Categoria</th>
                        <th class="px-4 py-2">Costo</th>
                        <th class="px-4 py-2">Precio</th>
                        <th class="px-4 py-2">Cantidad</th>
                        <th class="px-4 py-2">Estado</th>
                        <th class="px-4 py-2">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="border px-4 py-2"> </th>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">Producto A</td>
                        <td class="border px-4 py-2">Producto A</td>
                        <td class="border px-4 py-2">$20.00</td>
                        <td class="border w-[100px] px-4 py-2">$20.00</td>
                        <td class="border w-[100px] px-4 py-2">$Activo</td>
                        <td class="border w-[206px] px-4 py-2">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 w-20 text-white font-bold py-2 px-2 rounded mr-2">Editar</button>
                            <button
                                class="bg-red-500 hover:bg-red-700 w-20 text-white font-bold py-2 px-2 rounded">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @include('inventario.partials.add-category')
</x-app-layout>