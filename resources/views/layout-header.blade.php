<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Default page header</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dashui-page-header title="General">
            <x-dashui-button type="button" variant="default">Save</x-dashui-button>
        </x-dashui-page-header>

        <p>Page content</p>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Page header with subtitle</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dashui-page-header title="3/4 inch Leather pet collar" subtitle="Perfect for any pet">
            <x-dashui-button-group>
                <x-dashui-button type="button" variant="secondary">Duplicate</x-dashui-button>
                <x-dashui-button type="button" variant="primary" disabled="true">Save</x-dashui-button>
            </x-dashui-button-group>
        </x-dashui-page-header>

        <p>Page content</p>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Page header with back action</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dashui-page-header title="General" backAction="#0">
            <x-dashui-button-group>
                <x-dashui-button type="button" variant="primary">Save</x-dashui-button>
            </x-dashui-button-group>
        </x-dashui-page-header>

        <p>Page content</p>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Page header with content after title</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dashui-page-header title="3/4 inch Leather pet collar" subtitle="Perfect for any pet">
            <x-slot:titleMetadata>
                <x-dashui-badge tone="success">Paid</x-dashui-badge>
            </x-slot:titleMetadata>
            <x-dashui-button-group>
                <x-dashui-button type="button" variant="secondary">Duplicate</x-dashui-button>
                <x-dashui-button type="button" variant="primary" disabled="true">Save</x-dashui-button>
            </x-dashui-button-group>
        </x-dashui-page-header>

        <p>Page content</p>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Page header with all elements</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dashui-page-header title="3/4 inch Leather pet collar" subtitle="Perfect for any pet" backAction="#0">
            <x-slot:titleMetadata>
                <x-dashui-badge progress="partiallyComplete" tone="warning">Shipped</x-dashui-badge>
            </x-slot:titleMetadata>
            <div class="flex flew-wrap items-center gap-2">
                <x-dashui-button type="button" variant="secondary">Duplicate</x-dashui-button>
                <x-dashui-button type="button" aria-controls="popover-actions" variant="secondary">
                    Promote <x-gmdi-expand-more class="w-4 h-4"/>
                </x-dashui-button>
                <x-dashui-button type="button" variant="primary" disabled="true">Save</x-dashui-button>

                <x-dashui-button-group variant="segmented">
                    <x-dashui-button as="link" href="#0" variant="secondary" disabled="true" class="p-1.5 rounded-r-none">
                        <x-gmdi-chevron-left class="w-4 h-4"/>
                    </x-dashui-button>
                    <x-dashui-button as="link" href="#0" variant="secondary" class="p-1.5 rounded-l-none">
                        <x-gmdi-chevron-right class="w-4 h-4"/>
                    </x-dashui-button>
                </x-dashui-button-group>
            </div>
            <x-dashui-popover id="popover-actions" role="dialog">
                <x-dashui-button type="button" variant="subtle">Share on Facebook</x-dashui-button>
                <x-dashui-button type="button" variant="subtle">View on your store</x-dashui-button>
            </x-dashui-popover>
        </x-dashui-page-header>

        <p>Page content</p>
    </div>
</div>
