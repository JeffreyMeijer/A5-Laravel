@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
</div>
@endsection
