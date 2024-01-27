<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Combobox</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-combobox inputName="products[]" placeholder="Search" :options="[
        ['label' => 'Dining Tables', 'value' => 'option-1', 'selected' => true],
        ['label' => 'Coffee Tables', 'value' => 'option-2'],
        ['label' => 'Side Tables', 'value' => 'option-3'],
        ['label' => 'Outdoor Tables', 'value' => 'option-4'],
        ['label' => 'Outdoor Tables', 'value' => 'option-5'],
        ]"/>
    </div>
</div>
