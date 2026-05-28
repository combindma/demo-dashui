<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Copy to clipboard</h1>
    <div class="bg-gray-200/60 p-4 lg:pt-10">
        <div class="bg-white border border-gray-300 rounded-lg p-1.5 lg:p-2 inline-flex items-center">
            <el-copyable id="content-to-copy" class="mr-3 lg:mr-5">Content this text content</el-copyable>
            <x-dashui-copy-to-clip commandfor="content-to-copy"/>
        </div>
    </div>
    <div class="bg-gray-200/60 p-4 lg:pb-10">
        <div class="bg-white border border-gray-300 rounded-lg p-1.5 lg:p-2 inline-flex items-center">
            <el-copyable id="content-to-copy2" class="mr-3 lg:mr-5">Copy text added to data-clipboard-content</el-copyable>
            <x-dashui-copy-to-clip commandfor="content-to-copy2"/>
        </div>
    </div>
</div>
