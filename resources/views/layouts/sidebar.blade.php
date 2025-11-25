<aside x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 min-h-screen fixed z-20">
    <!-- Mobile Hamburger -->
    <div class="sm:hidden flex items-center justify-between px-4 py-3 border-b border-gray-200 dark:border-gray-700">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Menu</h2>
        <button @click="open = !open" class="text-gray-800 dark:text-gray-200 focus:outline-none">
            <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Sidebar Menu -->
    <nav :class="{'block': open, 'hidden': !open}" class="sm:block px-6 py-4">
        <ul>
            <li>
                <a href="{{ route('product.index') }}" class="flex items-center px-4 py-2 mt-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-900 rounded-md {{ request()->routeIs('dashboard') ? 'bg-gray-100 dark:bg-gray-900 font-semibold' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18v18H3V3z"/>
                    </svg>
                    Product
                </a>
            </li>
            <li>
                <a href="{{route('order.index')}}" class="flex items-center px-4 py-2 mt-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-900 rounded-md">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    Orders
                </a>
            </li>
        </ul>
    </nav>
</aside>

<!-- Content wrapper -->
<div class="sm:ml-64 p-6">
    {{ $slot ?? '' }}
</div>
