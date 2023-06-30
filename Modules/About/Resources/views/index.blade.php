@extends('layouts.global')
@section('title', 'About')

@section('content')
    <h1>Hello World About</h1>
    <p>
        This view is loaded from module: {!! config('home.name') !!}
    </p>
@endsection

@push('scripts')
    <script>
        console.log('hello from script push ')
    </script>
@endpush
