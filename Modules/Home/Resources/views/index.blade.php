@extends('layouts.global')
@section('title', 'Readme.md - Discover the Journey: Embrace Knowledge and Insight')

@section('content')
    <h1>Hello World</h1>
    <p>
        This view is loaded from module: {!! config('home.name') !!}
    </p>
@endsection

@push('scripts')
    <script>
        console.log('hello from script push ')
    </script>
@endpush
