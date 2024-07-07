<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 text-xs"> <!-- Mengurangi ukuran font sebesar 50% -->
    <div class="mb-4">
        <label class="block text-primary font-bold mb-2" for="name"> <!-- Menghapus text-sm karena sudah ada di elemen utama -->
            Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" value="{{ old('name', $webApp->name ?? '') }}" required>
    </div>
    <div class="mb-4">
        <label class="block text-primary font-bold mb-2" for="description"> <!-- Menghapus text-sm karena sudah ada di elemen utama -->
            Description
        </label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" rows="3" required>{{ old('description', $webApp->description ?? '') }}</textarea>
    </div>
    <div class="mb-4">
        <label class="block text-primary font-bold mb-2" for="url"> <!-- Menghapus text-sm karena sudah ada di elemen utama -->
            URL
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="url" type="url" name="url" value="{{ old('url', $webApp->url ?? '') }}" required>
    </div>
    <div class="mb-4">
        <label class="block text-primary font-bold mb-2" for="category"> <!-- Menghapus text-sm karena sudah ada di elemen utama -->
            Category
        </label>
        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="category" name="category" required>
            <option value="">Select a category</option>
            <option value="productivity" {{ (old('category', $webApp->category ?? '') == 'productivity') ? 'selected' : '' }}>Productivity</option>
            <option value="communication" {{ (old('category', $webApp->category ?? '') == 'communication') ? 'selected' : '' }}>Communication</option>
            <option value="development" {{ (old('category', $webApp->category ?? '') == 'development') ? 'selected' : '' }}>Development</option>
            <option value="other" {{ (old('category', $webApp->category ?? '') == 'other') ? 'selected' : '' }}>Other</option>
        </select>
    </div>
    <div class="flex items-center justify-between">
        <button class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300" type="submit">
            {{ $submitButtonText }}
        </button>
        <a href="{{ route('admin.web-apps.index') }}" class="text-primary hover:text-secondary">Cancel</a>
    </div>
</div>
