@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Contact aanpassen</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        <br/>
        @endif
        <form method="post" action="{{route('contacts.update', $contact->id)}}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="first_name">Voornaam:</label>
                <input type="text" class="form-control" name="first_name" value={{$contact->first_name}}>
            </div>
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </form>
    </div>
</div>