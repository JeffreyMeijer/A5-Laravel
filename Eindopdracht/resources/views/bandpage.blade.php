@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row row-padding">
        <div class="col-md-6">
            <div class="card" style="padding: 50px;height: 252px;background-image: url(https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg?cs=srgb&dl=pexels-sebastian-ervi-1763075.jpg&fm=jpg);background-repeat: no-repeat;background-size: cover;background-position: center;">
                {{-- <img src="https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg?cs=srgb&dl=pexels-sebastian-ervi-1763075.jpg&fm=jpg"> --}}
                {{-- <h2>Band foto</h2> --}}
                {{-- <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p> --}}
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="padding:50px;">
                <h2>Beschrijving</h2>
                <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p>
            </div>
        </div>
    </div>
    <div class="row row-padding">
        <div class="col-md-12">
            <div class="card" style="padding:50px;">
                <h2>Biografie</h2>
                <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p>
                <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p>
                <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p>
                <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p>
                <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p>
            </div>
        </div>
    </div>

    <div class="row row-padding">
        <div class="col-md-4">
            <div class="card">
                {{-- <h2>Youtube 1</h2> --}}
                <iframe height="315px" src="https://www.youtube.com/embed/ScMzIvxBSi4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                {{-- <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p> --}}
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                {{-- <h2>Youtube 2</h2> --}}
                <iframe height="315px" src="https://www.youtube.com/embed/ScMzIvxBSi4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                {{-- <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p> --}}
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                {{-- <h2>Youtube 3</h2> --}}
                <iframe height="315px" src="https://www.youtube.com/embed/ScMzIvxBSi4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                {{-- <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p> --}}
            </div>
        </div>
    </div>
</div>

@endsection