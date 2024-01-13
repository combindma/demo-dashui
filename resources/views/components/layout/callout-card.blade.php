<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Callout card</h1>
    <div class="flex flex-col gap-y-4 bg-gray-200/60 p-4 lg:p-4 lg:p-10">
        <x-dashui-callout-card>
            <x-slot:heading>
                Default callout
            </x-slot:heading>

            <div class="mb-2">
                Upload your store’s logo, change colors and fonts, and more.
            </div>
            <x-dashui-button type="button">Customize checkout</x-dashui-button>
            <x-slot:illustration>
                <img alt="" src="https://cdn.shopify.com/s/assets/admin/checkout/settings-customizecart-705f57c725ac05be5a34ec20c05b94298cb8afd10aac7bd9c7ad02030f48cfa0.svg"
                     class="w-full">
            </x-slot:illustration>
        </x-dashui-callout-card>

        <x-dashui-callout-card>
            <x-slot:heading>
                Callout with secondary action
            </x-slot:heading>

            <div class="mb-2">
                Upload your store’s logo, change colors and fonts, and more.
            </div>
            <x-dashui-button-group>
                <x-dashui-button type="button">Customize checkout</x-dashui-button>
                <x-dashui-button type="button" variant="subtle">Learn more about customizing checkout</x-dashui-button>
            </x-dashui-button-group>
            <x-slot:illustration>
                <img alt="" src="https://cdn.shopify.com/s/assets/admin/checkout/settings-customizecart-705f57c725ac05be5a34ec20c05b94298cb8afd10aac7bd9c7ad02030f48cfa0.svg"
                     class="w-full">
            </x-slot:illustration>
        </x-dashui-callout-card>
    </div>
</div>
