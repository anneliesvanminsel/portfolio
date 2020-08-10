@extends('layout.master')
@section('title')
    Annelies Van Minsel
@endsection
@section('theme')
    evento
@endsection
@section('content')
    <div class="profile__bkg"></div>
    <div class="grid row profile__grid">
        <section class="profile">
            <div class="ctn-image profile__image">
                <img
                    src="https://images.pexels.com/photos/2101841/pexels-photo-2101841.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                    alt=""
                >
            </div>
            <div class="profile__title">
                <p class="profile__firstname">
                    Annelies
                </p>
                <p class="profile__name">
                    Van Minsel
                </p>
            </div>
            <hr class="hr">
            <div class="profile__title is-grow">
                Frontend Web Developer
            </div>
            @include('partials.socials')
        </section>
        <section>
            <div>
                <h1>
                    Hi!
                </h1>
                <div>
                    <p>
                        I am a Belgium based web developer with a bias for Frontend.
                    </p>
                    
                    <p>
                        @svg('heart', 'is-heart') PHP, React and CSS/SASS.
                    </p>
                    
                    <p>
                        @svg('heart', 'is-heart') houseplants, cats and creating good food.
                    </p>
                </div>
            </div>
            <div class="row">
                @if(Route::has('resume'))
                    <a href="" class="button">
                        Resume
                    </a>
                @endif
                @if(Route::has('projects.overview'))
                    <a href="" class="button">
                        Projects
                    </a>
                @endif
            </div>
        </section>
    </div>
@endsection