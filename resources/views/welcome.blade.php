<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
    <!-- Inicio de navbar -->
    <header class="bg-gray-300">
        <div class="container mx-auto px-4 py-8 flex items-center">

            <!-- logo -->
            <div class="mr-auto md:w-48 flex-shrink-0">
                <img class="h-24" style="height: 4rem; " src="imagen-realizza.png" alt="Descripción de la imagen">
            </div>

            <!-- search -->
            <div class="h-12 pl-3 pr-2 bg-white border-2 border-purple-500 rounded-full flex justify-between items-center relative"
                style="width: 700px;">
                <input type="search" name="search" id="search" placeholder="Search"
                    class="appearance-none w-full outline-none focus:outline-none active:outline-none focus:border-purple-600 focus:ring-purple-600" />
                <button type="submit" class="ml-1 outline-none focus:outline-none active:outline-none">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 text-purple-500">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </div>


            <!-- phone number -->

            <div class="flex flex-col sm:flex-row sm:space-x-4 items-center ml-auto">
                @if (Route::has('login'))
                    @auth
                        <!-- Botón para usuarios autenticados -->
                        <a href="{{ url('/dashboard') }}"
                            class="md:w-50 bg-purple-600 text-white font-bold md:text-lg py-2 px-4 rounded-full hover:bg-purple-300 transition-colors shadow-lg">
                            Dashboard
                        </a>
                    @else
                        <!-- Botón para iniciar sesión -->
                        <a href="{{ route('login') }}"
                            class="md:w-50 bg-purple-600 text-white font-bold md:text-lg py-2 px-4 rounded-full hover:bg-purple-400 transition-colors shadow-lg">
                            Iniciar Sesión
                        </a>

                        @if (Route::has('register'))
                            <!-- Botón para registrarse -->
                            <a href="{{ route('register') }}"
                                class="md:w-32 bg-purple-700 text-white font-bold md:text-lg py-2 px-4 rounded-full hover:bg-purple-400 transition-colors shadow-lg mt-4 sm:mt-0">
                                Registrarse
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
            <!-- buttons -->
            <nav class="contents">
                <ul class="ml-4 xl:w-48 flex items-center justify-end">

                    <li class="ml-2 lg:ml-4 relative inline-block">
                        <a href="">
                            <div
                                class="absolute -top-1 right-0 z-10 bg-yellow-400 text-xs font-bold px-1 py-0.5 rounded-sm">
                            </div>
                            <svg class="h-10 lg:h-12 p-2 text-purple-700" aria-hidden="true" focusable="false"
                                data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="ml-2 lg:ml-4 relative inline-block">
                        <a href="">
                            <div
                                class="absolute -top-1 right-0 z-10 bg-yellow-400 text-xs font-bold px-1 py-0.5 rounded-sm">
                            </div>
                            <svg class="h-10 lg:h-12 p-2 text-purple-700" aria-hidden="true" focusable="false"
                                data-prefix="far" data-icon="shopping-cart" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.96-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78 160z">
                                </path>
                            </svg>
                        </a>
                    </li>


                </ul>
            </nav>

            <!-- cart count -->

        </div>
        <hr>
    </header>
    <!-- Fin de navbar -->


    <!-- inicio de body -->

<body class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100">
    <div class="2xl:container mx-auto flex justify-center items-center">
        <div class="bg-gray-200 shadow-lg py-2 px-6 mt-5">
            <nav class="flex justify-center">
                <ul class="md:flex flex-auto space-x-2 justify-center">

                   <li onclick="selected(this)" href="{{ url('/anillos') }}"
        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 bg-white cursor-pointer px-4 py-3 font-bold text-xs leading-4 shadow-md rounded">
        Anillos</li>
                    <li onclick="selected(this)"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 bg-white cursor-pointer px-4 py-3 font-bold text-xs leading-4 shadow-md rounded">
                        Aretes</li>
                    <li onclick="selected(this)"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 bg-white cursor-pointer px-4 py-3 font-bold text-xs leading-4 shadow-md rounded">
                        Pulseras</li>
                    <li onclick="selected(this)"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 bg-white cursor-pointer px-4 py-3 font-bold text-xs leading-4 shadow-md rounded">
                        Collares</li>
                    <li onclick="selected(this)"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 bg-white cursor-pointer px-4 py-3 font-bold text-xs leading-4 shadow-md rounded">
                        Broches</li>
                    <li onclick="selected(this)"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 bg-white cursor-pointer px-4 py-3 font-bold text-xs leading-4 shadow-md rounded">
                        Relojes</li>
                    <li onclick="selected(this)"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 bg-white cursor-pointer px-4 py-3 font-bold text-xs leading-4 shadow-md rounded">
                        Alfileres</li>
                    <li onclick="selected(this)"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 bg-white cursor-pointer px-4 py-3 font-bold text-xs leading-4 shadow-md rounded">
                        Piercings</li>
                    <li onclick="selected(this)"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 bg-white cursor-pointer px-4 py-3 font-bold text-xs leading-4 shadow-md rounded">
                        Corporal</li>
                    <li onclick="selected(this)"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 bg-white cursor-pointer px-4 py-3 font-bold text-xs leading-4 shadow-md rounded">
                        Para el cabello</li>
                </ul>
            </nav>
        </div>
    </div>


    <script>
        function selected(element) {
            const siblings = element.parentElement.children;
            for (const sibling of siblings) {
                sibling.classList.remove("text-white", "bg-purple-600");
                sibling.classList.add("text-gray-600", "bg-white", "border", "border-white");
            }
            element.classList.remove("text-gray-600", "bg-white", "border", "border-white");
            element.classList.add("text-white", "bg-purple-600");
        }
    </script>


