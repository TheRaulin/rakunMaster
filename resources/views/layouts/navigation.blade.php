<!--<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
 <p>Aqui has tu cosa ever</p>
</nav>-->

<!-- Scripts -->

<!-- component -->
<!-- 
  añadir al css

  @layer components {
    .sidebar{
      transition:all .4s ease-in-out;
    }
  }
-->

<div class="bg-gray-100  ">
    <div class="sidebar w-[3.35rem] overflow-hidden border-r hover:w-56   hover:z-10 hover:bg-white hover:shadow-lg ">
        <div class="flex flex-col justify-between pt-2 pb-6">
            <div>
                <div class="min-w-max py-2.5 px-4 flex">
                    <a href="{{ route('dashboard') }}" class=" relative flex items-center space-x-4 ">

                        <img src="./images/icon-hamburger-gray.svg" class="  w-5 h-3 " alt="">
                        <span class="   text-purple-800 font-semibold text-1xl">RakunMaster</span>
                    </a>


                </div>
                <ul class="mt-6 space-y-2 tracking-wide  ">
                    <li class="min-w-max">
                        <a href="{{ route('dashboard') }}" aria-label="dashboard"
                            class="bg group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600  hover:bg-gradient-to-r from-purple-700 to-purple-300">
                            <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z"
                                    class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                                <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z"
                                    class="fill-current text-purple-600 group-hover:text-red-300"></path>
                                <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z"
                                    class="fill-current group-hover:text-skys-300"></path>
                            </svg>
                            <span class="-mr-1 font-medium text-gray-600 group-hover:text-white">Dashboard</span>
                        </a>
                    </li>
                    <li class="min-w-max">
                        <a href="#"
                            class="bg group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600  hover:bg-gradient-to-r from-purple-700 to-purple-300 hover:text-white ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path class="fill-current text-gray-300 group-hover:text-cyan-200" fill-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z"
                                    clip-rule="evenodd" />
                                <path class="fill-current text-gray-600 group-hover:text-gray-600"
                                    d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                            </svg>
                            <span class=" font-medium  ">Gestión de inventario</span> </a>
                        <!--  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4"/>
</svg>

                <input type="ckeckbox">
              </a>

              <div class="dropdown_content">

              <ul class="dropdown_sub">

                <li class="dropdown_li">
                    <a href="" class="dropdown_anchor">Categorias</a>
                </li>

                <li class="dropdown_li">
                    <a href="" class="dropdown_anchor">Productos</a>
                </li>

                <li class="dropdown_li">
                    <a href="" class="dropdown_anchor">Proveedores</a>
                </li>



              </ul>

              </div> -->


                    </li>
                    <li class="min-w-max">
                        <a href="categorias.html"
                            class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600 hover:bg-gradient-to-r from-purple-600 to-purple-200 hover:text-white ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path class="fill-current text-gray-600 group-hover:text-gray-600" fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd" />
                                <path class="fill-current text-gray-300 group-hover:text-cyan-200"
                                    d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                            </svg>
                            <span class="font-medium">Reportes</span>
                        </a>
                    </li>
                    <li class="min-w-max">
                        <a href="#"
                            class="group flex items-center space-x-4 rounded-md  px-4 py-3 text-gray-600 hover:bg-gradient-to-r from-purple-600 to-purple-200 hover:text-white
              {{ request()->routeIs('Customers.*') ? 'bg-gradient-to-r from-purple-600  to-purple-200' : 'text-gray-600' }} ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path class="text-gray-600 group-hover:fill-cyan-200"
                                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg>
                            <span class="font-medium"> Clientes</span>
                            <!--group-hover:text-gray-700-->
                        </a>
                    </li>
                    <li class="min-w-max">
                        <a href="#"
                            class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600  hover:bg-gradient-to-r from-purple-600 to-purple-200 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" fill="currentColor"
                                class="bi bi-archive-fill" viewBox="0 0 16 16">
                                <path class="text-gray-500 group-hover:fill-cyan-200"
                                    d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z" />
                            </svg>
                            <span class="font-medium">Proveedores</span>
                        </a>
                    </li>
                    <li class="min-w-max">
                        <a href="#"
                            class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600  hover:bg-gradient-to-r from-purple-600 to-purple-200 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path class="fill-current text-gray-300 group-hover:text-cyan-200"
                                    d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                                <path class="fill-current text-gray-600 group-hover:text-gray-600" fill-rule="evenodd"
                                    d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="font-medium">ventas</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="min-w-max -mb-3">
                <a href="#"
                    class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600  hover:bg-gradient-to-r from-purple-600 to-purple-200 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:fill-cyan-200"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="font-medium">Configuración</span>
                </a>
            </div>
        </div>
    </div>
</div>