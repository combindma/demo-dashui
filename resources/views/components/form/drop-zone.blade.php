<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Drop zone input</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <div class="mb-4">
            <x-dashui-dropzone name="drop-zone-input" id="drop-zone-input" label="Add file" helpText="Accepts .gif, .jpg, and .png" accept="image/*"/>
        </div>
        <x-dashui-card>
            <x-slot:heading>
                Product Images
            </x-slot:heading>
            <x-dashui-dropzone name="drop-zone-images" id="drop-zone-images" label="Add files" accept="image/*"/>
        </x-dashui-card>
    </div>
</div>
