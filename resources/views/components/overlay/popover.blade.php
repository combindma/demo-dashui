<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Popover</h1>
    <div class="flex flex-col gap-y-3 bg-[rgba(241,241,241,1)] p-4 lg:p-10">
        <div class="pb-[50px]">
            <x-dashui-button type="button" aria-controls="popover">
                Toggle popover
                <x-gmdi-expand-more class="w-5 h-5"/>
            </x-dashui-button>
            <x-dashui-popover id="popover" role="dialog">
                <x-dashui-action-link as="link" href="#0" label="Action 1"/>
                <x-dashui-action-link as="link" href="#0" label="Action 2"/>
            </x-dashui-popover>
        </div>
    </div>
</div>
