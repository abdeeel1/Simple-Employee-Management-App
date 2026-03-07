<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full flex flex-col bg-secondary bg-opacity-10">
    

    <div class="flex-1">
        <div class="grid grid-cols-1 md:grid-cols-12 grow gap-4 h-full">
            <div class="col-span-3 me-5">
                <div class="bg-black text-white px-4 h-screen">
                    <h2 class="font-bold p-4">RH-MANAGER</h2>
                    <div class="my-10">
                        <ul class="flex flex-col gap-10">
                            <li class="{{ request()->routeIs('employees.index') ? "bg-success p-3 rounded" : ""}}  "><a class="text-decoration-none text-white font-bold" href="{{ route('employees.index')}}">Liste des personnel</a></li>
                            <li class="{{ request()->routeIs('employees.create') ? "bg-success p-3 rounded" : ""}}  "><a class="text-decoration-none text-white font-bold" href="{{ route('employees.create') }}">Nouvel employé</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-span-9 mt-4 mb-4 px-10">
                <div class="h-full">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>