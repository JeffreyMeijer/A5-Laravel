@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row row-padding">
        <div class="col-md-6">
            <div class="card" style="padding: 50px;height: 252px;background-image: url(/storage/images/{{ $band->image }});background-repeat: no-repeat;background-size: cover;background-position: center;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="padding:50px;height:100%;">
                <h2>{{ $band->name }}</h2>
                <p>{{ $band->description }}</p>
            </div>
        </div>
    </div>
    <div class="row row-padding">
        <div class="col-md-12">
            <div class="card" style="padding:50px;">
                <h2>Biografie</h2>
                <p style="white-space:pre-wrap;">{{ $band->biography }}</p>
            </div>
        </div>
    </div>

    @if($band->embed_url_1 || $band->embed_url_2 || $band->embed_url_3)
        <div class="row row-padding">
            @if($band->embed_url_1)
                <div class="col-md-4">
                    <div class="card">
                        <iframe height="315px" src="{{ $band->embed_url_1 }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            @endif
            @if($band->embed_url_2)
                <div class="col-md-4">
                    <div class="card">
                        <iframe height="315px" src="{{ $band->embed_url_2 }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            @endif
            @if($band->embed_url_3)
                <div class="col-md-4">
                    <div class="card">
                        <iframe height="315px" src="{{ $band->embed_url_3 }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            @endif
        </div>
    @endif
</div>

@endsection