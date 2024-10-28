<x-default-view>
    <x-navbar> </x-navbar>
    <main class="p-4 flex flex-col gap-6">
        <div class="flex flex-col">
            <h1 class="text-white font-medium text-xl">Admin Control Center</h1>
            <p class="text-neutral-400 text-sm">Realiza cualquier cambio en cada una de las tablas de la base de datos en esta página. </p>
        </div>

        {{-- Link to Actions --}}
        <div class="flex gap-4">
            <div>
                <h2 class="text-white text-sl font-medium text-xl">Users table</h2>
                <ul class="pl-4">
                    <li><a class="pl-4 text-neutral-300 text-sm list-item" href="/admin-control-center/users/view">View Users</a></li>
                    <li><a class="pl-4 text-neutral-300 text-sm list-item" href="/admin-control-center/users/create">Create User</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-white text-sl font-medium text-xl">Orders table</h2>
                <ul class="pl-4">
                    <li><a class="pl-4 text-neutral-300 text-sm list-item" href="/admin-control-center/orders/view">View Orders</a></li>
                    <li><a class="pl-4 text-neutral-300 text-sm list-item" href="/admin-control-center/orders/create">Create Order</a></li>
                </ul>
            </div>
        </div>
    </main>
</x-default-view>