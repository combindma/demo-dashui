<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Copy to clipboard</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <div class="bg-white border border-gray-300 rounded-lg p-1.5 lg:p-2 inline-flex items-center">
            <p id="content-to-copy" class="mr-3 lg:mr-5">Content to copy</p>

            <x-dashui-copy-to-clip title="Click to copy" data-success-title="Copied!" aria-controls="content-to-copy"/>
            <x-dashui-copy-to-clip title="Click to copy" data-success-title="Copied!" data-clipboard-content="This is the content to copy."/>
        </div>
    </div>
</div>
