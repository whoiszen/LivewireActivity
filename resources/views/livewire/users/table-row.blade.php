<tr class="{{ $user->id % 2 == 0 ? 'bg-gray-200 border border-black text-gray-400' : '' }}">
                <td class="border px-2 py-2">{{ $post->id }}</td>
                <td class="border px-2 py-2">{{ $post->name }}</td>
                <td class="border px-2 py-2">{{ $post->email }}</td>
                <td class="border px-2 py-2">{{ $post->password }}</td>
                <td class="border px-2 py-2">{{ $post->email_verified_at }}
            <a href="#"
            wire:click='archive'
            wire:confirm='Are you sure you want to archivethis user?'
            class="text-blue-600 hover:underline border px-4 py-2 bg-blue-100 hover:bg-blue-100">{{ $post->archive }}</a>
</td>
