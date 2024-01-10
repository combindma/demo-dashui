<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Default page header</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-page-header title="General">
            <x-dash-ui-button type="button" variant="default">Save</x-dash-ui-button>
        </x-dash-ui-page-header>

        <p>Page content</p>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Page header with subtitle</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-page-header title="3/4 inch Leather pet collar" subtitle="Perfect for any pet">
            <x-dash-ui-button-group>
                <x-dash-ui-button type="button" variant="secondary">Duplicate</x-dash-ui-button>
                <x-dash-ui-button type="button" variant="primary" disabled="true">Save</x-dash-ui-button>
            </x-dash-ui-button-group>
        </x-dash-ui-page-header>

        <p>Page content</p>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Page header with back action</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-page-header title="General" backAction="#0">
            <x-dash-ui-button-group>
                <x-dash-ui-button type="button" variant="primary">Save</x-dash-ui-button>
            </x-dash-ui-button-group>
        </x-dash-ui-page-header>

        <p>Page content</p>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Page header with content after title</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-page-header title="3/4 inch Leather pet collar" subtitle="Perfect for any pet">
            <x-slot:titleMetadata>
                <x-dash-ui-badge tone="success">Paid</x-dash-ui-badge>
            </x-slot:titleMetadata>
            <x-dash-ui-button-group>
                <x-dash-ui-button type="button" variant="secondary">Duplicate</x-dash-ui-button>
                <x-dash-ui-button type="button" variant="primary" disabled="true">Save</x-dash-ui-button>
            </x-dash-ui-button-group>
        </x-dash-ui-page-header>

        <p>Page content</p>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Page header with all elements</h1>
    <div class="flex flex-col gap-y-4 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-page-header title="3/4 inch Leather pet collar" subtitle="Perfect for any pet" backAction="#0">
            <x-slot:titleMetadata>
                <x-dash-ui-badge progress="partiallyComplete" tone="warning">Shipped</x-dash-ui-badge>
            </x-slot:titleMetadata>
            <div class="flex flew-wrap items-center gap-2">
                <x-dash-ui-button type="button" variant="secondary">Duplicate</x-dash-ui-button>
                <x-dash-ui-button type="button" aria-controls="popover-actions" variant="secondary">
                    Promote <x-gmdi-expand-more class="w-4 h-4"/>
                </x-dash-ui-button>
                <x-dash-ui-button type="button" variant="primary" disabled="true">Save</x-dash-ui-button>

                <x-dash-ui-button-group variant="segmented">
                    <x-dash-ui-button as="link" href="#0" variant="secondary" disabled="true" class="p-1.5 rounded-r-none">
                        <x-gmdi-chevron-left class="w-4 h-4"/>
                    </x-dash-ui-button>
                    <x-dash-ui-button as="link" href="#0" variant="secondary" class="p-1.5 rounded-l-none">
                        <x-gmdi-chevron-right class="w-4 h-4"/>
                    </x-dash-ui-button>
                </x-dash-ui-button-group>
            </div>
            <x-dash-ui-popover id="popover-actions" role="dialog">
                <x-dash-ui-button type="button" variant="subtle">Share on Facebook</x-dash-ui-button>
                <x-dash-ui-button type="button" variant="subtle">View on your store</x-dash-ui-button>
            </x-dash-ui-popover>
        </x-dash-ui-page-header>

        <p>Page content</p>
    </div>
</div>
