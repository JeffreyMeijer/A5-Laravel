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
        <h1>Band teksten</h1>
    </div>
    <div class="row justify-content-center">
        <form action="/settings/{{ $band->id }}/text" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="shortDescription" id="shortDescription" aria-describedby="shortDescriptionHelp" rows="5" cols="40" maxlength="248">{{$band->description}}</textarea>
                <small id="shortDescriptionHelp" class="form-text text-muted">Korte beschrijving kun je hier invullen (MAX is 248 karakters)</small>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="biography" id="biography" aria-describedby="biographyHelp" rows="15" cols="40" maxlength="2048">{{$band->biography}}</textarea>
                <small id="biographyHelp" class="form-text text-muted">Biografie kun je hier invullen (MAX is 2048 karakters)</small>
            </div>
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </form>
    </div>
</div>
@endsection