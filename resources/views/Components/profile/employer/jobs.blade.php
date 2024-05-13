<table class="table text-center">
    <thead>
    <tr>
        <th scope="col">SL</th>
        <th scope="col">Job Title:</th>
        <th scope="col">Job City:</th>
        <th scope="col">Job Posted:</th>
        <th scope="col">Status:</th>
        <th scope="col">Action:</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($jobs as $index => $job)
            <tr>
                <th>{{ $index + 1 }}</th>
                <td>{{ $job->title }}</td>
                <td>{{ $job->city }}</td>
                <td>{{ $job->created_at }}</td>
                <td>status</td>
                <td>
                    <a href="{{ route('job_show', $job->id) }}" class="btn btn-success btn-sm">View</a>
                    <a href="{{ route('employer.job_edit', $job->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('employer.delete_job', $job->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>