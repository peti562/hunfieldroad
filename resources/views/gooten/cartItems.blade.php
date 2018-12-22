<?php
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container" style="width: 750px; margin-top: 50px;">
        <form class="form-horizontal" method="GET" action="{{route('cartItems')}}">
            <div class="form-group">
                <label for="state" class="col-sm-2 control-label">State</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="state" placeholder="State" value="{{isset($state) ? $state : ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="postal_code" class="col-sm-2 control-label">Post Code</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="postal_code" placeholder="Post Code" value="{{isset($postal_code) ? $postal_code : ''}}">
                </div>
            </div>
            <hr>

            @for($i=1;$i<=10; $i++)
                <div class="form-group">
                    <label for="SKU" class="col-sm-2 control-label">Product #{{$i}} :</label>
                    <div class="col-sm-8">
                        <input type="text" name="SKU[]" class="form-control" id="sku_{{$i}}" placeholder="SKU" value="{{isset($SKU[$i-1]) ? $SKU[$i-1] : ''}}">
                    </div>
                    <div class="col-sm-2">
                        <input class="form-control" name="quantity[]" type="number" value="{{isset($quantity[$i-1]) ? $quantity[$i-1] : '1'}}">
                    </div>
                </div>
            @endfor

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-block btn-success">Get Shipping Rates</button>
                </div>
            </div>
        </form>
    </div>

@if(isset($cart))

    {{--RESULTS--}}
    <div class="container" style="width: 750px; margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Shipping rates</h3>
                    </div>
                    <div class="panel-body">
                        <!--Invoice Detials-->
                        <div class="row invoice-info">
                            <div class="col-xs-12">
                                <div class="tag-box tag-box-v3">

                                    <h3>Production: {{$cart['Items']['FormattedPrice']}}</h3>
                                    <h3>Shipping: {{$cart['Shipping']['FormattedPrice']}}</h3>
                                    <hr>
                                    <h3>Total: ${{$cart['Items']['Price'] + $cart['Shipping']['Price']}}</h3>

                                </div>
                            </div>
                        </div>
                        <!--End Invoice Detials-->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
{{--END OF RESULTS--}}

</body>
</html>

{{----}}