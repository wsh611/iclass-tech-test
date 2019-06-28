<html>

<head>
    <title> Employees report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <form action="/" method="GET">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    Employee No.
                </div>
                <div class="col-sm">
                    Name
                </div>
                <div class="col-sm">
                    Gender
                </div>
                <div class="col-sm">
                    Currently hired
                </div>
                <div class="col-sm">
                    Current salary
                </div>
            </div>

            @foreach ($items as $item)
            <div class="row">
                <div class="col-sm">
                    {{ $item->emp_no }}
                </div>
                <div class="col-sm">
                    {{ $item->first_name }} {{ $item->last_name }}
                </div>
                <div class="col-sm">
                    {{ $item->gender }}
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                </div>
            </div>
            @endforeach
        </div>
        <div>
            {{ $items->links() }}
        </div>
    </form>
</body>

</html>