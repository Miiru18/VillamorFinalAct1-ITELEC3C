<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            Hello User, {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created at</th>
                </tr>
            </thead>
            <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                </tr>
            @endforeach   
            </tbody>
        </table>
        </div>
    </div>
</x-app-layout>
