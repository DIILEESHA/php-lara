<!-- index.blade.php -->
@extends('layout.applayout')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/home.css">
        <title>Clothy - Sell your clothes online</title>
    </head>

    <body>
        <div class="cloth_container">
            @if ($demoModels->isEmpty())
                <div class="no_data">
                    <img src="img/oops.gif" alt="">
                    <!-- <h2 class="add">Add now!</h2> -->
                </div>
            @else
                <div class="cloth_card_grid">
                    @foreach ($demoModels as $demoModel)
                        <a href="/cloths/{{ $demoModel->id }}" class="mini_cloth">
                            <section class="imger">
                                <img src="{{ asset($demoModel->image) }}" alt="" />
                            </section>
                            <div class="combiner">
                                <h2 class="cloth_name">{{ $demoModel->name }}</h2>
                                <h3 class="date">{{ $demoModel->created_at->format('M d, Y') }}</h3>
                            </div>
                        </a>
                    @endforeach
            @endif
        </div>
        </div>
    </body>

    </html>
@endsection
