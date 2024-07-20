<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach</title>
</head>
<body>
    <h1>Danh sach</h1>
    <table border="1">
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                    <th>
                    EDIT
                    DELETE
                    </th>
            </tr>

        @endforeach
    </table>
</body>
</html>