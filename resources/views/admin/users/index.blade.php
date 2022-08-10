<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users Monitoring') }}
        </h2>
    </x-slot>

    <div class="container">

        <div>
            <div class="mx-auto pull-right">
                <div class="">
                    <form action="{{ route('admin.users.index') }}" method="GET" role="search">
                        <div class="input-group">
                            <span class="input-group-btn mr-5 mt-1">
                                <button class="btn btn-info" type="submit" title="Search projects">Search</button>
                            </span>
                            <input type="text" class="form-control mr-2" name="term" placeholder="Search projects"
                                id="term">
                            <a href="{{ route('admin.users.index') }}" class="btn btn-danger mt-1">Refresh</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel 8 CRUD Example</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('admin.users.create') }}"> Create New user</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>

            @foreach ($users as $user)
                <tr>
                    <td>{{ ++$count }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->detail }}</td>
                    <td>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ URL::to('users/' . $user->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ URL::to('users/' . $user->id . '/edit') }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    {!! $users->links() !!}

</x-admin-layout>
