@extends('layouts.app')

@section('content')
    <div class="text-xs"> <!-- Mengurangi ukuran font sebesar 50% -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-xl font-bold mb-6 text-primary">Edit Web App</h1> <!-- Ukuran font dikurangi 50% dari sebelumnya -->

                <form action="{{ route('admin.web-apps.update', $webApp->id) }}" method="POST"> <!-- Mengubah rute ke update -->
                    @csrf
                    @method('PUT') <!-- Menambahkan metode PUT untuk update -->
                    @include('admin.web-apps._form', ['submitButtonText' => 'Update Web App'])
                </form>
            </div>
        </div>
    </div>
@endsection
