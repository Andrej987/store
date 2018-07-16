<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

</head>
<body>
<div class="row">
    <div class="col-md-6">

        <table class="table">
            <thead>

            <tr>
                <th>Sku</th>
                <th>Naziv</th>
                <th>Količina</th>

            </tr>

            </thead>
            <tbody>

            @foreach($ordered_items as $item)
                <div class="table-responsive">
                    <tr>
                        <td>{{$item->sku}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->item_quantity}}</td>
                        @endforeach



                    </tr>
                    <td>
                    <div>
                        Ukupna cijena:
                    <div>{{$total_price}} $</div>
                </div>
                    </td>
                </div>
            </tbody>

        </table>

        <td><button><a href="/">END</a></button></td>

    </div>

</div>


</div>

</div>



</body>
</html>
