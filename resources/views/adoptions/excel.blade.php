<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Adoptions</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Pet ID</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adoptions as $adoption)
            <tr>
                <td>{{ $adoption->id }}</td>
                <td>{{ $adoption->user_id }}</td>
                <td>{{ $adoption->pet_id }}</td>
                <td>{{ $adoption->created_at }}</td>
                <td>{{ $adoption->updated_at }}</td>
                <td>
                    <img src="{{ public_path().'/images/'.$adoption->image }}" width="50px">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>