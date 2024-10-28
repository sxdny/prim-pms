<x-default-view>
  <x-navbar> </x-navbar>
  <main class="flex flex-col h-screen items-center justify-center p-4">
    <div class="flex flex-col gap-5 max-w-prose">
      <h1 class="text-white text-6xl font-medium text-center text-pretty">A powerful and basic PMS for your <span class="underline underline-offset-4">hotel</span></h1>
      <p class="block text-neutral-400 text-md w-5xl text-center text-pretty">
        A simple and powerful Property Management System for your hotel. Manage your hotel with ease and comfort.
      </p>
      <div class="self-center flex flex-col gap-2 items-center">
        <a class="text-black bg-lime-400 px-5 py-2 rounded w-fit self-center" href="/login">Log In</a>
        <div class="flex gap-1 text-sm">
          <p class="text-neutral-500">Don't have an account?</p>
          <a class="text-white underline underline-offset-2" href="/register">Register</a>
        </div>
      </div>  
    </div>
  </main>
</x-default-view>