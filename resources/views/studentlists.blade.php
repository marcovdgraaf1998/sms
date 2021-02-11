<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">List of students</h5>
    <p class="card-text">You can find here all the information about students in the system.</p>
    <div class="table-responsive">
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Image</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->cne }}</td>
                <td>{{ $student->firstName }}</td>
                <td>{{ $student->lastName }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->speciality }}</td>
                <td><img src="{{ asset('uploads/student/' . $student->image) }}" alt="Image"></td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ url('/edit/' .$student->id) }}">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
  </div>
</div>

