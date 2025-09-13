<div>
    <h1>Activity Livewire Seeder ans Factory</h1>
    <table class="w-full p-6">
        <thead>
            <tr>
                <th class="border px-2 py-2"> ID </th>
                <th class="border px-2 py-2"> Name </th>
                <th class="border px-2 py-2"> Email </th>
                <th class="border px-2 py-2"> Password</th>
                <th class="border px-2 py-2"> Verified at </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user )
            <tr>
                 <td class="border px-2 py-2">{{ $user->id }}</td>
                <td class="border px-2 py-2">{{ $user->name }}</td>
                <td class="border px-2 py-2">{{ $user->email }}</td>
                <td class="border px-2 py-2">{{ $user->password }}</td>
                <td class="border px-2 py-2">{{ $user->email_verified_at }}</td>
            @endforeach
        </tbody>
</div>
