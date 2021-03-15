<x-app-layout>

    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Customers List') }}
            </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-center">
                        <div>
                        <table class="table-auto border-separate border-green-800">
                            <thead>
                                <tr>
                                    <th >Name</th>
                                    <th >Email</th>
                                    <th >Phone</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td class="border border-purple-400">
                                            {{$customer->name}}
                                        </td>
                                        <td class="border border-purple-400">
                                            {{$customer->email}}</td>
                                        <td class="border border-purple-400">
                                            {{$customer->phone}}</td>
                                        <td> 
                                            <form action="/customers/{{$customer->id}}" method="post">
                                                <x-button 
                                                    class="bg-yellow-500 hover:bg-yellow-700" 
                                                    onclick="location.href='/customers/{{$customer->id}}/edit'" type="button">
                                                    edit
                                                </x-button>
                                            @csrf @method('DELETE')
                                                <x-button 
                                                    class="bg-red-500 hover:bg-red-700" 
                                                    type="submit">
                                                    clear
                                                </x-button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            <div class="my-3">
                                {{ $customers->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
