<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Autocomplete</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <label class="form-label" for="autocomplete-input">Start typing Sam:</label>
        <x-dashui-autocomplete activator="autocomplete1" :options="[
        ['label' => 'Samantha Jackson', 'class' => 'bg-primary-800 text-white'],
        ['label' => 'Sam Trust'],
        ['label' => 'Samuel Drake'],
        ['label' => 'Samala Anderson'],
        ['label' => 'Samelle Patt'],
        ['label' => 'Samson Potter'],
        ['label' => 'Samira Bolt'],
        ['label' => 'Sammy Curl'],
        ]" type="text" name="autocomplete-input" id="autocomplete-input" placeholder="Sam" autocomplete="off"/>
    </div>
</div>
