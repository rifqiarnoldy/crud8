<div class="bg-white px-4">
    @foreach ($posts as $post)
        <div class="p-4 mt-3 bg-white shadow-xl rounded-md">
            <div>
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span>{{ $post->created_at->diffForHumans() }}</span>
                <button wire:click="showUpdateForm({{ $post->id }})" class="px-2 py-1 bg-red-700 text-white hover:bg-red-600 rounded-md">Edit</button>
                <button onclick="return confirm('yakin?') || event.stopImmediatePropagation()" wire:click="delete({{ $post->id }})" class="px-2 py-1 bg-red-700 text-white hover:bg-red-600 rounded-md">Delete</button>
            </div>
            <div>
                @if ($usi != $post->id)
                    <span>{{ $post->body }}</span>
                @else
                    <div>
                        <textarea wire:model="body" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline" rows="3"></textarea>
                    </div>
                    <div>
                        <button wire:click="update({{ $post->id }})" class="mt-2 px-4 py-2 bg-red-700 text-white hover:bg-red-600 rounded-md">Update</button>
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>
