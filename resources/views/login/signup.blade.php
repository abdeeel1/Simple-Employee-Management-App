<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Sign Up</title>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 p-6">
    <div class="w-full max-w-lg bg-white rounded-xl shadow-lg p-8">
        
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Créer un Compte</h2>
            <p class="text-gray-500 mt-2">Rejoignez l'équipe ColiFlow</p>
        </div>

        

        <form action="{{ route('signup.store') }}" method="POST" class="grid grid-cols-1 gap-4">
            @csrf

            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Nom Complet</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 outline-none transition"
                    placeholder="Ex: Ahmed Bennani">
                @error('name')
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Adresse Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 outline-none transition"
                    placeholder="email@exemple.com">
                @error('email')
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">Mot de passe</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 outline-none transition"
                        placeholder="••••••••">
                    @error('password')
                    <p class="text-danger my-2">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-1">Confirmer</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 outline-none transition"
                        placeholder="••••••••">
                    @error('password')
                    <p class="text-danger my-2">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-6 flex flex-col gap-3">
                <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition shadow-md">
                    S'inscrire Maintenant
                </button>

                <p class="text-center text-sm text-gray-600">
                    Déjà inscrit ? 
                    <a href="{{ route('login.show') }}" class="text-blue-600 font-bold hover:underline">Connectez-vous</a>
                </p>
            </div>
        </form>

        <div class="mt-8 pt-6 border-t border-gray-100 text-center">
            <span class="text-gray-400 text-xs tracking-widest uppercase">PFE 2026 - ISTA Arts Graphiques</span>
        </div>
    </div>
</div>
</body>
</html>