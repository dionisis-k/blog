@props(['name'])

    @error($name)
        <p class="text-red-500 text-ms mt-2">{{ $message }}</p>
    @enderror