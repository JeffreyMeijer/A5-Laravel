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
        <form action="/settings/{{ $band->id }}/embed" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $band->embed_url_1 }}" name="embed_1" id="embed_1" aria-describedby="embedHelp_1">
                <small id="embedHelp_1" class="form-text text-muted">Hier kun je een Youtube Embed neerzetten</small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $band->embed_url_2 }}" name="embed_2" id="embed_2" aria-describedby="embedHelp_2">
                <small id="embedHelp_2" class="form-text text-muted">Hier kun je een Youtube Embed neerzetten</small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $band->embed_url_3 }}" name="embed_3" id="embed_3" aria-describedby="embedHelp_3">
                <small id="embedHelp_3" class="form-text text-muted">Hier kun je een Youtube Embed neerzetten</small>
            </div>
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </form>
    </div>
</div>

@endsection