<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Badge</h1>
    <div class="bg-[rgba(241,241,241,1)] p-4 lg:p-4 lg:p-10">
        <x-dashui-card>
            <div class="flex flex-wrap items-center gap-3">
                <x-dashui-badge>Default</x-dashui-badge>
                <x-dashui-badge tone="info">Informational</x-dashui-badge>
                <x-dashui-badge tone="success">Success</x-dashui-badge>
                <x-dashui-badge tone="attention">Attention</x-dashui-badge>
                <x-dashui-badge tone="warning">Warning</x-dashui-badge>
                <x-dashui-badge tone="critical">Critical</x-dashui-badge>
                <x-dashui-badge progress="incomplete" tone="attention">Incomplete</x-dashui-badge>
                <x-dashui-badge progress="partiallyComplete" tone="warning">Partially complete</x-dashui-badge>
                <x-dashui-badge progress="complete">Complete</x-dashui-badge>
                <x-dashui-badge progress="complete" tone="success">Published</x-dashui-badge>
            </div>
        </x-dashui-card>
    </div>
</div>
