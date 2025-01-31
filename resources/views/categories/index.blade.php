@extends('layouts.app')

@section('title', trans('wiki::messages.title'))

@section('content')
    <h1>{{ trans('wiki::messages.title') }}</h1>

    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-3">
                <a href="{{ route('wiki.show', $category) }}">
                    <div class="card">
                        <div class="card-body text-center text-primary">
                            <i class="{{ $category->icon ?? 'bi bi-book' }} fs-1 mb-3"></i>

                            <h2>{{ $category->name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
