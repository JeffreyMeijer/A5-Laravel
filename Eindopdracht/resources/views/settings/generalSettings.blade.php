@extends('layouts.app')

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
            @if($bands)
                <table class="table">
                    <th>ID</th>
                    <th>Naam</th>
                    <th>Eigenaar</th>
                    @foreach($bands as $band)
                    <tr>
                        <td>{{ $band->id }}</td>
                        <td><a href="{{ url('settings/'. $band->id . '/name')}}">{{ $band->name }}</a></td>
                        <td><a href="#">{{ $band->user->name }}</a></td>
                    </tr>
                    @endforeach
                </table>
                @endif
        </div>
    </div>
@endsection