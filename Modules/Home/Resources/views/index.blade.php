@extends('layouts.global')
@section('title', 'Readme.md - Discover the Journey: Embrace Knowledge and Insight')

@section('content')
    <div id="hero_component">
        <x-heroes />
    </div>
    <div class="main_wrapper">
        <div class="border-bottom">
            <section id="trending_section" class="container py-5">
                <div class="d-flex gap-2 align-items-center mb-3">
                    <i class="fa-solid fa-bolt"></i>
                    <h6 class="m-0">Terending on Readme.md</h6>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <x-tranding-card>
                            <x-slot name="trending_number">01</x-slot>
                            <x-slot name="trending_profile">Hadi Nurhidayat</x-slot>
                            <x-slot name="trending_title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, consectetur!
                            </x-slot>
                            <x-slot name="trending_date">
                                {{ \Carbon\Carbon::now()->format('d M Y') }}
                            </x-slot>
                            <x-slot name="trending_category">Technology</x-slot>
                        </x-tranding-card>
                    </div>
                    <div class="col-md-4 mb-3">
                        <x-tranding-card>
                            <x-slot name="trending_number">01</x-slot>
                            <x-slot name="trending_profile">Hadi Nurhidayat</x-slot>
                            <x-slot name="trending_title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, consectetur!
                            </x-slot>
                            <x-slot name="trending_date">
                                {{ \Carbon\Carbon::now()->format('d M Y') }}
                            </x-slot>
                            <x-slot name="trending_category">Technology</x-slot>
                        </x-tranding-card>
                    </div>
                    <div class="col-md-4 mb-3">
                        <x-tranding-card>
                            <x-slot name="trending_number">01</x-slot>
                            <x-slot name="trending_profile">Hadi Nurhidayat</x-slot>
                            <x-slot name="trending_title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, consectetur!
                            </x-slot>
                            <x-slot name="trending_date">
                                {{ \Carbon\Carbon::now()->format('d M Y') }}
                            </x-slot>
                            <x-slot name="trending_category">Technology</x-slot>
                        </x-tranding-card>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <x-tranding-card>
                            <x-slot name="trending_number">01</x-slot>
                            <x-slot name="trending_profile">Hadi Nurhidayat</x-slot>
                            <x-slot name="trending_title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, consectetur!
                            </x-slot>
                            <x-slot name="trending_date">
                                {{ \Carbon\Carbon::now()->format('d M Y') }}
                            </x-slot>
                            <x-slot name="trending_category">Technology</x-slot>
                        </x-tranding-card>
                    </div>
                    <div class="col-md-4 mb-3">
                        <x-tranding-card>
                            <x-slot name="trending_number">01</x-slot>
                            <x-slot name="trending_profile">Hadi Nurhidayat</x-slot>
                            <x-slot name="trending_title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, consectetur!
                            </x-slot>
                            <x-slot name="trending_date">
                                {{ \Carbon\Carbon::now()->format('d M Y') }}
                            </x-slot>
                            <x-slot name="trending_category">Technology</x-slot>
                        </x-tranding-card>
                    </div>
                    <div class="col-md-4 mb-3">
                        <x-tranding-card>
                            <x-slot name="trending_number">01</x-slot>
                            <x-slot name="trending_profile">Hadi Nurhidayat</x-slot>
                            <x-slot name="trending_title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, consectetur!
                            </x-slot>
                            <x-slot name="trending_date">
                                {{ \Carbon\Carbon::now()->format('d M Y') }}
                            </x-slot>
                            <x-slot name="trending_category">Technology</x-slot>
                        </x-tranding-card>
                    </div>
                </div>
            </section>
        </div>
        <section id="post_section" class="container py-5">
            <div class="row">
                <div class="col-md-8">
                    <x-post-card>
                        <x-slot name="post_profile_name">
                            Hadi Nurhidayat
                        </x-slot>
                        <x-slot name="post_title">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime
                            consequuntur minus quo laudantium dolorum porro nihil rerum fuga vitae quibusdam eius,
                            possimus vero, delectus libero. Officiis dolorum, incidunt, dolorem, rem eligendi dolor sed
                            earum veritatis consequuntur aspernatur architecto ipsum esse!
                        </x-slot>
                        <x-slot name="post_description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates vitae consequatur
                            eveniet beatae blanditiis ullam mollitia tempore accusantium! Labore repellat perspiciatis
                            quod dicta eaque id similique! Saepe repudiandae reiciendis illo!
                        </x-slot>
                        <x-slot name="post_date">{{ \Carbon\Carbon::now()->format('d M Y') }}</x-slot>
                        <x-slot name="post_category">Technology</x-slot>
                        <x-slot name="image_url">
                            https://images.unsplash.com/photo-1661956600684-97d3a4320e45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80
                        </x-slot>
                    </x-post-card>
                </div>
                <div class="col-md-4">
                    <div class="sidebar_wrapper">
                        <span>sidebar</span>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@push('scripts')
    <script>
        console.log('hello from script push ')
    </script>
@endpush
