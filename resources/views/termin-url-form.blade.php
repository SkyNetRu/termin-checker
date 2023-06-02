<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
        .form-termin-url {
            max-width: 50vw;
            padding: 1rem;
        }
    </style>

</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary min-vh-100" style="">
<main class="form-termin-url w-100 m-auto">
    <form action="{{route('update-termin-url')}}" method="post">
        <div class="form-floating">
            <input type="text" value="{{ $termin_url ? $termin_url->url : '' }}" name="termin_url"
                   class="form-control"
                   id="floatingInput"
                   placeholder="https://service.berlin.de/....." />
            <label for="floatingInput">Termin URL</label>
        </div>
        @csrf
        <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Update</button>
    </form>
</main>
</body>
</html>
