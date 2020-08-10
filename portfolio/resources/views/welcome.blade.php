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
            <div class="profile__social row socials">
                @svg('github')
                @svg('linkedin')
                @svg('instagram')
                @svg('twitter')
            </div>
        </section>
        <section>
            <div>
                <h1>
                    HALLO
                </h1>
                <p>
                    Dit is wat ik doe
                </p>
            </div>
            <div class="row">
                <a href="" class="button">
                    Resume
                </a>
                <a href="" class="button">
                    Projects
                </a>
            </div>
            <div>
                stuff
            </div>
        </section>
    </div>
@endsection