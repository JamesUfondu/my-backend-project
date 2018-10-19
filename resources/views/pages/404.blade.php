@section('title', '404 error')
@include('template-layout/header')

<body>
  <div class="page-404">
    <p class="text-404">404</p>

    <h2>Aww Snap!</h2>
    <p>Something went wrong or that page doesn’t exist yet. <br><a href="{{URL('pages/index')}}">Return Home</a></p>
  </div>

</body>
@include('template-layout/footer')