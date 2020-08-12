@extends('layout.master')
@section('title')
    Annelies Van Minsel
@endsection
@section('theme') @endsection
@section('content')
    <div class="profile__bkg"></div>
    <div class="grid row profile__grid">
        <section class="profile">
            <div class="ctn-image profile__image">
                <img
                    src="{{ asset('img/me.png') }}"
                    alt="Annelies Van Minsel - BitMoji"
                >
            </div>
            <div class="profile__name">
                <p class="logo">
                    Annelies
                </p>
                <p class="logo">
                    Van Minsel
                </p>
            </div>
            <hr class="hr">
            <div class="profile__title is-grow">
                Frontend Web Developer
            </div>
            @include('partials.socials')
        </section>
        <section class="intro">
            <div>
                <h1 class="intro__title">
                    Hi!
                </h1>
                <div class="intro__content">
                    <p class="intro__text">
                        I am a Belgium based web developer with a bias for Frontend.
                    </p>
                    
                    <p class="intro__text">
                       I just graduated and am currently looking for a job. Can you help me?
                    </p>
                    
                    <p class="intro__text row row--center">
                        @svg('heart', 'is-heart') PHP, React and CSS/SASS.
                    </p>
                    
                    <p class="intro__text row row--center">
                        @svg('heart', 'is-heart') houseplants, cats and creating good food.
                    </p>
                </div>
            </div>
            <div class="intro__actions row">
                @if(Route::has('resume'))
                    <a href="" class="intro__link button">
                        Resume
                    </a>
                @endif
                @if(Route::has('projects.overview'))
                    <a href="" class="intro__link button">
                        Projects
                    </a>
                @endif
                @if(Route::has('blog.overview'))
                    <a href="" class="intro__link button">
                        Blog
                    </a>
                @endif
            </div>
        </section>
    </div>
@endsection