@extends(backpack_view('blank'))

@php
@endphp
@section('content')
<div class="row row-cards mb-5">
  <div class="col-sm-6 col-lg-3">
    <div class="card card-sm">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-auto">
            <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path>
                <path d="M12 3v3m0 12v3"></path>
              </svg>
            </span>
          </div>
          <div class="col">
            <div class="font-weight-medium">
              132 Sales
            </div>
            <div class="text-muted">
              12 waiting payments
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-3">
    <div class="card card-sm">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-auto">
            <span class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
              </svg>
            </span>
          </div>
          <div class="col">
            <div class="font-weight-medium">
              132 Likes
            </div>
            <div class="text-muted">
              21 today
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection