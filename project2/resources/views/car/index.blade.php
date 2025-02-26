<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Cars Index</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <a href="{{route('cars.create')}}">add</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>moblie</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value): ?>
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->moblie}}</td>
                    </tr>
                <?php endforeach; ?>


            </tbody>
        </table>
    </div>

</body>

</html>