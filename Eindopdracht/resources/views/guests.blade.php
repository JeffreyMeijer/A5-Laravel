@extends('layouts.guest')

@section('content')
{{-- <div class="container">
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
                    <tr>
                        <td>{{$band->id}}</td>
                        <td><a href="{{ url('band/' . $band->id) }}">{{$band->name}}</a></td>
                        <td>{{$band->user->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
        </div>
    </div>
</div> --}}

<div class="d-flex justify-content-center align-items-center guestBackground">
    <div class="container">
        <h1 class="row-padding" style="color:white;text-align:center;letter-spacing:.15em;">Zoek hier de Electronic Press Kit van een band!</h1>
        <form action="/search" method="POST">
            @csrf
            <input type="text" class="form-control guestSearch" name="query">
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" style="color:black;" aria-hidden="true"></span></button>
        </form>
        @if(isset($bands))
            <div class="bands">
                @foreach ($bands as $band)
                    <div class="inner-band card">
                        <a href="/band/{{ $band->id }}"><div class="card-image" style="background-image: url(/storage/images/{{ $band->image }});">
                            {{-- <img src="/storage/images/{{ $band->image }}"> --}}
                        </div></a>
                        <div class="card-text">
                            <h2>{{ $band->name }}</h2>
                            @if($band->description)
                                <p>{{ $band->description }}</p>
                            @else
                                <p>Geen beschrijving gevonden</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection