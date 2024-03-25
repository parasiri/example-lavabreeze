<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- <-- Fonts --> 
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
         <!-- Custom Styles -->
    <style>

     .bg-brown {
      --tw-bg-opacity: 1;
       background-color: rgb(210 180 140 / var(--tw-bg-opacity)); /* Light brown color value */
        }

       .bg-gray-100 {
       --tw-bg-opacity: 1;
         background-color: rgb(140 110 83 / var(--tw-bg-opacity)); /* Lighter brown color */
        }
         .bg-darkbrown {
         --tw-bg-opacity: 1;
         background-color: rgb(144 122 95 / var(--tw-bg-opacity)); /* Dark brown color */
          }

          .h-12 {
          height: 190px; /* Adjust the height as needed */
         }

         .w-10 {
          width: 150px; /* Adjust the width as needed */
         }

         .text-center{
         display: block;
         margin: 
        }

        .rounded-curved {
         border-radius: 10px;
         }
          .w-11 {
            width: 180;
          }
          .ml-2{
            position: absolute;
            right: 80px;
          }

          .mt-10{
            position: absolute;
            top: -30px;
          }
          .text-xl {
        /* ตัวอย่างขนาดตัวอักษรขนาดใหญ่ */
        font-size: 1.25rem; /* 20px เมื่อเรียกใช้บนเบราว์เซอร์ที่มีฟอนต์ขนาดเริ่มต้น 16px */
        }

         .text-lg {
        /* ตัวอย่างขนาดตัวอักษรขนาดกลาง */
        font-size: 1rem; /* 16px เมื่อเรียกใช้บนเบราว์เซอร์ที่มีฟอนต์ขนาดเริ่มต้น 16px */
         }

        .text-sm {
            /* ตัวอย่างขนาดตัวอักษรขนาดเล็ก */
            font-size: 0.875rem; /* 14px เมื่อเรียกใช้บนเบราว์เซอร์ที่มีฟอนต์ขนาดเริ่มต้น 16px */
        }

          .custom-container {
        max-width: 40rem; /* 7xl = 80rem */
        margin-left: auto;
        margin-right: auto;
        padding: 1.5rem; /* p-6 = 1.5rem */
    }

    @media (min-width: 1024px) {
        .custom-container {
            padding-left: 2rem; /* lg:p-8 = 2rem */
            padding-right: 2rem; /* lg:p-8 = 2rem */
        }
    }
     </style>
       
       <!--  <-- Scripts -- -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white dark:bg-white">
            @include('layouts.navigation')

            <!-- <-- Page Heading -- -->
            @if (isset($header))
                <header class="bg-brown dark:bg-brown shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- <-- Page Content -- -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>