<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">

            <h2 class="inline-block font-semibold text-xl text-gray-800 leading-tight">
                {{ __('ALL Books') }}
            </h2>


            <x-nav-link :href="route('books.create')" >

                <button class="inline-block bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    ADD Book
                </button>
            </x-nav-link>

        </div>
    </x-slot>

    @if (count($books) > 0)


    @if (session()->has('message'))

        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">{{session()->get('message')}}</span>
        </div>
    @endif

    <table class="mx-auto mt-4">
        <thead>
        <tr>
            <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                #
            </th>
            <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Title
            </th>
            <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Category
            </th>
            <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Author
            </th>
            <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Release Year
            </th>
            <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Sell Price
            </th>

            @auth
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Actions
                </th>
            @endif
        </tr>
        </thead>

        <tbody class="bg-white">
        @foreach($books as $book)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $loop->index + 1 }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="text-sm font-medium leading-5 text-gray-900">
                            {{$book->title}}
                        </div>
                    </div>
                </td>

                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="text-sm leading-5 text-gray-500">{{$book->category->name}}</div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="text-sm leading-5 text-gray-500">{{$book->author->name}}</div>
                </td>

                <td
                    class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                    {{$book->year}}
                </td>

                <td
                    class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                    {{$book->sell_price}}
                </td>

                @auth

                <td
                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                <x-nav-link :href="route('books.edit', $book->id)" >
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </button>
                </x-nav-link>

                <form method="POST" action="{{route('books.delete', $book->id)}}" type="button" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Delete
                    </button>
                </form>

            </td>
            @endauth




            </tr>
        @endforeach

        </tbody>
    </table>

    @else

    <h1 class="flex justify-center items-center mt-8 font-semibold text-xl text-gray-800 leading-tight">No Data Yet</h1>

    @endif

</x-app-layout>
