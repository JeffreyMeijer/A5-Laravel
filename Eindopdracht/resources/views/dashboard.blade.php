@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @if($bands)
                    @foreach($bands as $band)
                        <h1>{{ $band->name }}</h1>
                    @endforeach
                @endif
                <h1>Test</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
