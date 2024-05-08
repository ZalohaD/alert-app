@extends('layouts.main')

@section('content')

<div class="container-xxl py-5 ">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Login</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <div class="tab-content">
                <div class="row justify-content-center">
                    <div class="col-md-4">

                        <form method="POST">
                          @csrf
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                              <input name="email" type="email" id="email" class="form-control" :value="old('email')" required/>
                              <label class="form-label" for="form2Example1">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                              <input name="password" type="password" id="password" class="form-control" required/>
                              <label class="form-label" for="form2Example2">Password</label>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                              <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="checkbox" name="checkbox" checked />
                                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                              </div>

                              <div class="col">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                              </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                              <p>Not a member? <a href="{{ route('auth.register') }}">Register</a></p>
                              <p>or sign up with:</p>
                              <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                              </button>

                              <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                              </button>

                              <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                              </button>

                              <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                              </button>
                            </div>
                          </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
