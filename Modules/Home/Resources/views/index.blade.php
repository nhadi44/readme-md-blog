@extends('layouts.global')
@section('title', 'Readme.md - Discover the Journey: Embrace Knowledge and Insight')

@section('content')
    <x-heroes />
    <section id="trending_section" class="">
        <h6>Terending on Readme</h6>
    </section>
@endsection

@push('scripts')
    <script>
        console.log('hello from script push ')
    </script>
@endpush