</body>
@livewire('anillo-livewire')
<br>
<div id="carouselExampleIndicators" class="relative" style="width: 95%; height: 525px; margin: auto;"
    data-twe-carousel-init data-twe-ride="carousel">
    <!--Carousel indicators-->
    <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
        data-twe-carousel-indicators>
        <button type="button" data-twe-target="#carouselExampleIndicators" data-twe-slide-to="0"
            data-twe-carousel-active
            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-twe-target="#carouselExampleIndicators" data-twe-slide-to="1"
            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
            aria-label="Slide 2"></button>
        <button type="button" data-twe-target="#carouselExampleIndicators" data-twe-slide-to="2"
            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
            aria-label="Slide 3"></button>
    </div>

    <!--Carousel items-->
    <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']"
        style="height: 100%;">
        <!--First item-->
        <div class="relative float-left -mr-[100%] w-full transition-transform duration-[300ms] ease-in-out motion-reduce:transition-none"
            data-twe-carousel-item data-twe-carousel-active style="height: 100%;">
            <img src="https://i.ytimg.com/vi/sDhXZHkTYc0/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBV05bzOMg6Zwq2yOr_Dh6N5S-vSg"
                class="block w-full h-full object-cover" alt="Oferta 1" />
        </div>
        <!--Second item-->
        <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[300ms] ease-in-out motion-reduce:transition-none"
            data-twe-carousel-item style="height: 100%;">
            <img src="https://m.media-amazon.com/images/S/aplus-media-library-service-media/ba319f10-c6a6-4896-9217-a7c1cf9ffea0.__CR0,0,970,600_PT0_SX970_V1___.jpg"
                class="block w-full h-full object-cover" alt="Oferta 2" />
        </div>
        <!--Third item-->
        <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[300ms] ease-in-out motion-reduce:transition-none"
            data-twe-carousel-item style="height: 100%;">
            <img src="https://www.chicstudio.es/wp-content/uploads/2023/06/Beige-Minimalist-Mothers-Day-Sale-Promotional-Banner-1400x700.png"
                class="block w-full h-full object-cover" alt="Oferta 3" />
        </div>
    </div>

    <!--Carousel controls - prev item-->
    <button
        class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
        type="button" data-twe-target="#carouselExampleIndicators" data-twe-slide="prev">
        <span class="inline-block h-8 w-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </span>
        <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
    </button>
    <!--Carousel controls - next item-->
    <button
        class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-10 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
        type="button" data-twe-target="#carouselExampleIndicators" data-twe-slide="next">
        <span class="inline-block h-8 w-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </span>
        <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
    </button>
</div>



<style>
    .titulo-mejorado {
        font-family: 'font-family: ' Georgia', serif;';
        /* Tipo de letra */
        font-size: 28px;
        /* Tamaño de letra */
        text-align: center;
        /* Centrar el texto */
        color: #333;
        /* Color del texto */


        padding: 10px;
        /* Espacio interno */
        margin: 20px 0;
        /* Espacio externo */
    }
</style>
<h1 class="titulo-mejorado">Joyeria en Perú</h1>
<h1 class="titulo-mejorado " style="font-weight: bold;">¡¡¡Mira las ofertas en joyas que tenemos para ti!!!</h1>

