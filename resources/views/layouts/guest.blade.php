<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
       .brown-background {
         --tw-bg-opacity: 1;
         background-color: rgb(140 110 83 / var(--tw-bg-opacity)); /* Lighter brown color */
        }

        .bg-brown {
        --tw-bg-opacity: 1;
        background-color: rgb(210 180 140 / var(--tw-bg-opacity)); /* Light brown color value */
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
         }

         .text-darkbrown {
         --tw-text-opacity: 1;
         color: rgb(90 58 34 / var(--tw-text-opacity)); 
        }
        
        .text-3xl {
        font-size: 30px; /* 30px */
        font-family: 'Roboto', sans-serif;
         }

         .font-bold {
        font-weight: 1500px;
        }

        .text-center {
        text-align: center;
         }

        .mb-8 {
        margin-bottom: 1rem; /* Adjust the margin as needed */
         }
        .w-10 {
            weight: 100px;
        }
        .h-12{
            height:130px;
        }
         
        
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-red-900 antialiased">

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 brown-background">
        <div>
            <a href="/">
                <x-application-logo class="w-10 h-12 fill-current text-darkbrown" />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-brown dark:bg-brown-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

</body>
</html>