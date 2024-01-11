<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Drop zone input</h1>
    <div class="bg-[rgba(241,241,241,1)] p-4 lg:p-10">
        <div class="mb-4">
            <x-dashui-dropzone name="drop-zone-input" id="drop-zone-input" label="Add file" accept="image/*">Accepts .gif, .jpg, and .png</x-dashui-dropzone>
        </div>
        <x-dashui-card>
            <x-slot:heading>
                Product Images
            </x-slot:heading>
            <x-dashui-dropzone name="drop-zone-images" id="drop-zone-images" label="Add files" accept="image/*"></x-dashui-dropzone>
        </x-dashui-card>
    </div>
</div>
