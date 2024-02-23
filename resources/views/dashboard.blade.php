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
                    <div class="flex items-center justify-end mb-4">
                        <a href="/student/create" class="block px-12 py-3 bg-purple-500 rounded text-white">
                            Ajouter etudiant
                        </a>
                    </div>
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">Identifiant</th>
                                        <th class="px-4 py-3">Nom Etudiant</th>
                                        <th class="px-4 py-3">Prenom Etudiant</th>
                                        <th class="px-4 py-3">Cin</th>
                                        <th class="px-4 py-3">Cin Date</th>
                                        <th class="px-4 py-3">Date de naissance</th>
                                        <th class="px-4 py-3">Date d'attestation</th>
                                        <th class="px-4 py-3">Duration</th>
                                        <th class="px-4 py-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    @foreach ($students as $student)
                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                {{ $student->identifier }}
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ $student->name }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $student->surname }}
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                {{ $student->cin }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $student->cin_date }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $student->birth_date }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $student->certif_date }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $student->duration }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                <form action="/student/{{ $student->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="block p-4 bg-red-300 rounded">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                          </svg>
                                                          
                                                    </button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
