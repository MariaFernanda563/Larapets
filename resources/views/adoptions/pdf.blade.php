<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Adoptions</title>
    <style>
        table {
            border: 2px solid #aaa;
            border-collapse: collapse
        }
        table th, table td {
            font-family: sans-serif;
            font-size: 10px;
            border: 2px solid #ccc;
            padding: 4px;
        }
        table tr:nth-child(odd) {
            background-color: #eee;
        }
        table th {
            background-color: #666;
            color: #fff;
            text-align: center;
        }
    </style>
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

                <td>
                    @php
                        $extension = substr($adoption->image, -4);
                    @endphp
                    @if ($extension != 'webp' && $extension != '.svg')
                        <img src="{{ public_path().'/images/'.$adoption->image }}" width="96px">
                    @else
                        Webp|SVG
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>