@extends('layouts.app')
@extends('layouts.sidebar')
@section('content')
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
    <h1>{{$band->name}}</h1>
</div>
<div class="row justify-content-center">
    <form action="/settings/{{ $band->id }}/name" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">Verander hier je naam</small>
        </div>
        <button type="submit" class="btn btn-primary">Aanpassen</button>
    </form>
</div>
@endsection