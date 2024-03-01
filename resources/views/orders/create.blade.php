<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Order') }}
        </h2>
    </x-slot>

    <div class="w-full max-w-lg mx-auto mt-4">
        @if ($errors->any)
        @foreach($errors->all() as $error)

        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <span class="font-medium">{{$error}}</span>
        </div>
        @endforeach
        @endif
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{route('books.store')}}">
            @csrf
            @method('POST')
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Customer Information') }}
            </h2>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="CustomerName">
              Customer Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="CustomerName" type="text" placeholder="Customer Name" name="customer_name" value="" required>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="CustomerPhone">
              Customer Phone
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="CustomerPhone" type="text" placeholder="Customer Phone" name="customer_phone" value="" required>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="CustomerAddress">
              Customer Address
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="CustomerAddress" type="text" placeholder="Customer Address" name="customer_address" value="" required>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Title">
                Description
              </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="desc" id="description" cols="30" rows="4"></textarea>
            </div>

          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order Items') }}
          </h2>





          <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Save
                </button>
          </div>

        </form>

      </div>
</x-app-layout>
