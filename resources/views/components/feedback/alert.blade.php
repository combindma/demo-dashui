<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Alert</h1>
    <div class="flex flex-col gap-y-3 bg-[rgba(241,241,241,1)] p-4 lg:p-10">
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
