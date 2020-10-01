@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="text-align:center;">
        <form action="/search" method="POST">
            @csrf
            <input type="text" class="form-control" name="query">
            <span><button type="submit" class="btn btn-default">Zoeken</button></span>
        </form>
        @if(isset($bands))
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Band</th>
                    <th>Eigenaar</th>
                </thead>
                <tbody>
                @foreach($bands as $band)
                    <td>{{$band->id}}</td>
                    <td><a href="{{ url('band/' . $band->id) }}">{{$band->name}}</a></td>
                    <td>{{$band->user->name}}</td>
                @endforeach
                </tbody>
            </table>
        @endif
        </div>
    </div>
</div>
@endsection