<!-- Contenedor para los cards -->
<div
    style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px; padding: 20px; bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100">
    <!-- Primer card -->
     <!-- Primer card -->
     <div
     style="max-width: 300px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #ffffff; flex-shrink: 0; margin-bottom: 20px; border: 2px solid #800080;">
     <img src="https://platinoperu.com/wp-content/uploads/2022/11/collar-corazon-ORO-esmeraldanatural-colombiana-lima-miraflores-platinoperu2.jpg"
         alt="Sunset in the mountains"
         style="width: 100%; height: auto; max-width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px; max-height: 250px;">
     <div style="padding: 16px;">
         <div style="font-family: 'Georgia', serif; font-weight: bold; font-size: 20px; margin-bottom: 12px;">The
             Coldest Sunset</div>
         <p style="color: #4a5568; font-size: 16px;">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
             perferendis eaque, exercitationem praesentium nihil.
         </p>
     </div>
     <div style="padding: 16px 16px 8px;">
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#photography</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#travel</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#winter</span>
     </div>
 </div>

 <!-- Segundo card -->
 <div
     style="max-width: 300px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #ffffff; flex-shrink: 0; margin-bottom: 20px; border: 2px solid #800080;">
     <img src="https://platinoperu.com/wp-content/uploads/2022/11/collar-corazon-ORO-esmeraldanatural-colombiana-lima-miraflores-platinoperu2.jpg"
         alt="Sunset in the mountains"
         style="width: 100%; height: auto; max-width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px; max-height: 250px;">
     <div style="padding: 16px;">
         <div style="font-family: 'Georgia', serif; font-weight: bold; font-size: 20px; margin-bottom: 12px;">The
             Coldest Sunset</div>
         <p style="color: #4a5568; font-size: 16px;">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
             perferendis eaque, exercitationem praesentium nihil.
         </p>
     </div>
     <div style="padding: 16px 16px 8px;">
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#photography</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#travel</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#winter</span>
     </div>
 </div>

 <!-- Tercer card -->
 <div
     style="max-width: 300px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #ffffff; flex-shrink: 0; margin-bottom: 20px; border: 2px solid #800080;">
     <img src="https://platinoperu.com/wp-content/uploads/2022/11/collar-corazon-ORO-esmeraldanatural-colombiana-lima-miraflores-platinoperu2.jpg"
         alt="Sunset in the mountains"
         style="width: 100%; height: auto; max-width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px; max-height: 250px;">
     <div style="padding: 16px;">
         <div style="font-family: 'Georgia', serif; font-weight: bold; font-size: 20px; margin-bottom: 12px;">The
             Coldest Sunset</div>
         <p style="color: #4a5568; font-size: 16px;">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
             perferendis eaque, exercitationem praesentium nihil.
         </p>
     </div>
     <div style="padding: 16px 16px 8px;">
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#photography</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#travel</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#winter</span>
     </div>
 </div>

 <!-- Cuarto card -->
 <div
     style="max-width: 300px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #ffffff; flex-shrink: 0; margin-bottom: 20px; border: 2px solid #800080;">
     <img src="https://platinoperu.com/wp-content/uploads/2022/11/collar-corazon-ORO-esmeraldanatural-colombiana-lima-miraflores-platinoperu2.jpg"
         alt="Sunset in the mountains"
         style="width: 100%; height: auto; max-width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px; max-height: 250px;">
     <div style="padding: 16px;">
         <div style="font-family: 'Georgia', serif; font-weight: bold; font-size: 20px; margin-bottom: 12px;">The
             Coldest Sunset</div>
         <p style="color: #4a5568; font-size: 16px;">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
             perferendis eaque, exercitationem praesentium nihil.
         </p>
     </div>
     <div style="padding: 16px 16px 8px;">
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#photography</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#travel</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#winter</span>
     </div>
 </div>

 <!-- Quinto card -->
 <div
     style="max-width: 300px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #ffffff; flex-shrink: 0; margin-bottom: 20px; border: 2px solid #800080;">
     <img src="https://platinoperu.com/wp-content/uploads/2022/11/collar-corazon-ORO-esmeraldanatural-colombiana-lima-miraflores-platinoperu2.jpg"
         alt="Sunset in the mountains"
         style="width: 100%; height: auto; max-width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px; max-height: 250px;">
     <div style="padding: 16px;">
         <div style="font-family: 'Georgia', serif; font-weight: bold; font-size: 20px; margin-bottom: 12px;">The
             Coldest Sunset</div>
         <p style="color: #4a5568; font-size: 16px;">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
             perferendis eaque, exercitationem praesentium nihil.
         </p>
     </div>
     <div style="padding: 16px 16px 8px;">
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#photography</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#travel</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#winter</span>
     </div>
 </div>
