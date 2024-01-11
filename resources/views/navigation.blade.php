<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Navigation</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
        <div class="mt-5">
            <p class="font-semibold mb-3">Action link</p>
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
        <div class="mt-5">
            <p class="font-semibold mb-3">Pagination</p>
            <div class="bg-white">
                <x-dashui-pagination label="1-50 of 8,450 orders" previous="#0" next="#0"/>
            </div>
        </div>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Tabs</h1>
    <div class="flex flex-col gap-y-5 bg-[rgba(241,241,241,1)] p-10">
        <x-dashui-tabs :tabs="[
        ['label' => 'All', 'panelId' => 'panel-id-1', 'selected' => true],
        ['label' => 'Tab 2', 'panelId' => 'panel-id-2'],
        ['label' => 'Tab 3', 'panelId' => 'panel-id-3'],
        ['label' => 'Tab 4', 'panelId' => 'panel-id-4'],
        ]">
            <x-dashui-tab-panel panelId="panel-id-1">
                <p class="font-semibold text-sm">Tab All</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur culpa ea eaque fuga, illo, magnam modi nesciunt nostrum obcaecati odit reprehenderit sapiente? Autem eaque excepturi ipsa, itaque laborum magni voluptate?</p>
            </x-dashui-tab-panel>
            <x-dashui-tab-panel panelId="panel-id-2">
                <p class="font-semibold text-sm">Tab 2</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur culpa ea eaque fuga, illo, magnam modi nesciunt nostrum obcaecati odit reprehenderit sapiente? Autem eaque excepturi ipsa, itaque laborum magni voluptate?</p>
            </x-dashui-tab-panel>
            <x-dashui-tab-panel panelId="panel-id-3">
                <p class="font-semibold text-sm">Tab 3</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur culpa ea eaque fuga, illo, magnam modi nesciunt nostrum obcaecati odit reprehenderit sapiente? Autem eaque excepturi ipsa, itaque laborum magni voluptate?</p>
            </x-dashui-tab-panel>
            <x-dashui-tab-panel panelId="panel-id-4">
                <p class="font-semibold text-sm">Tab 4</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur culpa ea eaque fuga, illo, magnam modi nesciunt nostrum obcaecati odit reprehenderit sapiente? Autem eaque excepturi ipsa, itaque laborum magni voluptate?</p>
            </x-dashui-tab-panel>
        </x-dashui-tabs>

        <x-dashui-card>
            <x-dashui-tabs :tabs="[
        ['label' => 'Tab 1', 'panelId' => 'card-id-1', 'selected' => true],
        ['label' => 'Tab 2', 'panelId' => 'card-id-2'],
        ['label' => 'Tab 3', 'panelId' => 'card-id-3'],
        ]">
                <x-dashui-tab-panel panelId="card-id-1">
                    <p class="font-semibold text-sm">Tab 1</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur culpa ea eaque fuga, illo, magnam modi nesciunt nostrum obcaecati odit reprehenderit sapiente? Autem eaque excepturi ipsa, itaque laborum magni voluptate?</p>
                </x-dashui-tab-panel>
                <x-dashui-tab-panel panelId="card-id-2">
                    <p class="font-semibold text-sm">Tab 2</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur culpa ea eaque fuga, illo, magnam modi nesciunt nostrum obcaecati odit reprehenderit sapiente? Autem eaque excepturi ipsa, itaque laborum magni voluptate?</p>
                </x-dashui-tab-panel>
                <x-dashui-tab-panel panelId="card-id-3">
                    <p class="font-semibold text-sm">Tab 3</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur culpa ea eaque fuga, illo, magnam modi nesciunt nostrum obcaecati odit reprehenderit sapiente? Autem eaque excepturi ipsa, itaque laborum magni voluptate?</p>
                </x-dashui-tab-panel>
            </x-dashui-tabs>
        </x-dashui-card>
    </div>
</div>
