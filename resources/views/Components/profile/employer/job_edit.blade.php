<form action="{{ route('employer.store_job', ['id' => $job->id]) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="job-title">Job title</label>
        <input type="text" class="form-control" name="job-title" value="{{ $job->title }}" required>
    </div>
    <div class="form-group mt-3">
        <label for="description">Desciption</label>
        <textarea type="text" class="form-control" name="description" rows="3" required>{{ $job->description }}</textarea>
    </div>
    <div class="form-group mt-3">
        <label for="city">City</label>
        <input type="text" class="form-control" name="city" value="{{ $job->city }}" required>
    </div>
    <div class="form-group mt-3">
        <label for="worktime">Work time</label>
        <select type="text" class="form-control" name="worktime">
            <option>Full time</option>
            <option {{ $job->worktime === 'Part time' ? 'selected' : '' }}>Part time</option>
        </select>
    </div>
    <div class="mt-1 row g-3">
        <div class="form-group mt-3 col-sm-6">
            <label for="salary">Salary</label>
            <input type="number" class="form-control" name="salary" value="{{ $job->salary }}" required>
        </div>
        <div class="form-group mt-3 col-sm-6">
            <label for="experience">Experience</label>
            <input type="number" class="form-control" name="experience" value="{{ $job->experience }}" required>
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="english">English level</label>
        <select class="form-control" name="english" value="">
            <option>Beginner</option>
            <option @if($job->english === 'Elementary') selected @endif>Elementary</option>
            <option @if($job->english === 'Intermediate') selected @endif>Intermediate</option>
            <option @if($job->english === 'Upper-intermediate') selected @endif>Upper-intermediate</option>
            <option @if($job->english === 'Advanced') selected @endif>Advanced</option>
            <option @if($job->english === 'Proficiency') selected @endif>Proficiency</option>
        </select>
    </div>
    <div class="form-group mt-3">
        <label for="category">Category</label>
        <select class="form-control" name="category" value="">
            @foreach ($categories as $category)
                <option @if($job->category->name === $category->name) selected @endif>{{ $category->name }}</option>            
            @endforeach
        </select>
    </div>
    <div class="form-group mt-3">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>