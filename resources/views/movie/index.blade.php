@extends('../layoutadmin')


@section('content')
    <h1>Movie list</h1>

    <table class="table" border="1px">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Time</th>
                <th scope="col">Year</th>
                <th scope="col">Star</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->image }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->long }}</td>
                    <td>{{ $movie->year }}</td>
                    <td>{{ $movie->star }}</td>
                    <td>
                        <a href="{{ route('movie.edit', $movie->id) }}" class="btn btn-primary">Sửa</a>
                        <a href="{{ route('movie.destroy', $movie->id) }}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
