@extends('layouts.app')

@section('content')
<div class="bg-white shadow">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 text-xs"> <!-- Mengurangi ukuran font sebesar 50% -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-xl font-bold text-primary">Manage Web Apps</h1> <!-- Ukuran font dikurangi 50% dari sebelumnya -->
                <a href="{{ route('admin.web-apps.create') }}" class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded transition duration-300">
                    Add New Web App
                </a>
            </div>

            <div class="bg-secondary bg-opacity-20 rounded-lg overflow-hidden">
                <div class="overflow-x-auto"> <!-- Menambahkan elemen pembungkus untuk membuat tabel menjadi responsif -->
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-secondary text-primary uppercase text-xs leading-normal"> <!-- Ukuran font dikurangi 50% dari sebelumnya -->
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Category</th>
                                <th class="py-3 px-6 text-left">URL</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($webApps as $webApp)
                                <tr class="border-b border-secondary border-opacity-50 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="font-medium text-primary">{{ $webApp->name }}</div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <span class="bg-secondary bg-opacity-50 text-primary py-1 px-3 rounded-full text-xs">
                                            {{ ucfirst($webApp->category) }}
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <a href="{{ $webApp->url }}" target="_blank" class="text-blue-600 hover:text-blue-800">
                                            {{ Str::limit($webApp->url, 30) }}
                                        </a>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <a href="{{ route('admin.web-apps.edit', $webApp) }}" class="text-primary hover:text-secondary mr-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                            <form action="{{ route('admin.web-apps.destroy', $webApp) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure you want to delete this app?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- Penutup div overflow-x-auto -->
            </div>
        </div>
    </div>
</div>
@endsection
