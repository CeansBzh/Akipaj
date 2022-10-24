<aside class="relative bg-sky-700 h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a class="text-white text-3xl font-semibold uppercase hover:text-gray-300" href="{{ url('/') }}">Akipaj</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <x-admin.sidebar-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
            Panneau d'accueil
        </x-admin.sidebar-link>
        <x-admin.sidebar-link href="#" :active="false">
            Test
        </x-admin.sidebar-link>
    </nav>
</aside>