<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-4">
                        👋 Bem-vindo, {{ Auth::user()->name }}!
                    </h3>
                    <p class="mb-4 text-gray-600 dark:text-gray-400">
                        Redirecionando para o sistema de produtos...
                    </p>
                    <div class="text-center">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Carregando...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Auto-redireciona para o CRUD -->
    <script>
        setTimeout(function() {
            window.location.href = 'http://localhost/php-crud/index.php?auth_token={{ $auth_token }}';
        }, 1000); // Aguarda 1 segundo
    </script>
</x-app-layout>
