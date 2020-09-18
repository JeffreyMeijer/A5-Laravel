@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @if($bands)
                <table class="table">
                    <th>ID</th>
                    <th>Naam</th>
                    <th>Eigenaar</th>
                    @foreach($bands as $band)
                    <tr>
                        <td>{{ $band->id }}</td>
                        <td><a href="{{ url('band/'. $band->id)}}">{{ $band->name }}</a></td>
                        <td><a href="#">{{ $band->user->name }}</a></td>
                    </tr>
                    @endforeach
                </table>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
