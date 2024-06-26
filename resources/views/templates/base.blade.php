<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/htmx.org@1.9.12/dist/htmx.min.js"></script>
    <style>
        .active-link {
            background-color: #1c4e80; /* Darker blue for active link */
        }
    </style>
</head>
<body class="flex bg-gray-100">
    <div class="w-64 h-screen bg-gray-800 text-white flex flex-col fixed">
        <div class="p-5 text-center font-bold text-xl border-b border-gray-700">Product Management</div>
        <nav id="main-nav" class="flex flex-col mt-4">
            <a href="/" class="p-3 hover:bg-gray-700 {{ request()->is('/') ? 'active-link' : '' }}">Home</a>
            <a href="/about" class="p-3 hover:bg-gray-700 {{ request()->is('about') ? 'active-link' : '' }}">About</a>
            <a href="/product" class="p-3 hover:bg-gray-700 {{ request()->is('product') ? 'active-link' : '' }}">Products</a>
            <a href="/contact" class="p-3 hover:bg-gray-700 {{ request()->is('contact') ? 'active-link' : '' }}">Contact Us</a>
        </nav>
    </div>

    <div class="flex-1 ml-64 p-5">
        <article id="content" class="min-h-[35rem] p-6 bg-white rounded-lg shadow-md">
            @yield('content')
        </article>
    </div>
</body>
</html>
