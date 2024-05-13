<form action="{{ route('employer.store_job') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="job-title">Job title</label>
        <input type="text" class="form-control" name="job-title" value="" required>
        @error('job-title')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group mt-3">
        <label for="description">Desciption</label>
        <textarea type="text" class="form-control" name="description" rows="3" value="" required></textarea>
        @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group mt-3">
        <label for="city">City</label>
        <input type="text" class="form-control" name="city" value="" required>
        @error('city')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group mt-3">
        <label for="worktime">Work time</label>
        <select type="text" class="form-control" name="worktime">
            <option>Full time</option>
            <option>Part time</option>
        </select>
    </div>
    <div class="mt-1 row g-3">
        <div class="form-group mt-3 col-sm-6">
            <label for="salary">Salary</label>
            <input type="number" class="form-control" name="salary" value="" required>
            @error('salary')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="form-group mt-3 col-sm-6">
            <label for="experience">Experience</label>
            <input type="number" class="form-control" name="experience" value="" required>
            @error('experience')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="english">English level</label>
        <select class="form-control" name="english" value="">
            <option>Beginner</option>
            <option>Elementary</option>
            <option>Intermediate</option>
            <option>Upper-intermediate</option>
            <option>Advanced</option>
            <option>Proficiency</option>
        </select>
    </div>
    <div class="form-group mt-3">
        <label for="category">Category</label>
        <select class="form-control" name="category" value="">
            @foreach ($categories as $category)
                <option>{{ $category->name }}</option>            
            @endforeach
        </select>
    </div>
    <div class="form-group mt-3">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>