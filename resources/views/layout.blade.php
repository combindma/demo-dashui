<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Box</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dashui-box>
            <div class="bg-gray-400">Content inside a box</div>
        </x-dashui-box>
        <x-dashui-box border="true">Content box with border=true</x-dashui-box>
        <x-dashui-box shadow="true">Content box with shadow=true</x-dashui-box>
        <x-dashui-box rounded="true" class="bg-white">
            <div class="p-2">Content box with rounded=true</div>
        </x-dashui-box>
        <x-dashui-box class="bg-blue-200 p-3">
            <div class="bg-blue-900 text-white">Content box with padding</div>
        </x-dashui-box>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Card</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dashui-card>Basic card</x-dashui-card>
        <x-dashui-card variant="subdued">
            <x-slot:heading>
                With subdued background
            </x-slot:heading>
            Use for content that you want to deprioritize. Subdued cards don’t stand out as much as cards with white backgrounds so don’t use them for information or actions.
        </x-dashui-card>
        <x-dashui-card>
            <x-slot:heading>
                With section
            </x-slot:heading>
            <p>Use when you have a distinct piece of information to communicate to users.</p>
        </x-dashui-card>

        <x-dashui-card hasDivider="true">
            <x-slot:heading>
                With divider
            </x-slot:heading>
            <p>Use when you have a distinct piece of information to communicate to users.</p>
        </x-dashui-card>

        <x-dashui-card>
            <x-slot:heading>
                With multiple sections
            </x-slot:heading>
            <x-slot:subheading>
                Subheading section
            </x-slot:subheading>
            <p>View a summary of your online store’s performance, including sales, visitors, top products, and referrals.</p>
        </x-dashui-card>

        <x-dashui-card-stack>
            <x-dashui-card reset="true">
                <x-slot:heading>
                    With subdued section
                </x-slot:heading>
                <p>View a summary of your online store’s performance, including sales, visitors, top products, and referrals.</p>
            </x-dashui-card>
            <x-dashui-card variant="subdued" reset="true">
                <x-slot:heading>
                    With subdued background
                </x-slot:heading>
                Use for content that you want to deprioritize. Subdued cards don’t stand out as much as cards with white backgrounds so don’t use them for information or
                actions.
            </x-dashui-card>
        </x-dashui-card-stack>


        <x-dashui-card>
            <x-slot:heading>
                With header actions
            </x-slot:heading>
            <x-slot:actions>
                <x-dashui-button variant="plain">Add variant</x-dashui-button>
            </x-slot:actions>
            Add variants if this product comes in multiple versions, like different sizes or colors.
        </x-dashui-card>

        <x-dashui-card>
            <x-slot:heading>
                With footer actions
            </x-slot:heading>
            1 × Oasis Glass, 4-Pack
            <x-slot:footer>
                <x-dashui-button type="button">Edit shipment</x-dashui-button>
                <x-dashui-button type="button" variant="primary">Add tracking number</x-dashui-button>
            </x-slot:footer>
        </x-dashui-card>
    </div>
</div>


<div class="mb-10 bg-[#fafafa]">
    <h1 class="mb-4 text-xl font-medium">Callout card</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
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


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Divider</h1>
    <div class="flex flex-col gap-y-4 shadow-md p-10">
        <x-dashui-divider/>
        <x-dashui-divider class="border-neutral-900"/>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Empty state</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
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


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Media Card</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
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
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
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

@include('layout-header')
