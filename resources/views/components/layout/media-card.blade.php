<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Media Card</h1>
    <div class="flex flex-col gap-y-4 bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-media-card id="action-id">
            <x-slot:media>
                <img alt="" class="w-full h-full object-cover object-center" src="https://burst.shopifycdn.com/photos/business-woman-smiling-in-office.jpg?width=1850">
            </x-slot:media>
            <x-slot:heading>
                Getting Started
            </x-slot:heading>
            <x-slot:actions>
                <x-dashui-button type="button" variant="subtle">Dismiss</x-dashui-button>
            </x-slot:actions>
            <p class="mb-3">Discover how Shopify can power up your entrepreneurial journey.</p>
            <x-dashui-button type="button">Learn about getting started</x-dashui-button>
        </x-dashui-media-card>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Media Card portrait</h1>
    <div class="flex flex-col gap-y-4 bg-gray-200/60 p-4 lg:p-10">
        <div class="max-w-lg mx-auto">
            <x-dashui-media-card id="media-id" portrait="true">
                <x-slot:media>
                    <img alt="" class="w-full h-full object-cover object-center" src="https://burst.shopifycdn.com/photos/business-woman-smiling-in-office.jpg?width=1850">
                </x-slot:media>
                <x-slot:heading>
                    Getting Started
                </x-slot:heading>
                <x-slot:actions>
                    <x-dashui-button type="button" variant="subtle">Dismiss</x-dashui-button>
                </x-slot:actions>
                <p class="mb-3">Discover how Shopify can power up your entrepreneurial journey.</p>
                <x-dashui-button type="button">Learn about getting started</x-dashui-button>
            </x-dashui-media-card>
        </div>
    </div>
</div>
