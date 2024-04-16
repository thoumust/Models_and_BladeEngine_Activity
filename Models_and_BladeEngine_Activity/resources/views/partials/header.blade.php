<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link type="stylesheet"  href="resources/css/app.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books Lang</title>
</head>
<body class="bg-slate-800">
<!-- component -->
<nav class="bg-gray-200 shadow shadow-gray-300 w-100 px-8 md:px-auto">
    <div class="md:h-16 h-28 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
        <div class="text-gray-500 order-3 w-full md:w-auto md:order-2">
            <ul class="flex font-semibold justify-between">
                <!-- Active Link = text-indigo-500
                Inactive Link = hover:text-indigo-500 -->
                <li class="md:px-4 md:py-2 text-indigo-500"><a href="#">di</a></li>
                <li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#">napipindot</a></li>
                <li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#">wala</a></li>
                <li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#">to</a></li>
                <li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#">pupuntahan</a></li>
            </ul>
        </div>
        <div class="order-2 md:order-3">
            <button class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-gray-50 rounded-xl flex items-center gap-2">
                <!-- Heroicons - Login Solid -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span>wag pindutin</span>
            </button>
        </div>
    </div>
</nav>