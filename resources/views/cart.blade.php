<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"  />
    <title>Shopping Cart</title>
    <!-- Include any necessary stylesheets or scripts here -->
</head>
<style>
        /* Custom styles for the shopping cart */
        .relative {
            position: relative;
        }
        .z-10 {
            z-index: 5;
        }
        .brown-background {
            background-color: #8c6e53; /* Lighter brown color */
        }
        .bg-brown {
            background-color: #d2b48c; /* Light brown color value */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .text-darkbrown {
            color: #5a3a22; /* Dark brown text color */
        }
        .text-3xl {
            font-size: 30px; /* 30px */
            font-family: 'Roboto', sans-serif;
        }
        .font-bold {
            font-weight: bold;
        }
        .text-center {
            text-align: center;
        }
        .mb-8 {
            margin-bottom: 1rem; /* Adjust the margin as needed */
        }
        .bg-gray-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(140 110 83 / var(--tw-bg-opacity)); /* Lighter brown color */
         }
         .product-image {
        width: 100px; /* ปรับความกว้างของภาพเป็น 100px */
         height: auto; /* ปรับความสูงของภาพให้เป็นสัดส่วน */
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
          /* Custom styles for the shopping cart header */
        .shopping-cart-header {
        padding: 1rem; /* Add padding to the header */
        border-bottom: 1px solid #e2e8f0; /* Add bottom border */
        }

        .shopping-cart-title {
        font-size: 1.5rem; /* Increase font size for the title */
        font-weight: bold; /* Add bold font weight */
        color: #333; /* Darken the text color */
        }

        .close-button {
        margin-left: 0.5rem; /* Add margin to the close button */
        }

        .close-button svg {
        width: 1.5rem; /* Adjust close button icon size */
        height: 1.5rem; /* Adjust close button icon size */
        fill: currentColor; /* Use current text color for close button icon */
        }

        /* Style for the list item */
        li {
        display: flex; /* Makes the list items flex containers */
        padding-top: 1.5rem; /* Adjust the padding as needed */
        }

        /* Style for the text */
        .text-base {
        font-size: 1.25rem; /* Adjust the font size as needed */
        }

        /* Style for the price */
        .ml-4 {
        margin-left: 1rem; /* Adjust the margin as needed */
        }


        /* Style for the "Remove" button */
        .font-medium {
        font-weight: 500; /* Adjust the font weight as needed */
        }

        .text-indigo-600 {
        color: #4f46e5; /* Adjust the color as needed */
        }

        .hover\:text-indigo-500:hover {
        color: #4338ca; /* Adjust the hover color as needed */
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
    .h-10{
      height: 50px;
    }
    .ml-2{
            position: absolute;
            right: 80px;
          }
          .mt-10{
            position: absolute;
            top: 30px;
          }


</style>
<body>
<header class="bg-brown dark:bg-brown shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <!-- Logo or brand -->
            <div>
                <a href="http://localhost/dashboard">
                    <img src="bean.png" alt="Your Brand" class="h-10">
                </a>
            </div>
            <!-- Shopping cart icon -->
            <div>
                <a href="http://localhost/receipt">
                    <i class="fas fa-receipt  text-darkbrown dark:text-darkbrown text-xl ml-2 mt-10"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Show Item in cart apge -->
    @foreach($cartItems as $item)
        <div class="product">
            <div class="product-details">
                <h3>{{ $item->menu_name }}</h3>
                <p>{{ $item->price }}</p>
                <p>Quantity: {{ $item->quantity }}</p>
            </div>
            <form action="{{ route('cart.delete', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Remove</button>
        </form>
        </div>
    @endforeach


    
</body>
</html>
