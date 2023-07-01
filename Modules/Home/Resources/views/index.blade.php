@extends('layouts.global')
@section('title', 'Readme.md - Discover the Journey: Embrace Knowledge and Insight')

@section('content')
    <x-heroes />
@endsection

@push('scripts')
    <script>
        console.log('hello from script push ')
    </script>
@endpush
