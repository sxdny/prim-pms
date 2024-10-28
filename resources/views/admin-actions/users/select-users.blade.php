<x-default-view>
  <x-navbar> </x-navbar>
  <main class="p-4 flex flex-col gap-6">
    <div>
      <h1 class="text-white font-medium text-xl">List of Users</h1>
      <p class="text-neutral-300 text-sm">Select the users you want to manage.</p>
    </div>

    <div>
      @if ($users->count() > 0)
        @foreach ($users as $user )
          <li>{{ $user->name }} - {{ $user ->email }}</li>
        @endforeach
      @else
        <p class="text-neutral-200">No users found.</p>
      @endif
    </div>
  </x-default-view>