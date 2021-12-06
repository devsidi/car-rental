@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div> 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in home!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
        <h1>Welcome to <span>Sidi Car Rental</span></h1>
        <h2>We provide excelent services for our Car rental Customer to the fullest satisfaction</h2> 
        </div>
    </section><!-- End Hero -->

    <section id="what-we-do" class="what-we-do">
        <div class="container">

            <div class="section-title">
            <h2>Car Available For Rental</h2>
            <p>Below is the available car for rental, Kindly choose according to your choices</p>
            </div>

            @foreach($cars->chunk(3) as $items)
            <div class="row">
                <div class="col d-flex">
                @foreach($items as $car)
                    <div class="col-md-4 portfolio-item">
                        <a href="{{ $car->id }}">
                        <img class="img-responsive" src="{{ $car->img_path }}" alt="" width="250" height="150">
                        </a>
                        <div class="card-body">
                                    <h4><a href="{{ $car->id }}">{{ $car->name }}</a></h4>
                                    <p>{{ $car->description }}</p> 
                                    @if($car->status == '0')
                                    <p><a href="">Available</a></p>
                                    @else
                                    <p>Not available</p>
                                    @endif 
                                    <p><a href="">{{ $car->price }}</a></p>
                        </div>
                    </div>

                @endforeach
                </div>
            </div>
            @endforeach  
    </section><!-- End What We Do Section -->
@endsection
