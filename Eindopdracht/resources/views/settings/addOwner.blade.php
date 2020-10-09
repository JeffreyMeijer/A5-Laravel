@extends('layouts.app')
@extends('layouts.sidebar')
@section('content')
<div class="container">
    <div class="row">
        @if ($message = Session::get('success'))

            <div class="alert alert-success alert-block">

                <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

            </div>

        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
                <th>ID</th>
                <th>Naam</th>
                <th>Email</th>
                <th></th>
                @foreach($band->users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="/settings/{{ $band->id }}/owner/delete/{{ $user->id }}">delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row justify-content-center">
        <form action="/settings/{{ $band->id }}/owner/add" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <select name="users" id="users" class="form-control">
                    @foreach($users as $user)
                        @foreach($band->users as $banduser)
                            @if($banduser->id != $user->id)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endif
                        @endforeach
                    @endforeach
                </select>
                {{-- <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp"> --}}
                <small id="nameHelp" class="form-text text-muted">Voeg hier een eigenaar toe</small>
            </div>
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </form>
    </div>
</div>
@endsection