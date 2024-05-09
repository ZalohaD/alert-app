@extends('layouts.main')

@section('content')
<div class="container-xxl py-5">
    <div class="container-fluid">
        <h1 class="text-center mb-5" data-wow-delay="0.1s">Job Listing</h1>
        <div class="row">
            
            <div class="col-md-8" id="job-list">
                <div class="tab-class text-center" data-wow-delay="0.1s">
                    <div id="tab-1" class="tab-pane fade show p-0 active">

                        @foreach ($jobs as $job)
                            <x-job :job="$job" />
                        @endforeach

                    </div>
                </div>
                <div>
                    {{ $jobs->withQueryString()->links() }}
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card">
                        <article class="card-group-item">
                            <header class="card-header">
                                <h6 class="title">Filters</h6>
                            </header>
                            <div class="filter-content">
                                <div class="card-body">
                                    <form id="filter-form">

                                        <div class="section">
                                            <h6 class="title">Work time</h6>
                                            <label for="full_time">
                                                <input type="radio" name="worktime" id="Full time" value="Full time">
                                                Full Time
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="worktime" id="Part time" value="Part time">
                                                Part Time
                                            </label>
                                        </div>

                                        <div class="section">
                                            <h6 class="title">Type of work</h6>
                                            <label for="full_time">
                                                <input type="radio" name="type" id="technical" value="technical">
                                                Technical
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="type" id="non-technical" value="non-technical">
                                                Non-Technical
                                            </label>
                                        </div>

                                        <div class="section">
                                            <h6 class="title">English</h6>
                                            <label for="full_time">
                                                <input type="radio" name="english" id="Beginner" value="Beginner">
                                                Beginner
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="english" id="Elementary" value="Elementary">
                                                Elementary
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="english" id="Intermediate" value="Intermediate">
                                                Intermediate
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="english" id="Upper-intermediate" value="Upper-intermediate">
                                                Upper-intermediate
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="english" id="Advanced" value="Advanced">
                                                Advanced
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="english" id="Proficiency" value="Proficiency">
                                                Proficiency
                                            </label>
                                        </div>

                                        <div class="section">
                                            <h6 class="title">Programing Language</h6>
                                            <label for="full_time">
                                                <input type="radio" name="proglang" id="PHP" value="PHP">
                                                PHP 
                                                {{-- 'HTML/CSS', 'SQL', 'Node.js', 'React', 'Angular', 'Vue.js', 'Laravel', 'Django', 'Symfony' --}}
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="proglang" id="JavaScript" value="JavaScript">
                                                JavaScript
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="proglang" id="Python" value="Python">
                                                Python
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="proglang" id="Java" value="Java">
                                                Java
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="proglang" id="Ruby" value="Ruby">
                                                Ruby
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="proglang" id="C#" value="C#">
                                                C#
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="proglang" id="Swift" value="Swift">
                                                Swift
                                            </label>
                                            <label for="part_time">
                                                <input type="radio" name="proglang" id="C++" value="C++">
                                                C++
                                            </label>
                                        </div>

                                        <button type="submit">Submit</button>

                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
