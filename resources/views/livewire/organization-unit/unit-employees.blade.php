<div class="container-fluid">
    <div class="row">
    </div>
    <div class="row">
        <div class="col-md-12 mb-2">
            <table class="table table-bordered">
                <tr>
                    <td>Name</td>
                    <td>Role </td>
                </tr>
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                    <td>{{ $jobRoles[$employee->pivot->job_role_id] }}</td>
                @endforeach
            </table>
        </div>
</div>
