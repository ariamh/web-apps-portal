@extends('layouts.app')

@section('content')
<div class="bg-white shadow">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 text-xs"> <!-- Mengurangi ukuran font sebesar 50% -->
            <h1 class="text-xl font-bold mb-4 text-primary">Dashboard</h1> <!-- Ukuran font dikurangi 50% dari sebelumnya -->

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-secondary p-4 rounded-lg">
                    <h2 class="text-sm font-semibold mb-2 text-primary">Total Web Apps</h2> <!-- Ukuran font dikurangi 50% dari sebelumnya -->
                    <p class="text-xl font-bold text-primary">{{ App\Models\WebApp::count() }}</p> <!-- Ukuran font dikurangi 50% dari sebelumnya -->
                </div>

                <div class="bg-secondary p-4 rounded-lg">
                    <h2 class="text-sm font-semibold mb-2 text-primary">Most Popular Category</h2> <!-- Ukuran font dikurangi 50% dari sebelumnya -->
                    <p class="text-xl font-bold text-primary">
                        {{ App\Models\WebApp::groupBy('category')->selectRaw('count(*) as count, category')->orderBy('count', 'desc')->first()->category ?? 'N/A' }}
                    </p> <!-- Ukuran font dikurangi 50% dari sebelumnya -->
                </div>

                <div class="bg-white border border-secondary p-4 rounded-lg col-span-1 md:col-span-2">
                    <h2 class="text-sm font-semibold mb-2 text-primary">Recently Added Apps</h2> <!-- Ukuran font dikurangi 50% dari sebelumnya -->
                    <ul class="divide-y divide-secondary text-xs"> <!-- Menambahkan class text-xs untuk mengurangi ukuran font -->
                        @foreach(App\Models\WebApp::latest()->take(5)->get() as $app)
                            <li class="py-2">{{ $app->name }} - <span class="text-xs text-gray-500">{{ $app->created_at->diffForHumans() }}</span></li> <!-- Menambahkan class text-xs untuk mengurangi ukuran font -->
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
