<div class="py-4 px-4">
    {{ $body }}
    <textarea wire:model="body" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline" rows="3"></textarea>
    <div class="flex justify-end">
        <button wire:click="createPost" class="mt-2 px-4 py-2 bg-red-700 text-white hover:bg-red-600 rounded-md">Post</button>
    </div>
</div>
