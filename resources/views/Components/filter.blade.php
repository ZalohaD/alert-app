<div class="col-md-4">
    <div class="card">
        <div class="card">
            <article class="card-group-item">
                <header class="card-header filter-card">
                    <h1 class="title p-2 text-white">Filters</h1>
                </header>
                <div class="filter-content">
                    <div class="card-body">
                        <form id="filter-form">

                            <div class="section">
                                <h6 class="title">Work time</h6>
                                <label class="form-check-label p-1" for="full_time">
                                    <input class="form-check-input" type="radio" name="worktime" id="Full time" value="Full time">
                                    Full Time
                                </label>
                                <label class="form-check-label p-1" for="part_time">
                                    <input class="form-check-input" type="radio" name="worktime" id="Part time" value="Part time">
                                    Part Time
                                </label>
                            </div>

                            <div class="section">
                                <h6 class="title">Type of work</h6>
                                <label class="form-check-label p-1" for="technical">
                                    <input class="form-check-input" type="radio" name="type" id="technical" value="technical">
                                    Technical
                                </label>
                                <label class="form-check-label p-1" for="non-technical">
                                    <input class="form-check-input" type="radio" name="type" id="non-technical" value="non-technical">
                                    Non-Technical
                                </label>
                            </div>

                            <div class="section">
                                <h6 class="title">English</h6>
                                <label class="form-check-label p-1" for="Beginner">
                                    <input class="form-check-input" type="radio" name="english" id="Beginner" value="Beginner">
                                    Beginner
                                </label>
                                <label class="form-check-label p-1" for="Elementary">
                                    <input class="form-check-input" type="radio" name="english" id="Elementary" value="Elementary">
                                    Elementary
                                </label>
                                <label class="form-check-label p-1" for="Intermediate">
                                    <input class="form-check-input" type="radio" name="english" id="Intermediate" value="Intermediate">
                                    Intermediate
                                </label>
                                <label class="form-check-label p-1" for="Upper-intermediate">
                                    <input class="form-check-input" type="radio" name="english" id="Upper-intermediate" value="Upper-intermediate">
                                    Upper-intermediate
                                </label>
                                <label class="form-check-label p-1" for="Advanced">
                                    <input class="form-check-input" type="radio" name="english" id="Advanced" value="Advanced">
                                    Advanced
                                </label>
                                <label class="form-check-label p-1" for="Proficiency">
                                    <input class="form-check-input" type="radio" name="english" id="Proficiency" value="Proficiency">
                                    Proficiency
                                </label>
                            </div>

                            <div class="section">
                                <h6 class="title">Programming Language</h6>
                                @foreach ($langs as $lang)
                                    <label class="form-check-label p-1" for="{{ $lang->name }}">
                                        <input class="form-check-input" type="radio" name="proglang" id="{{ $lang->name }}" value="{{ $lang->name }}">
                                        {{ $lang->name }}
                                    </label>
                                @endforeach
                            </div>

                            <button class="btn btn-primary btn-lg mt-3" type="submit">Submit</button>

                        </form>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
