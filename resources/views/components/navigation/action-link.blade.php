<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Action link</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10 lg:pb-36">
        <div class="mt-5">
            <x-dashui-button type="button" aria-controls="popover-nav-1">
                In a popover
                <x-gmdi-expand-more class="w-5 h-5"/>
            </x-dashui-button>
            <x-dashui-popover id="popover-nav-1" role="dialog">
                <x-dashui-action-link as="link" href="#0" label="Action 1"/>
                <x-dashui-action-link as="link" href="#0" label="Action 2"/>
            </x-dashui-popover>

            <x-dashui-button type="button" aria-controls="popover-nav-2">
                With an icon
                <x-gmdi-expand-more class="w-5 h-5"/>
            </x-dashui-button>
            <x-dashui-popover id="popover-nav-2" role="dialog">
                <x-dashui-action-link as="link" href="#0" label="Duplicate">
                    <x-slot:icon>
                        <x-gmdi-file-copy-o class="w-5 h-5"/>
                    </x-slot:icon>
                </x-dashui-action-link>
                <x-dashui-action-link as="link" href="#0" label="Archive">
                    <x-slot:icon>
                        <x-gmdi-inventory-o class="w-5 h-5"/>
                    </x-slot:icon>
                </x-dashui-action-link>
            </x-dashui-popover>

            <x-dashui-button type="button" aria-controls="popover-nav-3">
                With an icon and a suffix
                <x-gmdi-expand-more class="w-5 h-5"/>
            </x-dashui-button>
            <x-dashui-popover id="popover-nav-3" role="dialog">
                <x-dashui-action-link as="link" href="#0" label="Import file" :active="true">
                    <x-slot:icon>
                        <x-gmdi-download-r class="w-5 h-5"/>
                    </x-slot:icon>
                    <x-slot:suffix>
                        <x-gmdi-check-r class="w-4 h-4 shrink-0"/>
                    </x-slot:suffix>
                </x-dashui-action-link>
                <x-dashui-action-link as="link" href="#0" label="Export file">
                    <x-slot:icon>
                        <x-gmdi-publish-r class="w-5 h-5"/>
                    </x-slot:icon>
                </x-dashui-action-link>
            </x-dashui-popover>

            <x-dashui-button type="button" aria-controls="popover-nav-4">
                With a destructive item
                <x-gmdi-expand-more class="w-5 h-5"/>
            </x-dashui-button>
            <x-dashui-popover id="popover-nav-4" role="dialog">
                <x-dashui-action-link as="link" href="#0" label="Import file">
                    <x-slot:icon>
                        <x-gmdi-download-r class="w-5 h-5"/>
                    </x-slot:icon>
                </x-dashui-action-link>
                <x-dashui-action-link as="link" href="#0" label="Export file">
                    <x-slot:icon>
                        <x-gmdi-publish-r class="w-5 h-5"/>
                    </x-slot:icon>
                </x-dashui-action-link>
                <x-dashui-action-link as="link" href="#0" label="Delete file" :destructive="true">
                    <x-slot:icon>
                        <x-gmdi-delete-r class="w-5 h-5"/>
                    </x-slot:icon>
                </x-dashui-action-link>
            </x-dashui-popover>

            <x-dashui-button type="button" aria-controls="popover-nav-5">
                With a help text
                <x-gmdi-expand-more class="w-5 h-5"/>
            </x-dashui-button>
            <x-dashui-popover id="popover-nav-5" role="dialog">
                <x-dashui-action-link label="Blog posts" helpText="Manage your blog articles"/>
                <x-dashui-action-link label="Blogs" helpText="Manage blogs published to your Online Store"/>
            </x-dashui-popover>
        </div>
    </div>
</div>
