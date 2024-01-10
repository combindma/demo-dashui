<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Banner</h1>
    <div class="flex flex-col gap-y-3 bg-[rgba(241,241,241,1)] p-10">
        <x-dashui-banner title="Default banner">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </x-dashui-banner>

        <x-dashui-banner title="Success banner" tone="success">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </x-dashui-banner>

        <x-dashui-banner title="Warning banner" tone="warning">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </x-dashui-banner>

        <x-dashui-banner title="Critical banner" tone="critical">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </x-dashui-banner>

        <x-dashui-banner>
            Use your finance report to get detailed information about your business.
        </x-dashui-banner>

        <x-dashui-banner tone="success">
            Use your finance report to get detailed information about your business.
        </x-dashui-banner>

        <x-dashui-banner tone="warning">
            Use your finance report to get detailed information about your business.
        </x-dashui-banner>

        <x-dashui-banner tone="critical">
            Use your finance report to get detailed information about your business.
        </x-dashui-banner>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Alert</h1>
    <div class="flex flex-col gap-y-3 bg-[rgba(241,241,241,1)] p-10">
        <x-dashui-card>
            <x-slot:heading>
                Online store dashboard
            </x-slot:heading>
            <x-dashui-alert>Use your finance report to get detailed information about your business.</x-dashui-alert>
            <x-dashui-alert tone="success">Use your finance report to get detailed information about your business.</x-dashui-alert>
            <x-dashui-alert tone="warning">Use your finance report to get detailed information about your business.</x-dashui-alert>
            <x-dashui-alert tone="critical">Use your finance report to get detailed information about your business.</x-dashui-alert>
            <x-dashui-alert tone="warning">
                <p class="mb-1">Connect your instagram account to your shop before proceeding.</p>
                <x-dashui-button type="button" class="text-neutral-900">Connect account</x-dashui-button>
            </x-dashui-alert>
            <p>View a summary of your online store’s performance.</p>
        </x-dashui-card>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Inline error</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
        <x-dashui-inline-error message="Store name is required"/>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Flash Message</h1>
    <div class="flex flex-col gap-3 bg-[rgba(241,241,241,1)] p-10">
        <div><x-dashui-button type="button" aria-controls="flash-message-1">Show flash message</x-dashui-button></div>
        <div><x-dashui-button type="button" aria-controls="flash-message-2">Show flash error</x-dashui-button></div>
    </div>
    <x-dashui-flash-message message="Message sent" id="flash-message-1"/>
    <x-dashui-flash-message message="Server error" :error="true" :show="false" id="flash-message-2" data-duration="5000"/>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Circle loader</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
        <x-dashui-circle-loader/>
    </div>
</div>
