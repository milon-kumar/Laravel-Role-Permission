<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th>#SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Request</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if($user->is_approve)
                                           <span class="badge bg-success">Approved</span>
                                        @else
                                            <span class="badge bg-danger">Pending</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($user->is_approve)
                                            <a href="" class="disabled btn btn-sm btn-success">Approved</a>
                                        @else
                                            <a href="{{route('user.approve',$user->id)}}" class="btn btn-sm btn-danger">Pending</a>
                                        @endif
                                        <a href="{{route('user.edit',$user->id)}}" class="btn btn-info btn-sm">Edit</a>
                                        <a href="" onclick="event.preventDefault();document.getElementById('deleteForm'+{{$user->id}}).submit();" class="btn btn-danger btn-sm">Delete</a>
                                            <form action="{{route('user.destroy',$user->id)}}" id="deleteForm{{$user->id}}" method="post">
                                                @csrf
                                                @method("DELETE")
                                            </form>
                                    </td>
                                </tr>
                            @endforeach
                            {!! $users->links() !!}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
