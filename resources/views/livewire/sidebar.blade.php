<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">G-Post</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="/" class="{!! request()->route()->getName() === 'dashboard' ? $activeClass : $inactiveClass !!}">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Home
        </a>

        @auth
            <a href="blank.html" class="{!! request()->route()->getName() === 'blank' ? $activeClass : $inactiveClass !!}">
                <i class="fas fa-sticky-note mr-3"></i>
                Blank Page
            </a>
        @endauth
    </nav>
    <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
        <i class="fas fa-arrow-circle-up mr-3"></i>
        Upgrade to Pro!
    </a>
</aside>
