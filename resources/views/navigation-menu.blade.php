<nav>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/dist/output.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    </head>

    <body class="h-screen">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap"
            rel="stylesheet">
        <style>
            .spa {
                font-family: 'Playfair Display', serif;
            }
        </style>
        <header class="h-14 bg-purple-300 top-0 w-full fixed shadow" style="z-index: 99999;">
            <div class="flex justify-between items-center px-10 h-14">
                <div class="flex justify-between items-center gap-x-14">
                    <div class="w-40">
                        <img src="imagen-realizza.png" alt="Descripción de la imagen" class="clases-adicionales" />

                    </div>
                </div>
                <div class="flex justify-center items-center p-6">
                    <h1 class="spa font-semibold text-center text-gray-900 leading-relaxed">
                        ✨ Descubre nuestras joyas exclusivas que transforman cada momento en una ocasión especial.
                        ¡Haz tuyo el brillo que mereces hoy! ✨💎
                    </h1>
                </div>
                <!-- Profile dropdown -->
                <div class="relative ml-3">
                    <div>

                        <button type="button"
                            class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-orange-900 focus:ring-offset-2 focus:ring-fuchsia-600"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </button>
                    </div>

                    <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-900" role="menuitem" tabindex="-1"
                            id="user-menu-item-0">Mi Perfil</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-900" role="menuitem" tabindex="-1"
                            id="user-menu-item-1"></a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-900" role="menuitem" tabindex="-1"
                            id="user-menu-item-2">Cerrar Sesion</a>
                    </div>
                    <style>
                        .hidden {
                            display: none;
                        }
                    </style>
                    <script>
                        // Selecciona el botón y el menú de usuario
                        const userMenuButton = document.getElementById('user-menu-button');
                        const userMenu = document.querySelector('[role="menu"]');

                        // Función para mostrar/ocultar el menú
                        function toggleUserMenu() {
                            const isOpen = userMenu.getAttribute('aria-expanded') === 'true';
                            userMenu.setAttribute('aria-expanded', !isOpen);
                            userMenu.classList.toggle('hidden', isOpen);
                        }

                        // Añadir el evento de clic al botón de usuario
                        userMenuButton.addEventListener('click', (event) => {
                            event.stopPropagation();
                            toggleUserMenu();
                        });

                        // Ocultar el menú cuando se hace clic fuera del mismo
                        document.addEventListener('click', (event) => {
                            if (!userMenu.contains(event.target) && !userMenuButton.contains(event.target)) {
                                userMenu.setAttribute('aria-expanded', 'false');
                                userMenu.classList.add('hidden');
                            }
                        });
                    </script>

                </div>
        </header>

        <!-- main content -->
        <main class="h-[calc(100vh-120px)] w-full absolute top-14 ">
            <!-- left sidebar -->
            <aside id="sidebar"
                class="w-[60px] lg:w-[240px] h-[calc(100vh-120px)] whitespace-nowrap fixed shadow overflow-x-hidden transition-all duration-500 ease-in-out">
                <div class="flex flex-col justify-between h-full bg-purple-200">
                    <ul class="flex flex-col gap-1 mt-2">
                        <li class="text-gray-900 hover:bg-gray-100 hover:text-violet-600">
                            <a class="w-full flex items-center py-3" href="{{ route('dashboard') }}">
                                <i class="fa-solid fa-house text-center px-5"></i>
                                <span class="whitespace-nowrap pl-1">Inicio</span>
                            </a>
                        </li>

                        <li class="text-gray-900 hover:bg-gray-100 hover:text-violet-600">
                            <x-nav-link class="w-full flex items-center py-3" href="{{ route('categorias') }}" :active="request()->routeIs('categorias')" class="w-full flex items-center py-3">
                                <i class="fa-solid fa-list mr-2"></i>
                                <span class="whitespace-nowrap pl-1">{{ ('Categorias') }}</span>
                            </x-nav-link>
                        </li>

                        <li class="text-gray-900 hover:bg-gray-100 hover:text-violet-600">
                            <a class="w-full flex items-center py-3" href="#">
                                <i class="fa-solid fa-users text-center px-5"></i>
                                <span class="whitespace-nowrap pl-1">Users</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="flex flex-col gap-1 mt-2">
                        <li class="text-gray-900 hover:bg-gray-100 hover:text-violet-600">
                            <a class="w-full flex items-center py-3" href="#">
                                <i class="fa-solid fa-right-from-bracket text-center px-5"></i>
                                <span class="pl-1">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
        </main>
    </body>
</nav>
