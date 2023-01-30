<div class="p-6">
    <form wire:submit.prevent="save" class="flex flex-col w-[400px] mx-auto py-16">
        @if ($image)
            Preview:
            <div class="flex flex-wrap justify-center gap-6">
                @foreach($image as $im)
                    <img src="{{ $im->temporaryUrl() }}" class="w-[110x] h-[90px] object-cover">
                @endforeach
            </div>
        @endif

        <input type="file" wire:model="image" class="mb-4" multiple>

        @error('image') <span class="error">{{ $message }}</span> @enderror

        <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">Save Photo</button>
    </form>
<div class="row">
    <div class="flex flex-wrap gap-7 col-4">

        @foreach($images  as $image)
            <div class="m-2">
            <img src="{{$image}}" class="w-[128x] h-[120px] object-cover" style="width: 50%">
            </div>
        @endforeach
    </div>
</div>

</div>
