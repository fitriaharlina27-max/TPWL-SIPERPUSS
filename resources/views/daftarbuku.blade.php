<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Buku</h1>
    @foreach ($book->bookshelf as $bookshelf)
        <div>
            Buku : {{ $bookshelf->id }}
            Buku : {{ $bookshelf->name }}
        </div>
        @empty

            <div>tidak ada buku</div>
        @endforeach
    </body>

    </html>
