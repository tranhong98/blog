<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Article Table</h1>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Brief</th>
            <th>Content</th>
            <th>Image</th>
            <th>Views</th>

        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>
                {{ $article->id }}
            </td>
            <td>
                {{ $article->name }}
            </td>
            <td>
                {{ $article->brief }}
            </td>
            <td>
                {{ $article->image }}
            </td>
            <td>
                {{ $article->views }}
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>
