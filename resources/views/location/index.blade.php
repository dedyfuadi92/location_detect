<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Location Detect</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        {{-- <h1>My First Bootstrap Page</h1>
        <p>This part is inside a .container-fluid class.</p>
        <p>The .container-fluid class provides a full width container, spanning the entire width of the viewport.</p> --}}
        <p>
            ip : {{ $detailss->ip }}<br>
            hostname : {{ isset($detailss->hostname) ? $detailss->hostname : '' }}<br>
            loc : {{ isset($detailss->loc) ? $detailss->loc : '' }}<br>
            org : {{ isset($detailss->org) ? $detailss->org : '' }}<br>
            city : {{ isset($detailss->city) ? $detailss->city : '' }}<br>
            region : {{ isset($detailss->region) ? $detailss->region : '' }}<br>
            country : {{ isset($detailss->country) ? $detailss->country : '' }}<br>
            timezone : {{ isset($detailss->timezone) ? $detailss->timezone : '' }}<br>
            phone : {{ isset($detailss->phone) ? $detailss->phone : '' }}
        </p>
    </div>
</body>

</html>
