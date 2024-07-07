@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 text-xs"> <!-- Mengurangi ukuran font sebesar 50% -->
            <h1 class="text-lg font-semibold mb-4">Web Apps</h1> <!-- Ukuran font dikurangi 50% dari sebelumnya -->

            @if($webApps->isNotEmpty())
                <div class="space-y-4">
                    @foreach($webApps as $app)
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
                                    <span class="text-lg font-bold text-gray-500">{{ strtoupper(substr($app->name, 0, 1)) }}</span> <!-- Ukuran font dikurangi 50% dari sebelumnya -->
                                </div>
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-base font-semibold">{{ $app->name }}</h2> <!-- Ukuran font dikurangi 50% dari sebelumnya -->
                                <p class="text-xs text-gray-600">{{ Str::limit($app->description, 50) }}</p> <!-- Ukuran font dikurangi 50% dari sebelumnya -->
                            </div>
                            <div>
                                <a href="{{ $app->url }}" class="text-blue-500 text-xs" target="_blank">
                                    <span class="material-symbols-outlined">arrow_forward</span>
                                </a> <!-- Ukuran font dikurangi 50% dari sebelumnya -->
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-600 text-xs">No web apps available at the moment.</p> <!-- Ukuran font dikurangi 50% dari sebelumnya -->
            @endif
        </div>
    </div>
@endsection
