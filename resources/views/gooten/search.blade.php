<?php
?>
<html>
<body>
<form action="{{route('getProducts')}}" method="GET">
    <input name="productName" type="text">
    <button type="submit">Hello</button>
</form>

    @if(isset($products))
        @foreach($products as $product)
            <a href="{{route('getVariants', $product['Id']) }}">{{ $product['UId']}}</a><br>
        @endforeach
    @endif

</body>
</html>

{{----}}