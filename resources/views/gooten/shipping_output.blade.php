<?php
?>
<html>
<body>

@foreach($shipping_groups as $shipping_group)

    @foreach($shipping_group['SKUs'] as $SKU)
        {{$SKU}}<br>
    @endforeach
    --------------<br>
    Options:<br>
    @foreach($shipping_group['ShipOptions'] as $shipping_option)
    {{$shipping_option['CarrierName']}} -- {{$shipping_option['Price']['FormattedPrice']}} <br>
    @endforeach
    <hr>

@endforeach

<h3>Total Standard Delivery: {{$total}}</h3>


</body>
</html>

{{----}}