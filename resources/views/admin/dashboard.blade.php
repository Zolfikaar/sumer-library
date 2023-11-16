<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <h1>Books: {{ $bookCount }}</h1>
                    </div>
                    <div>
                        <h1>Categories: {{ $categoriesCount }}</h1>
                    </div>
                    <div>
                        <h1>Authors: {{ $authorsCount }}</h1>
                    </div>
                    <div>
                        <h1>Orders: {{ $ordersCount }}</h1>
                    </div>
                    <div>
                        <h1>Users: {{ $usersCount }}</h1>
                    </div>
                    <div>
                        <h1>Total Book Cost: {{ $totalBookCost }}</h1>
                    </div>
                    <div>
                        <h1>Total Sales Revenue: {{ $totalSalesRevenue }}</h1>
                    </div>
                    <div>
                        <h1>Net Profit: {{ $netProfit }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
