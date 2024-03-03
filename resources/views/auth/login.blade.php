@extends('layouts.main')

@section('content-auth')
    <main class="login">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-8 col-lg-5">
                    <div class="card-login d-flex flex-column align-items-center">
                        <h3 class="title">Login Account</h3>
                        <form class="form d-flex flex-column">
                            <div class="input-group d-flex flex-column">
                                <label for="email">Email</label>
                                <input type="email" class="input" id="email" placeholder="Enter your email.." autocomplete="off">
                            </div>
                            <div class="input-group d-flex flex-column">
                                <label for="password">Password</label>
                                <input type="password" class="input" id="password" placeholder="Enter your password.." autocomplete="off">
                            </div>
                            <button class="button-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-dark">
            <img src="{{ asset('assets/images/wave/wave-dark.svg') }}" alt="Wave Dark">
        </div>
        <div class="wave-light">
            <img src="{{ asset('assets/images/wave/wave-light.svg') }}" alt="Wave Light">
        </div>
    </main>
@endsection
