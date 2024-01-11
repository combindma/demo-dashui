<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Empty state</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-4 lg:p-10">
        <x-dashui-empty-state>
            <x-slot:illustration>
                <img alt="" src="https://cdn.shopify.com/s/files/1/0262/4071/2726/files/emptystate-files.png" class="w-full">
            </x-slot:illustration>
            <x-slot:heading>
                Manage your inventory transfers
            </x-slot:heading>
            <p class="mb-4">
                You can use the Files section to upload images, videos, and other documents. This example shows the content with a centered layout and full width.
            </p>

            <x-dashui-button-group>
                <x-dashui-button type="button">Learn more</x-dashui-button>
                <x-dashui-button type="button" variant="primary">Update inventory</x-dashui-button>
            </x-dashui-button-group>
        </x-dashui-empty-state>
    </div>
</div>
