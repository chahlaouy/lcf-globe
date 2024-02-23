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
                    <form action="/student" method="post">
                        @csrf
                        <div class="flex items-center justify-end mb-4">
                            <button type="submit" class="block px-12 py-3 bg-purple-500 rounded text-white">
                                Ajouter etudiant
                            </button>
                        </div>
                        <label class="block text-sm mb-4">
                            <span class="text-gray-700 dark:text-gray-400">Identifiant</span>
                            <input name="identifier" type="number"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="">
                        </label>
                        <label class="block text-sm mb-4">
                            <span class="text-gray-700 dark:text-gray-400">Nom</span>
                            <input name="name"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="">
                        </label>
                        <label class="block text-sm mb-4">
                            <span class="text-gray-700 dark:text-gray-400">Prenom</span>
                            <input name="surname"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="">
                        </label>
                        <label class="block text-sm mb-4">
                            <span class="text-gray-700 dark:text-gray-400">Cin</span>
                            <input name="cin"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="">
                        </label>
                        <label class="block text-sm mb-4">
                            <span class="text-gray-700 dark:text-gray-400">Date naissance</span>
                            <input name="birth_date" type="date"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder=" mb-4">
                        </label>
                        <label class="block text-sm mb-4">
                            <span class="text-gray-700 dark:text-gray-400">Date cin</span>
                            <input name="cin_date" type="date"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="">
                        </label>
                        <label class="block text-sm mb-4">
                            <span class="text-gray-700 dark:text-gray-400">Date de certificat</span>
                            <input name="certif_date" type="date"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="">
                        </label>
                        <label class="block text-sm mb-4">
                            <span class="text-gray-700 dark:text-gray-400">Duree</span>
                            <input name="duration"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="">
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
