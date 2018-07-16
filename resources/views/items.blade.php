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
            <th>Količina u inventaru</th>
            <th>Cijena</th>
            <th>Dodaj Količinu</th>

    </tr>

    </thead>
    <tbody>

    @foreach($items as $item)
        <div class="table-responsive">
            <tr>
            <td>{{$item->sku}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->price}} $</td>

                <form method="POST" action="">
                    {{ csrf_field() }}

                  <td><input type="hidden" placeholder="" id="item_sku" name="item_sku" value="{{$item->sku}}" class="form-control"></td>
                  <td><input type="number" class="form-control" id="item_quantity" name="item_quantity" style="width: 50px" ></td>
                  <td><button class="btn-success">Add to Shoping list</button></td>

                </form>

                </tr>
        </div>
    @endforeach

    </tbody>

</table>

</div>
        <div class="col-md-6">

            <table class="table">
                <thead>

                <tr>
                    <th>Sku</th>
                    <th>Naziv</th>
                    <th>Količina </th>
                    <th>Cijena</th>

                </tr>

                </thead>
                <tbody>

                @foreach($ordered_items as $item)


                    <form method="POST" action="{{action('ItemsController@remove', ['sku' => $item->sku])}}">
                        {{ csrf_field() }}
                    <div class="table-responsive">
                        <tr>
                            <td name="sku">{{$item->sku}}</td>
                            <td name="name">{{$item->name}}</td>
                            <td name="item_quantity">{{$item->item_quantity}}</td>
                            <td name="total_count">{{$item->price}} $</td>
                            <td><button class="btn-danger">Remove</button></td>


                        </tr>
                    </div>

                    </form>

                @endforeach

                <td><button><a href="{{route('checkout')}}">Checkout</a></button></td>


                </tbody>

            </table>

            </div>
        </div>


        </div>

    </div>



</body>
</html>
