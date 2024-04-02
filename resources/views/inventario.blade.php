<x-app-layout>
    <div class="h-full w-full px-6 py-6" style="background-color: #F8F9FA">
        <div class="w-full flex justify-between bg-gray-800">
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
                <button class="bg-blue-500 w-40 mx-2 h-10">Crear categoria</button>
                <button class="bg-red-500 w-40 h-10">Agregar producto</button>
            </div>
        </div>
        <div class="w-full flex mt-6 bg-gray-800">
            <div class="bg-red-500 h-20 w-1/3"></div>
            <div class="bg-blue-500 h-20 w-1/3"></div>
            <div class="bg-green-500 h-20 w-1/3"></div>
        </div>
        <div class="w-full flex mt-6 bg-gray-800">
            <div class="bg-red-500 h-20 w-1/3"></div>
            <div class="bg-blue-500 h-20 w-1/3"></div>
            <div class="bg-green-500 h-20 w-1/3"></div>
        </div>
        
    </div>
</x-app-layout>