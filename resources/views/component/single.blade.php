@extends('layout.applayout')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/single.css">
        <title>Document</title>

    </head>

    <body>

        <div class="single_card_container">

            <div class="singler">

                <div class="single_card">

                    <div class="single_opt_card">
                        <section class="single_imger">
                            <img class="single_img" width="600" height="400" src="{{ asset($cloth->image) }}"
                                alt="">
                            <div class="closers" onclick="toggleSingleCloser()">
                                <img src="/img/arrow.png" alt="logo">
                            </div>
                        </section>
                    </div>

                    <div class="single_opt_card two">
                        <div class="con">
                            <h2 class="single_name">{{ $cloth->name }}</h2>
                            <i class="fa-solid fa-ellipsis" onclick="toggleOptions()"></i>
                            <div class="options-menu" style="display: none;">
                                <div class="columner">
                                    <button onclick="toggleEditForm()">Edit</button>
                                    <div class="lino"></div>
                                    <form class="moha" id="deleteForm" action="/cloths/{{ $cloth->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete()">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="liner"></div>
                        <p class="single_para">{{ $cloth->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="edit" style="display: none;">
            @include('component.edit')
        </div>

        <div class="spinner"></div>

        <script src="/js/script.js"></script>

    </body>

    </html>
@endsection
