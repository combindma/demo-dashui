<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Tabs</h1>
    <div class="flex flex-col gap-y-5 bg-gray-200/60 p-4 lg:p-10">
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
