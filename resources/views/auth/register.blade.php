@extends('layouts.main')

@section('content')
<div class="container-xxl py-5 ">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Register</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <div class="tab-content">
                <div class="row justify-content-center">
                    <div class="col-md-4">

                        <form>
                            <div class="mb-4 row">
                                <div class="col">
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                    <label for="first_name" class="form-label">First Name</label>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                    <label for="last_name" class="form-label">Last Name</label>
                                </div>
                            </div>
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="form2Example1" class="form-control" />
                                <label class="form-label" for="form2Example1">Email address</label>
                            </div>
                          
                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="form2Example2" class="form-control" />
                                <label class="form-label" for="form2Example2">Password</label>
                            </div>
                            <!-- Password check -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="form2Example2" class="form-control" />
                                <label class="form-label" for="form2Example2">Repeat Password</label>
                            </div>
                          
                            <div class="mb-3">
                                <h5 class="form-label mb-3">I am a:</h5>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="employee" id="employee_radio" name="user_type" required>
                                    <label class="form-check-label" for="employee_radio">Employee</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="employer" id="employer_radio" name="user_type" required>
                                    <label class="form-check-label" for="employer_radio">Employer</label>
                                </div>
                            </div>
                          
                            <!-- Submit button -->
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign up</button>
                          
                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Already have an account? <a href="{{ route('auth.login') }}">Login</a></p>
                                <p>Sign up with:</p>
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