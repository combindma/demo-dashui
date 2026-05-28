<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Autocomplete</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <label class="form-label" for="autocomplete-input">Start typing Sam:</label>
        <x-dashui-autocomplete :options="[
        ['label' => 'Samantha Jackson', 'value' => 'samantha-jackson'],
        ['label' => 'Sam Trust', 'value' => 'sam-trust'],
        ['label' => 'Samuel Drake', 'value' => 'samuel-drake'],
        ['label' => 'Samala Anderson', 'value' => 'samala-anderson'],
        ['label' => 'Samelle Patt', 'value' => 'samelle-patt'],
        ['label' => 'Samson Potter', 'value' =>  'samson-potter'],
        ['label' => 'Samira Bolt', 'value' => 'samira-bolt'],
        ['label' => 'Sammy Curl', 'value' => 'sammy-curl'],
        ]" name="autocomplete-input" id="autocomplete-input" placeholder="Sam"/>
    </div>
</div>
