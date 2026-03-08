<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login</title>
</head>
<body>
    
    <div class="min-h-screen flex items-center justify-center bg-gray-100 p-6">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
            
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Bienvenue</h2>
                <p class="text-gray-500 mt-2">Connectez-vous à votre compte</p>
            </div>

            <form action="{{ route('login.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Adresse Email</label>
                    <input type="email" name="email" id="email" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition duration-200"
                        placeholder="nom@exemple.com">
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Mot de passe</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition duration-200"
                        placeholder="••••••••">
                </div>

                <div class="flex flex-col gap-3 pt-4">
                    <button type="submit" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition duration-300 shadow-md">
                        Se Connecter
                    </button>

                    <a href="{{ route('signup.show') }}" 
                        class="w-full text-center bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 font-semibold py-3 rounded-lg transition duration-300">
                        Créer un compte
                    </a>
                </div>
            </form>

            @error('email')
                <p class="mt-8 text-center text-md text-red-400 font-semibold">
                    {{$message}}
                </p>
            @enderror
            


        </div>
    </div>

</body>
</html>