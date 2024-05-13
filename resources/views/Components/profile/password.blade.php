<form action="{{ route($route) }}" method="POST">
    @csrf
    <h3>Change password</h3>
    <div class="form-group">
        <label for="password">Enter your password</label>
        <input type="password" id="password" class="form-control" name="password" required>
    </div>
    <div class="form-group mt-3">
        <label for="last_name">New password</label>
        <input type="password" id="new_password" class="form-control" name="new_password" required>
    </div>
    <div class="form-group mt-3">
        <label for="email">Repeat</label>
        <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required>
    </div>
    <div class="form-group mt-3">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</form>