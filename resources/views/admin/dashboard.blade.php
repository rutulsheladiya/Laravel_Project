@extends('admin/layout')

@section('dashboard_select', 'active');
@section('mainContent')
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Welcome
            @if (session()->has('username'))
                {{ session('username') }}
            @endif
        </h4>
    </div>
    <div class="row">
        <h1>Dashboard</h1>
        {{-- {{Auth::id()}} --}}
        {{-- {{Auth::user()}} --}}
    </div>
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--green">
                        <span class="desc">Categories</span>
                        <h2 class="number">1</h2>
                        <div class="icon">
                            <i class="fas fa-list"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--orange">
                        <span class="desc">Brands</span>
                        <h2 class="number">1</h2>
                        <div class="icon">
                            <i class="fa fa-meetup" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--blue">
                        <span class="desc">Orders</span>
                        <h2 class="number">1</h2>
                        <div class="icon">
                            <i class="fas fa-shopping-basket"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--red">
                        <span class="desc">total earnings</span>
                        <h2 class="number">1</h2>
                        <div class="icon">
                            <i class="fa fa-inr" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

@endsection
