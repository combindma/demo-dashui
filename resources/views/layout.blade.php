<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Box</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-box>
            <div class="bg-gray-400">Content inside a box</div>
        </x-dash-ui-box>
        <x-dash-ui-box border="true">Content box with border=true</x-dash-ui-box>
        <x-dash-ui-box shadow="true">Content box with shadow=true</x-dash-ui-box>
        <x-dash-ui-box rounded="true" class="bg-white">
            <div class="p-2">Content box with rounded=true</div>
        </x-dash-ui-box>
        <x-dash-ui-box class="bg-blue-200 p-3">
            <div class="bg-blue-900 text-white">Content box with padding</div>
        </x-dash-ui-box>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Card</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-card>Basic card</x-dash-ui-card>
        <x-dash-ui-card variant="subdued">
            <x-slot:heading>
                With subdued background
            </x-slot:heading>
            Use for content that you want to deprioritize. Subdued cards don’t stand out as much as cards with white backgrounds so don’t use them for information or actions.
        </x-dash-ui-card>
        <x-dash-ui-card>
            <x-slot:heading>
                With section
            </x-slot:heading>
            <p>Use when you have a distinct piece of information to communicate to users.</p>
        </x-dash-ui-card>

        <x-dash-ui-card hasDivider="true">
            <x-slot:heading>
                With divider
            </x-slot:heading>
            <p>Use when you have a distinct piece of information to communicate to users.</p>
        </x-dash-ui-card>

        <x-dash-ui-card>
            <x-slot:heading>
                With multiple sections
            </x-slot:heading>
            <x-slot:subheading>
                Subheading section
            </x-slot:subheading>
            <p>View a summary of your online store’s performance, including sales, visitors, top products, and referrals.</p>
        </x-dash-ui-card>

        <x-dash-ui-card-stack>
            <x-dash-ui-card reset="true">
                <x-slot:heading>
                    With subdued section
                </x-slot:heading>
                <p>View a summary of your online store’s performance, including sales, visitors, top products, and referrals.</p>
            </x-dash-ui-card>
            <x-dash-ui-card variant="subdued" reset="true">
                <x-slot:heading>
                    With subdued background
                </x-slot:heading>
                Use for content that you want to deprioritize. Subdued cards don’t stand out as much as cards with white backgrounds so don’t use them for information or
                actions.
            </x-dash-ui-card>
        </x-dash-ui-card-stack>


        <x-dash-ui-card>
            <x-slot:heading>
                With header actions
            </x-slot:heading>
            <x-slot:actions>
                <x-dash-ui-button variant="plain">Add variant</x-dash-ui-button>
            </x-slot:actions>
            Add variants if this product comes in multiple versions, like different sizes or colors.
        </x-dash-ui-card>

        <x-dash-ui-card>
            <x-slot:heading>
                With footer actions
            </x-slot:heading>
            1 × Oasis Glass, 4-Pack
            <x-slot:footer>
                <x-dash-ui-button type="button">Edit shipment</x-dash-ui-button>
                <x-dash-ui-button type="button" variant="primary">Add tracking number</x-dash-ui-button>
            </x-slot:footer>
        </x-dash-ui-card>
    </div>
</div>


<div class="mb-10 bg-[#fafafa]">
    <h1 class="mb-4 text-xl font-medium">Callout card</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-callout-card>
            <x-slot:heading>
                Default callout
            </x-slot:heading>

            <div class="mb-2">
                Upload your store’s logo, change colors and fonts, and more.
            </div>
            <x-dash-ui-button type="button">Customize checkout</x-dash-ui-button>
            <x-slot:illustration>
                <img alt="" src="https://cdn.shopify.com/s/assets/admin/checkout/settings-customizecart-705f57c725ac05be5a34ec20c05b94298cb8afd10aac7bd9c7ad02030f48cfa0.svg"
                     class="w-full">
            </x-slot:illustration>
        </x-dash-ui-callout-card>

        <x-dash-ui-callout-card>
            <x-slot:heading>
                Callout with secondary action
            </x-slot:heading>

            <div class="mb-2">
                Upload your store’s logo, change colors and fonts, and more.
            </div>
            <x-dash-ui-button-group>
                <x-dash-ui-button type="button">Customize checkout</x-dash-ui-button>
                <x-dash-ui-button type="button" variant="subtle">Learn more about customizing checkout</x-dash-ui-button>
            </x-dash-ui-button-group>
            <x-slot:illustration>
                <img alt="" src="https://cdn.shopify.com/s/assets/admin/checkout/settings-customizecart-705f57c725ac05be5a34ec20c05b94298cb8afd10aac7bd9c7ad02030f48cfa0.svg"
                     class="w-full">
            </x-slot:illustration>
        </x-dash-ui-callout-card>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Divider</h1>
    <div class="flex flex-col gap-y-4 shadow-md p-10">
        <x-dash-ui-divider/>
        <x-dash-ui-divider class="border-neutral-900"/>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Empty state</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-empty-state>
            <x-slot:illustration>
                <img alt="" src="https://cdn.shopify.com/s/files/1/0262/4071/2726/files/emptystate-files.png" class="w-full">
            </x-slot:illustration>
            <x-slot:heading>
                Manage your inventory transfers
            </x-slot:heading>
            <p class="mb-4">
                You can use the Files section to upload images, videos, and other documents. This example shows the content with a centered layout and full width.
            </p>

            <x-dash-ui-button-group>
                <x-dash-ui-button type="button">Learn more</x-dash-ui-button>
                <x-dash-ui-button type="button" variant="primary">Update inventory</x-dash-ui-button>
            </x-dash-ui-button-group>
        </x-dash-ui-empty-state>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Media Card</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-media-card id="action-id">
            <x-slot:media>
                <img alt="" class="w-full h-full object-cover object-center" src="https://burst.shopifycdn.com/photos/business-woman-smiling-in-office.jpg?width=1850">
            </x-slot:media>
            <x-slot:heading>
                Getting Started
            </x-slot:heading>
            <x-slot:actions>
                <x-dash-ui-button type="button" variant="subtle">Dismiss</x-dash-ui-button>
            </x-slot:actions>
            <p class="mb-3">Discover how Shopify can power up your entrepreneurial journey.</p>
            <x-dash-ui-button type="button">Learn about getting started</x-dash-ui-button>
        </x-dash-ui-media-card>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Media Card portrait</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <div class="max-w-lg mx-auto">
            <x-dash-ui-media-card id="media-id" portrait="true">
                <x-slot:media>
                    <img alt="" class="w-full h-full object-cover object-center" src="https://burst.shopifycdn.com/photos/business-woman-smiling-in-office.jpg?width=1850">
                </x-slot:media>
                <x-slot:heading>
                    Getting Started
                </x-slot:heading>
                <x-slot:actions>
                    <x-dash-ui-button type="button" variant="subtle">Dismiss</x-dash-ui-button>
                </x-slot:actions>
                <p class="mb-3">Discover how Shopify can power up your entrepreneurial journey.</p>
                <x-dash-ui-button type="button">Learn about getting started</x-dash-ui-button>
            </x-dash-ui-media-card>
        </div>
    </div>
</div>

@include('layout-header')