</div>
<br>
<!-- Contenedor para los cards -->
<div
    style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px; padding: 20px; bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100">
    <!-- Primer card -->
     <!-- Primer card -->
     <div
     style="max-width: 300px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #ffffff; flex-shrink: 0; margin-bottom: 20px; border: 2px solid #800080;">
     <img src="https://platinoperu.com/wp-content/uploads/2022/11/collar-corazon-ORO-esmeraldanatural-colombiana-lima-miraflores-platinoperu2.jpg"
         alt="Sunset in the mountains"
         style="width: 100%; height: auto; max-width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px; max-height: 250px;">
     <div style="padding: 16px;">
         <div style="font-family: 'Georgia', serif; font-weight: bold; font-size: 20px; margin-bottom: 12px;">The
             Coldest Sunset</div>
         <p style="color: #4a5568; font-size: 16px;">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
             perferendis eaque, exercitationem praesentium nihil.
         </p>
     </div>
     <div style="padding: 16px 16px 8px;">
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#photography</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#travel</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#winter</span>
     </div>
 </div>

 <!-- Segundo card -->
 <div
     style="max-width: 300px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #ffffff; flex-shrink: 0; margin-bottom: 20px; border: 2px solid #800080;">
     <img src="https://platinoperu.com/wp-content/uploads/2022/11/collar-corazon-ORO-esmeraldanatural-colombiana-lima-miraflores-platinoperu2.jpg"
         alt="Sunset in the mountains"
         style="width: 100%; height: auto; max-width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px; max-height: 250px;">
     <div style="padding: 16px;">
         <div style="font-family: 'Georgia', serif; font-weight: bold; font-size: 20px; margin-bottom: 12px;">The
             Coldest Sunset</div>
         <p style="color: #4a5568; font-size: 16px;">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
             perferendis eaque, exercitationem praesentium nihil.
         </p>
     </div>
     <div style="padding: 16px 16px 8px;">
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#photography</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#travel</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#winter</span>
     </div>
 </div>

 <!-- Tercer card -->
 <div
     style="max-width: 300px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #ffffff; flex-shrink: 0; margin-bottom: 20px; border: 2px solid #800080;">
     <img src="https://platinoperu.com/wp-content/uploads/2022/11/collar-corazon-ORO-esmeraldanatural-colombiana-lima-miraflores-platinoperu2.jpg"
         alt="Sunset in the mountains"
         style="width: 100%; height: auto; max-width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px; max-height: 250px;">
     <div style="padding: 16px;">
         <div style="font-family: 'Georgia', serif; font-weight: bold; font-size: 20px; margin-bottom: 12px;">The
             Coldest Sunset</div>
         <p style="color: #4a5568; font-size: 16px;">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
             perferendis eaque, exercitationem praesentium nihil.
         </p>
     </div>
     <div style="padding: 16px 16px 8px;">
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#photography</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#travel</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#winter</span>
     </div>
 </div>

 <!-- Cuarto card -->
 <div
     style="max-width: 300px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #ffffff; flex-shrink: 0; margin-bottom: 20px; border: 2px solid #800080;">
     <img src="https://platinoperu.com/wp-content/uploads/2022/11/collar-corazon-ORO-esmeraldanatural-colombiana-lima-miraflores-platinoperu2.jpg"
         alt="Sunset in the mountains"
         style="width: 100%; height: auto; max-width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px; max-height: 250px;">
     <div style="padding: 16px;">
         <div style="font-family: 'Georgia', serif; font-weight: bold; font-size: 20px; margin-bottom: 12px;">The
             Coldest Sunset</div>
         <p style="color: #4a5568; font-size: 16px;">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
             perferendis eaque, exercitationem praesentium nihil.
         </p>
     </div>
     <div style="padding: 16px 16px 8px;">
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#photography</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#travel</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#winter</span>
     </div>
 </div>

 <!-- Quinto card -->
 <div
     style="max-width: 300px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #ffffff; flex-shrink: 0; margin-bottom: 20px; border: 2px solid #800080;">
     <img src="https://platinoperu.com/wp-content/uploads/2022/11/collar-corazon-ORO-esmeraldanatural-colombiana-lima-miraflores-platinoperu2.jpg"
         alt="Sunset in the mountains"
         style="width: 100%; height: auto; max-width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px; max-height: 250px;">
     <div style="padding: 16px;">
         <div style="font-family: 'Georgia', serif; font-weight: bold; font-size: 20px; margin-bottom: 12px;">The
             Coldest Sunset</div>
         <p style="color: #4a5568; font-size: 16px;">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
             perferendis eaque, exercitationem praesentium nihil.
         </p>
     </div>
     <div style="padding: 16px 16px 8px;">
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#photography</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#travel</span>
         <span
             style="display: inline-block; background-color: #e2e8f0; border-radius: 16px; padding: 4px 12px; font-size: 14px; font-weight: bold; color: #4a5568; margin-right: 8px; margin-bottom: 8px;">#winter</span>
     </div>
 </div>
