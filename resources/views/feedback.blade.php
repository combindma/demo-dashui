<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Banner</h1>
    <div class="flex flex-col gap-y-3 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-banner title="Default banner">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </x-dash-ui-banner>

        <x-dash-ui-banner title="Success banner" tone="success">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </x-dash-ui-banner>

        <x-dash-ui-banner title="Warning banner" tone="warning">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </x-dash-ui-banner>

        <x-dash-ui-banner title="Critical banner" tone="critical">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </x-dash-ui-banner>

        <x-dash-ui-banner>
            Use your finance report to get detailed information about your business.
        </x-dash-ui-banner>

        <x-dash-ui-banner tone="success">
            Use your finance report to get detailed information about your business.
        </x-dash-ui-banner>

        <x-dash-ui-banner tone="warning">
            Use your finance report to get detailed information about your business.
        </x-dash-ui-banner>

        <x-dash-ui-banner tone="critical">
            Use your finance report to get detailed information about your business.
        </x-dash-ui-banner>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Alert</h1>
    <div class="flex flex-col gap-y-3 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-card>
            <x-slot:heading>
                Online store dashboard
            </x-slot:heading>
            <x-dash-ui-alert>Use your finance report to get detailed information about your business.</x-dash-ui-alert>
            <x-dash-ui-alert tone="success">Use your finance report to get detailed information about your business.</x-dash-ui-alert>
            <x-dash-ui-alert tone="warning">Use your finance report to get detailed information about your business.</x-dash-ui-alert>
            <x-dash-ui-alert tone="critical">Use your finance report to get detailed information about your business.</x-dash-ui-alert>
            <x-dash-ui-alert tone="warning">
                <p class="mb-1">Connect your instagram account to your shop before proceeding.</p>
                <x-dash-ui-button type="button" class="text-neutral-900">Connect account</x-dash-ui-button>
            </x-dash-ui-alert>
            <p>View a summary of your online store’s performance.</p>
        </x-dash-ui-card>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Inline error</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-inline-error message="Store name is required"/>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Flash Message</h1>
    <div class="flex flex-col gap-3 bg-[rgba(241,241,241,1)] p-10">
        <div><x-dash-ui-button type="button" aria-controls="flash-message-1">Show flash message</x-dash-ui-button></div>
        <div><x-dash-ui-button type="button" aria-controls="flash-message-2">Show flash error</x-dash-ui-button></div>
    </div>
    <x-dash-ui-flash-message message="Message sent" role="status" id="flash-message-1" data-duration="5000"/>
    <x-dash-ui-flash-message message="Server error" error="true" role="status" id="flash-message-2" data-duration="5000"/>
</div>
