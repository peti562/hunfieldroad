@include('layouts.header')
<!-- Main Wrapper -->
<div class="outside" style="width:1000px; margin:auto;">
    <div class="wrapper" >
        <div class="container">

            @yield('content')

        </div>
    </div>
</div>

@include('layouts.footer')