</div>
<br><br>
<h2 class="uppercase" style="font-size: 14px; margin-left: 20px; margin-right: 20px;"><strong>BALIQ, TU JOYERÍA EN LIMA PERÚ</strong></h2>
    <p style="margin-left: 20px; margin-right: 20px;">
        Baliq, una joyería en Lima Perú, es una joyería peruana con más de 30 años de experiencia especializada en crear
        anillos de compromiso, joyas para mujeres y hombres pensados en destacar la belleza de la persona y que reflejen su
        personalidad. Trabajamos con los más finos materiales como oro 18k, diamantes, rubíes, zafiros, esmeraldas,
        topacios, perlas y más. Son gemas que además de ser preciosas llevan consigo un significado.
    </p>
    <br>
    <p style="margin-left: 20px; margin-right: 20px; ">
        Ahora, Baliq es una joyería en Lima con una renovada tienda online. Somos una joyería online. Contamos con el
        servicio de Delivery que hace envíos a todo el Perú como envíos a todo el mundo.
    </p>
    <h2 class="uppercase" style="font-size: 14px; margin-left: 20px; margin-right: 20px;"><strong>BALIQ, UNA JOYERÍA SIEMPRE CERCA A TI</strong></h2>
    <p style="margin-left: 20px; margin-right: 20px;">
        Baliq es una joyería en Lima que está siempre cerca de ti, para ofrecerte joyas finas y únicas con el mejor servicio
        y atención personalizada. Nos encuentras en los principales centros comerciales, tiendas por departamento y tiendas
        Wong cerca a tu casa, estamos en diferentes distritos de Lima.
    </p>
    <br>
<!-- component -->
<footer style="background-color: #dfd1e6; color: rgb(0, 0, 0); padding: px;">
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <div>
        <img src="imagen-realizza.png" class="mr-8 h-12 sm:h-16"alt="logo" />
          <p class="max-w-xs mt-4 text-sm text-gray-900 " style="color: rgb(0, 0, 0);">
            Servicio al cliente: maytawilbert168@gmail.com
          </p>
          <div class="flex mt-8 space-x-6 text-gray-900">
            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
              <span class="sr-only" > Facebook </span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fillRule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clipRule="evenodd" />
              </svg>
            </a>
            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
              <span class="sr-only"> Instagram </span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fillRule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clipRule="evenodd" />
              </svg>
            </a>
            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
              <span class="sr-only"> Twitter </span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
              </svg>
            </a>
            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
              <span class="sr-only"> GitHub </span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fillRule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clipRule="evenodd" />
              </svg>
            </a>
            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
              <span class="sr-only"> Dribbble </span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fillRule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clipRule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-6 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-3">
          <div>
            <p class="font-medium">
              Empresa
            </p>
            <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-900">
              <a class="hover:opacity-75" href> Nosotros </a>
              <a class="hover:opacity-75" href> Inspiración </a>
              <a class="hover:opacity-75" href> Nuestras tiendas</a>
              <a class="hover:opacity-75" href> Contacto</a>
              <a class="hover:opacity-75" href> Blog</a>
            </nav>
          </div>
          <div>
            <p class="font-medium">
              Mi Cuenta
            </p>
            <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-900">
              <a class="hover:opacity-75" href> Ingresar </a>
              <a class="hover:opacity-75" href> Registrarse </a>
              <a class="hover:opacity-75" href> Mis pedidos </a>
              <a class="hover:opacity-75" href> Recuperar contraseña </a>

            </nav>
          </div>
          <div>
            <p class="font-medium">
              Atención al cliente
            </p>
            <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-900">
              <a class="hover:opacity-75" href> Preguntas Frecuentes </a>
              <a class="hover:opacity-75" href> Politicas </a>
              <a class="hover:opacity-75" href> Terminos y condiciones </a>
              <a class="hover:opacity-75" href> <Label>ibro de reclamaciones</Label> </a>
            </nav>
          </div>

        </div>
      </div>

    </div>
  </footer>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>

</html>
