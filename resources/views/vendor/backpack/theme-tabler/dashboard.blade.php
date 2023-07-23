@extends(backpack_view('blank'))

@php

@endphp
@section('content')
<div class="row mb-5">
  <div class="col-sm-6 col-lg-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="subheader">Sales</div>
          <div class="ms-auto lh-1">
            <div class="dropdown">
              <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item active" href="#">Last 7 days</a>
                <a class="dropdown-item" href="#">Last 30 days</a>
                <a class="dropdown-item" href="#">Last 3 months</a>
              </div>
            </div>
          </div>
        </div>
        <div class="h1 mb-3">75%</div>
        <div class="d-flex mb-2">
          <div>Conversion rate</div>
          <div class="ms-auto">
            <span class="text-green d-inline-flex align-items-center lh-1">
              7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                <path d="M3 17l6 -6l4 4l8 -8"></path>
                <path d="M14 7l7 0l0 7"></path>
              </svg>
            </span>
          </div>
        </div>
        <div class="progress progress-sm">
          <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
            <span class="visually-hidden">75% Complete</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="subheader">Revenue</div>
          <div class="ms-auto lh-1">
            <div class="dropdown">
              <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item active" href="#">Last 7 days</a>
                <a class="dropdown-item" href="#">Last 30 days</a>
                <a class="dropdown-item" href="#">Last 3 months</a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-baseline">
          <div class="h1 mb-0 me-2">$4,300</div>
          <div class="me-auto">
            <span class="text-green d-inline-flex align-items-center lh-1">
              8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                <path d="M3 17l6 -6l4 4l8 -8"></path>
                <path d="M14 7l7 0l0 7"></path>
              </svg>
            </span>
          </div>
        </div>
      </div>
      <div id="chart-revenue-bg" class="chart-sm" style="min-height: 40px;">
        <div id="apexcharts2wjnrq8i" class="apexcharts-canvas apexcharts2wjnrq8i apexcharts-theme-light" style="width: 263px; height: 40px;"><svg id="SvgjsSvg2223" width="263" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent; --darkreader-inline-bgimage: initial; --darkreader-inline-bgcolor: transparent;" data-darkreader-inline-bgimage="" data-darkreader-inline-bgcolor="">
            <foreignObject x="0" y="0" width="263" height="40">
              <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 20px;"></div>
            </foreignObject>
            <rect id="SvgjsRect2228" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: #e7e5e2; --darkreader-inline-stroke: none;"></rect>
            <g id="SvgjsG2290" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
            <g id="SvgjsG2225" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
              <defs id="SvgjsDefs2224">
                <clipPath id="gridRectMask2wjnrq8i">
                  <rect id="SvgjsRect2260" width="269" height="42" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: none;"></rect>
                </clipPath>
                <clipPath id="forecastMask2wjnrq8i"></clipPath>
                <clipPath id="nonForecastMask2wjnrq8i"></clipPath>
                <clipPath id="gridRectMarkerMask2wjnrq8i">
                  <rect id="SvgjsRect2261" width="267" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: none;"></rect>
                </clipPath>
              </defs>
              <line id="SvgjsLine2229" x1="262.5" y1="0" x2="262.5" y2="40" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="262.5" y="0" width="1" height="40" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: #39414c; --darkreader-inline-stroke: #454a4d;"></line>
              <g id="SvgjsG2268" class="apexcharts-grid">
                <g id="SvgjsG2269" class="apexcharts-gridlines-horizontal" style="display: none;">
                  <line id="SvgjsLine2272" x1="0" y1="0" x2="263" y2="0" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                  <line id="SvgjsLine2273" x1="0" y1="8" x2="263" y2="8" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                  <line id="SvgjsLine2274" x1="0" y1="16" x2="263" y2="16" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                  <line id="SvgjsLine2275" x1="0" y1="24" x2="263" y2="24" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                  <line id="SvgjsLine2276" x1="0" y1="32" x2="263" y2="32" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                  <line id="SvgjsLine2277" x1="0" y1="40" x2="263" y2="40" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                </g>
                <g id="SvgjsG2270" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                <line id="SvgjsLine2279" x1="0" y1="40" x2="263" y2="40" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: transparent;"></line>
                <line id="SvgjsLine2278" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: transparent;"></line>
              </g>
              <g id="SvgjsG2262" class="apexcharts-area-series apexcharts-plot-series">
                <g id="SvgjsG2263" class="apexcharts-series" seriesName="Profits" data:longestSeries="true" rel="1" data:realIndex="0">
                  <path id="SvgjsPath2266" d="M 0 40 L 0 25.2C 3.1741379310344824 25.2 5.894827586206897 26 9.068965517241379 26C 12.24310344827586 26 14.963793103448275 22.4 18.137931034482758 22.4C 21.31206896551724 22.4 24.032758620689656 28.8 27.20689655172414 28.8C 30.381034482758622 28.8 33.101724137931036 25.6 36.275862068965516 25.6C 39.45 25.6 42.17068965517241 30.4 45.3448275862069 30.4C 48.518965517241384 30.4 51.23965517241379 14 54.41379310344828 14C 57.58793103448276 14 60.30862068965517 27.6 63.48275862068965 27.6C 66.65689655172413 27.6 69.37758620689655 25.2 72.55172413793103 25.2C 75.72586206896551 25.2 78.44655172413793 24.4 81.62068965517241 24.4C 84.79482758620689 24.4 87.51551724137931 15.2 90.6896551724138 15.2C 93.86379310344827 15.2 96.5844827586207 19.6 99.75862068965517 19.6C 102.93275862068965 19.6 105.65344827586208 26 108.82758620689656 26C 112.00172413793103 26 114.72241379310344 23.6 117.89655172413792 23.6C 121.0706896551724 23.6 123.79137931034482 26 126.9655172413793 26C 130.1396551724138 26 132.8603448275862 29.2 136.0344827586207 29.2C 139.20862068965516 29.2 141.9293103448276 2.799999999999997 145.10344827586206 2.799999999999997C 148.27758620689653 2.799999999999997 150.99827586206897 18.8 154.17241379310343 18.8C 157.34655172413792 18.8 160.06724137931033 15.600000000000001 163.24137931034483 15.600000000000001C 166.4155172413793 15.600000000000001 169.13620689655173 29.2 172.3103448275862 29.2C 175.4844827586207 29.2 178.2051724137931 18.4 181.3793103448276 18.4C 184.55344827586205 18.4 187.2741379310345 22.8 190.44827586206895 22.8C 193.62241379310345 22.8 196.34310344827585 32.4 199.51724137931035 32.4C 202.69137931034481 32.4 205.41206896551725 21.6 208.58620689655172 21.6C 211.7603448275862 21.6 214.48103448275862 24.4 217.6551724137931 24.4C 220.82931034482758 24.4 223.55 15.2 226.72413793103448 15.2C 229.89827586206894 15.2 232.61896551724138 19.6 235.79310344827584 19.6C 238.96724137931034 19.6 241.68793103448274 26 244.86206896551724 26C 248.0362068965517 26 250.75689655172414 23.6 253.9310344827586 23.6C 257.10517241379307 23.6 259.82586206896553 13.2 263 13.2C 263 13.2 263 13.2 263 40M 263 13.2z" fill="rgba(32,107,196,0.16)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask2wjnrq8i)" pathTo="M 0 40 L 0 25.2C 3.1741379310344824 25.2 5.894827586206897 26 9.068965517241379 26C 12.24310344827586 26 14.963793103448275 22.4 18.137931034482758 22.4C 21.31206896551724 22.4 24.032758620689656 28.8 27.20689655172414 28.8C 30.381034482758622 28.8 33.101724137931036 25.6 36.275862068965516 25.6C 39.45 25.6 42.17068965517241 30.4 45.3448275862069 30.4C 48.518965517241384 30.4 51.23965517241379 14 54.41379310344828 14C 57.58793103448276 14 60.30862068965517 27.6 63.48275862068965 27.6C 66.65689655172413 27.6 69.37758620689655 25.2 72.55172413793103 25.2C 75.72586206896551 25.2 78.44655172413793 24.4 81.62068965517241 24.4C 84.79482758620689 24.4 87.51551724137931 15.2 90.6896551724138 15.2C 93.86379310344827 15.2 96.5844827586207 19.6 99.75862068965517 19.6C 102.93275862068965 19.6 105.65344827586208 26 108.82758620689656 26C 112.00172413793103 26 114.72241379310344 23.6 117.89655172413792 23.6C 121.0706896551724 23.6 123.79137931034482 26 126.9655172413793 26C 130.1396551724138 26 132.8603448275862 29.2 136.0344827586207 29.2C 139.20862068965516 29.2 141.9293103448276 2.799999999999997 145.10344827586206 2.799999999999997C 148.27758620689653 2.799999999999997 150.99827586206897 18.8 154.17241379310343 18.8C 157.34655172413792 18.8 160.06724137931033 15.600000000000001 163.24137931034483 15.600000000000001C 166.4155172413793 15.600000000000001 169.13620689655173 29.2 172.3103448275862 29.2C 175.4844827586207 29.2 178.2051724137931 18.4 181.3793103448276 18.4C 184.55344827586205 18.4 187.2741379310345 22.8 190.44827586206895 22.8C 193.62241379310345 22.8 196.34310344827585 32.4 199.51724137931035 32.4C 202.69137931034481 32.4 205.41206896551725 21.6 208.58620689655172 21.6C 211.7603448275862 21.6 214.48103448275862 24.4 217.6551724137931 24.4C 220.82931034482758 24.4 223.55 15.2 226.72413793103448 15.2C 229.89827586206894 15.2 232.61896551724138 19.6 235.79310344827584 19.6C 238.96724137931034 19.6 241.68793103448274 26 244.86206896551724 26C 248.0362068965517 26 250.75689655172414 23.6 253.9310344827586 23.6C 257.10517241379307 23.6 259.82586206896553 13.2 263 13.2C 263 13.2 263 13.2 263 40M 263 13.2z" pathFrom="M -1 40 L -1 40 L 9.068965517241379 40 L 18.137931034482758 40 L 27.20689655172414 40 L 36.275862068965516 40 L 45.3448275862069 40 L 54.41379310344828 40 L 63.48275862068965 40 L 72.55172413793103 40 L 81.62068965517241 40 L 90.6896551724138 40 L 99.75862068965517 40 L 108.82758620689656 40 L 117.89655172413792 40 L 126.9655172413793 40 L 136.0344827586207 40 L 145.10344827586206 40 L 154.17241379310343 40 L 163.24137931034483 40 L 172.3103448275862 40 L 181.3793103448276 40 L 190.44827586206895 40 L 199.51724137931035 40 L 208.58620689655172 40 L 217.6551724137931 40 L 226.72413793103448 40 L 235.79310344827584 40 L 244.86206896551724 40 L 253.9310344827586 40 L 263 40" data-darkreader-inline-fill="" style="--darkreader-inline-fill: rgba(26, 86, 157, 0.16);"></path>
                  <path id="SvgjsPath2267" d="M 0 25.2C 3.1741379310344824 25.2 5.894827586206897 26 9.068965517241379 26C 12.24310344827586 26 14.963793103448275 22.4 18.137931034482758 22.4C 21.31206896551724 22.4 24.032758620689656 28.8 27.20689655172414 28.8C 30.381034482758622 28.8 33.101724137931036 25.6 36.275862068965516 25.6C 39.45 25.6 42.17068965517241 30.4 45.3448275862069 30.4C 48.518965517241384 30.4 51.23965517241379 14 54.41379310344828 14C 57.58793103448276 14 60.30862068965517 27.6 63.48275862068965 27.6C 66.65689655172413 27.6 69.37758620689655 25.2 72.55172413793103 25.2C 75.72586206896551 25.2 78.44655172413793 24.4 81.62068965517241 24.4C 84.79482758620689 24.4 87.51551724137931 15.2 90.6896551724138 15.2C 93.86379310344827 15.2 96.5844827586207 19.6 99.75862068965517 19.6C 102.93275862068965 19.6 105.65344827586208 26 108.82758620689656 26C 112.00172413793103 26 114.72241379310344 23.6 117.89655172413792 23.6C 121.0706896551724 23.6 123.79137931034482 26 126.9655172413793 26C 130.1396551724138 26 132.8603448275862 29.2 136.0344827586207 29.2C 139.20862068965516 29.2 141.9293103448276 2.799999999999997 145.10344827586206 2.799999999999997C 148.27758620689653 2.799999999999997 150.99827586206897 18.8 154.17241379310343 18.8C 157.34655172413792 18.8 160.06724137931033 15.600000000000001 163.24137931034483 15.600000000000001C 166.4155172413793 15.600000000000001 169.13620689655173 29.2 172.3103448275862 29.2C 175.4844827586207 29.2 178.2051724137931 18.4 181.3793103448276 18.4C 184.55344827586205 18.4 187.2741379310345 22.8 190.44827586206895 22.8C 193.62241379310345 22.8 196.34310344827585 32.4 199.51724137931035 32.4C 202.69137931034481 32.4 205.41206896551725 21.6 208.58620689655172 21.6C 211.7603448275862 21.6 214.48103448275862 24.4 217.6551724137931 24.4C 220.82931034482758 24.4 223.55 15.2 226.72413793103448 15.2C 229.89827586206894 15.2 232.61896551724138 19.6 235.79310344827584 19.6C 238.96724137931034 19.6 241.68793103448274 26 244.86206896551724 26C 248.0362068965517 26 250.75689655172414 23.6 253.9310344827586 23.6C 257.10517241379307 23.6 259.82586206896553 13.2 263 13.2" fill="none" fill-opacity="1" stroke="#206bc4" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask2wjnrq8i)" pathTo="M 0 25.2C 3.1741379310344824 25.2 5.894827586206897 26 9.068965517241379 26C 12.24310344827586 26 14.963793103448275 22.4 18.137931034482758 22.4C 21.31206896551724 22.4 24.032758620689656 28.8 27.20689655172414 28.8C 30.381034482758622 28.8 33.101724137931036 25.6 36.275862068965516 25.6C 39.45 25.6 42.17068965517241 30.4 45.3448275862069 30.4C 48.518965517241384 30.4 51.23965517241379 14 54.41379310344828 14C 57.58793103448276 14 60.30862068965517 27.6 63.48275862068965 27.6C 66.65689655172413 27.6 69.37758620689655 25.2 72.55172413793103 25.2C 75.72586206896551 25.2 78.44655172413793 24.4 81.62068965517241 24.4C 84.79482758620689 24.4 87.51551724137931 15.2 90.6896551724138 15.2C 93.86379310344827 15.2 96.5844827586207 19.6 99.75862068965517 19.6C 102.93275862068965 19.6 105.65344827586208 26 108.82758620689656 26C 112.00172413793103 26 114.72241379310344 23.6 117.89655172413792 23.6C 121.0706896551724 23.6 123.79137931034482 26 126.9655172413793 26C 130.1396551724138 26 132.8603448275862 29.2 136.0344827586207 29.2C 139.20862068965516 29.2 141.9293103448276 2.799999999999997 145.10344827586206 2.799999999999997C 148.27758620689653 2.799999999999997 150.99827586206897 18.8 154.17241379310343 18.8C 157.34655172413792 18.8 160.06724137931033 15.600000000000001 163.24137931034483 15.600000000000001C 166.4155172413793 15.600000000000001 169.13620689655173 29.2 172.3103448275862 29.2C 175.4844827586207 29.2 178.2051724137931 18.4 181.3793103448276 18.4C 184.55344827586205 18.4 187.2741379310345 22.8 190.44827586206895 22.8C 193.62241379310345 22.8 196.34310344827585 32.4 199.51724137931035 32.4C 202.69137931034481 32.4 205.41206896551725 21.6 208.58620689655172 21.6C 211.7603448275862 21.6 214.48103448275862 24.4 217.6551724137931 24.4C 220.82931034482758 24.4 223.55 15.2 226.72413793103448 15.2C 229.89827586206894 15.2 232.61896551724138 19.6 235.79310344827584 19.6C 238.96724137931034 19.6 241.68793103448274 26 244.86206896551724 26C 248.0362068965517 26 250.75689655172414 23.6 253.9310344827586 23.6C 257.10517241379307 23.6 259.82586206896553 13.2 263 13.2" pathFrom="M -1 40 L -1 40 L 9.068965517241379 40 L 18.137931034482758 40 L 27.20689655172414 40 L 36.275862068965516 40 L 45.3448275862069 40 L 54.41379310344828 40 L 63.48275862068965 40 L 72.55172413793103 40 L 81.62068965517241 40 L 90.6896551724138 40 L 99.75862068965517 40 L 108.82758620689656 40 L 117.89655172413792 40 L 126.9655172413793 40 L 136.0344827586207 40 L 145.10344827586206 40 L 154.17241379310343 40 L 163.24137931034483 40 L 172.3103448275862 40 L 181.3793103448276 40 L 190.44827586206895 40 L 199.51724137931035 40 L 208.58620689655172 40 L 217.6551724137931 40 L 226.72413793103448 40 L 235.79310344827584 40 L 244.86206896551724 40 L 253.9310344827586 40 L 263 40" fill-rule="evenodd" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #5ea6e5;"></path>
                  <g id="SvgjsG2264" class="apexcharts-series-markers-wrap" data:realIndex="0">
                    <g class="apexcharts-series-markers">
                      <circle id="SvgjsCircle2294" r="0" cx="263" cy="13.2" class="apexcharts-marker wplttnspr no-pointer-events" stroke="#ffffff" fill="#206bc4" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: #5ea6e5; --darkreader-inline-stroke: #e8e6e3;"></circle>
                    </g>
                  </g>
                </g>
                <g id="SvgjsG2265" class="apexcharts-datalabels" data:realIndex="0"></g>
              </g>
              <g id="SvgjsG2271" class="apexcharts-grid-borders" style="display: none;"></g>
              <line id="SvgjsLine2280" x1="0" y1="0" x2="263" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #454a4d;"></line>
              <line id="SvgjsLine2281" x1="0" y1="0" x2="263" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
              <g id="SvgjsG2282" class="apexcharts-xaxis" transform="translate(0, 0)">
                <g id="SvgjsG2283" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
              </g>
              <g id="SvgjsG2291" class="apexcharts-yaxis-annotations"></g>
              <g id="SvgjsG2292" class="apexcharts-xaxis-annotations"></g>
              <g id="SvgjsG2293" class="apexcharts-point-annotations"></g>
            </g>
          </svg>
          <div class="apexcharts-tooltip apexcharts-theme-dark" style="left: 156.656px; top: -14.2812px;">
            <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">19 Jul</div>
            <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 107, 196); --darkreader-inline-bgcolor: #1a569d;" data-darkreader-inline-bgcolor=""></span>
              <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Profits: </span><span class="apexcharts-tooltip-text-y-value">67</span></div>
                <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
              </div>
            </div>
          </div>
          <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
            <div class="apexcharts-yaxistooltip-text"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="subheader">New clients</div>
          <div class="ms-auto lh-1">
            <div class="dropdown">
              <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item active" href="#">Last 7 days</a>
                <a class="dropdown-item" href="#">Last 30 days</a>
                <a class="dropdown-item" href="#">Last 3 months</a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-baseline">
          <div class="h1 mb-3 me-2">6,782</div>
          <div class="me-auto">
            <span class="text-yellow d-inline-flex align-items-center lh-1">
              0% <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                <path d="M5 12l14 0"></path>
              </svg>
            </span>
          </div>
        </div>
        <div id="chart-new-clients" class="chart-sm" style="min-height: 40px;">
          <div id="apexchartsf2f5s8oh" class="apexcharts-canvas apexchartsf2f5s8oh apexcharts-theme-light" style="width: 215px; height: 40px;"><svg id="SvgjsSvg2297" width="215" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent; --darkreader-inline-bgimage: initial; --darkreader-inline-bgcolor: transparent;" data-darkreader-inline-bgimage="" data-darkreader-inline-bgcolor="">
              <foreignObject x="0" y="0" width="215" height="40">
                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 20px;"></div>
              </foreignObject>
              <rect id="SvgjsRect2304" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: #e7e5e2; --darkreader-inline-stroke: none;"></rect>
              <g id="SvgjsG2368" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
              <g id="SvgjsG2299" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                <defs id="SvgjsDefs2298">
                  <clipPath id="gridRectMaskf2f5s8oh">
                    <rect id="SvgjsRect2336" width="221" height="42" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: none;"></rect>
                  </clipPath>
                  <clipPath id="forecastMaskf2f5s8oh"></clipPath>
                  <clipPath id="nonForecastMaskf2f5s8oh"></clipPath>
                  <clipPath id="gridRectMarkerMaskf2f5s8oh">
                    <rect id="SvgjsRect2337" width="219" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: none;"></rect>
                  </clipPath>
                </defs>
                <line id="SvgjsLine2305" x1="162.60344827586206" y1="0" x2="162.60344827586206" y2="40" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="162.60344827586206" y="0" width="1" height="40" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: #39414c; --darkreader-inline-stroke: #454a4d;"></line>
                <g id="SvgjsG2347" class="apexcharts-grid">
                  <g id="SvgjsG2348" class="apexcharts-gridlines-horizontal" style="display: none;">
                    <line id="SvgjsLine2351" x1="0" y1="0" x2="215" y2="0" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                    <line id="SvgjsLine2352" x1="0" y1="8" x2="215" y2="8" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                    <line id="SvgjsLine2353" x1="0" y1="16" x2="215" y2="16" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                    <line id="SvgjsLine2354" x1="0" y1="24" x2="215" y2="24" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                    <line id="SvgjsLine2355" x1="0" y1="32" x2="215" y2="32" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                    <line id="SvgjsLine2356" x1="0" y1="40" x2="215" y2="40" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                  </g>
                  <g id="SvgjsG2349" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                  <line id="SvgjsLine2358" x1="0" y1="40" x2="215" y2="40" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: transparent;"></line>
                  <line id="SvgjsLine2357" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: transparent;"></line>
                </g>
                <g id="SvgjsG2338" class="apexcharts-line-series apexcharts-plot-series">
                  <g id="SvgjsG2339" class="apexcharts-series" seriesName="May" data:longestSeries="true" rel="1" data:realIndex="0">
                    <path id="SvgjsPath2342" d="M 0 25.2C 2.5948275862068964 25.2 4.818965517241379 26 7.413793103448276 26C 10.008620689655173 26 12.232758620689655 22.4 14.827586206896552 22.4C 17.42241379310345 22.4 19.646551724137932 28.8 22.24137931034483 28.8C 24.836206896551726 28.8 27.060344827586206 25.6 29.655172413793103 25.6C 32.25 25.6 34.474137931034484 30.4 37.06896551724138 30.4C 39.66379310344828 30.4 41.88793103448276 14 44.48275862068966 14C 47.077586206896555 14 49.30172413793103 27.6 51.89655172413793 27.6C 54.491379310344826 27.6 56.71551724137931 25.2 59.310344827586206 25.2C 61.9051724137931 25.2 64.12931034482759 24.4 66.72413793103448 24.4C 69.31896551724138 24.4 71.54310344827586 15.2 74.13793103448276 15.2C 76.73275862068965 15.2 78.95689655172414 19.6 81.55172413793103 19.6C 84.14655172413794 19.6 86.37068965517241 26 88.96551724137932 26C 91.5603448275862 26 93.7844827586207 23.6 96.37931034482759 23.6C 98.97413793103448 23.6 101.19827586206897 26 103.79310344827586 26C 106.38793103448276 26 108.61206896551724 29.2 111.20689655172414 29.2C 113.80172413793103 29.2 116.02586206896552 2.799999999999997 118.62068965517241 2.799999999999997C 121.2155172413793 2.799999999999997 123.4396551724138 18.8 126.03448275862068 18.8C 128.6293103448276 18.8 130.85344827586206 15.600000000000001 133.44827586206895 15.600000000000001C 136.04310344827584 15.600000000000001 138.26724137931035 29.2 140.86206896551724 29.2C 143.45689655172413 29.2 145.68103448275863 18.4 148.27586206896552 18.4C 150.8706896551724 18.4 153.0948275862069 22.8 155.68965517241378 22.8C 158.28448275862067 22.8 160.50862068965517 38.4 163.10344827586206 38.4C 165.69827586206895 38.4 167.92241379310346 21.6 170.51724137931035 21.6C 173.11206896551724 21.6 175.33620689655174 24.4 177.93103448275863 24.4C 180.52586206896552 24.4 182.75 15.2 185.3448275862069 15.2C 187.93965517241378 15.2 190.16379310344828 19.6 192.75862068965517 19.6C 195.35344827586206 19.6 197.57758620689657 26 200.17241379310346 26C 202.76724137931035 26 204.99137931034483 23.6 207.58620689655172 23.6C 210.1810344827586 23.6 212.4051724137931 13.2 215 13.2" fill="none" fill-opacity="1" stroke="rgba(32,107,196,1)" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskf2f5s8oh)" pathTo="M 0 25.2C 2.5948275862068964 25.2 4.818965517241379 26 7.413793103448276 26C 10.008620689655173 26 12.232758620689655 22.4 14.827586206896552 22.4C 17.42241379310345 22.4 19.646551724137932 28.8 22.24137931034483 28.8C 24.836206896551726 28.8 27.060344827586206 25.6 29.655172413793103 25.6C 32.25 25.6 34.474137931034484 30.4 37.06896551724138 30.4C 39.66379310344828 30.4 41.88793103448276 14 44.48275862068966 14C 47.077586206896555 14 49.30172413793103 27.6 51.89655172413793 27.6C 54.491379310344826 27.6 56.71551724137931 25.2 59.310344827586206 25.2C 61.9051724137931 25.2 64.12931034482759 24.4 66.72413793103448 24.4C 69.31896551724138 24.4 71.54310344827586 15.2 74.13793103448276 15.2C 76.73275862068965 15.2 78.95689655172414 19.6 81.55172413793103 19.6C 84.14655172413794 19.6 86.37068965517241 26 88.96551724137932 26C 91.5603448275862 26 93.7844827586207 23.6 96.37931034482759 23.6C 98.97413793103448 23.6 101.19827586206897 26 103.79310344827586 26C 106.38793103448276 26 108.61206896551724 29.2 111.20689655172414 29.2C 113.80172413793103 29.2 116.02586206896552 2.799999999999997 118.62068965517241 2.799999999999997C 121.2155172413793 2.799999999999997 123.4396551724138 18.8 126.03448275862068 18.8C 128.6293103448276 18.8 130.85344827586206 15.600000000000001 133.44827586206895 15.600000000000001C 136.04310344827584 15.600000000000001 138.26724137931035 29.2 140.86206896551724 29.2C 143.45689655172413 29.2 145.68103448275863 18.4 148.27586206896552 18.4C 150.8706896551724 18.4 153.0948275862069 22.8 155.68965517241378 22.8C 158.28448275862067 22.8 160.50862068965517 38.4 163.10344827586206 38.4C 165.69827586206895 38.4 167.92241379310346 21.6 170.51724137931035 21.6C 173.11206896551724 21.6 175.33620689655174 24.4 177.93103448275863 24.4C 180.52586206896552 24.4 182.75 15.2 185.3448275862069 15.2C 187.93965517241378 15.2 190.16379310344828 19.6 192.75862068965517 19.6C 195.35344827586206 19.6 197.57758620689657 26 200.17241379310346 26C 202.76724137931035 26 204.99137931034483 23.6 207.58620689655172 23.6C 210.1810344827586 23.6 212.4051724137931 13.2 215 13.2" pathFrom="M -1 40 L -1 40 L 7.413793103448276 40 L 14.827586206896552 40 L 22.24137931034483 40 L 29.655172413793103 40 L 37.06896551724138 40 L 44.48275862068966 40 L 51.89655172413793 40 L 59.310344827586206 40 L 66.72413793103448 40 L 74.13793103448276 40 L 81.55172413793103 40 L 88.96551724137932 40 L 96.37931034482759 40 L 103.79310344827586 40 L 111.20689655172414 40 L 118.62068965517241 40 L 126.03448275862068 40 L 133.44827586206895 40 L 140.86206896551724 40 L 148.27586206896552 40 L 155.68965517241378 40 L 163.10344827586206 40 L 170.51724137931035 40 L 177.93103448275863 40 L 185.3448275862069 40 L 192.75862068965517 40 L 200.17241379310346 40 L 207.58620689655172 40 L 215 40" fill-rule="evenodd" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #5ea6e5;"></path>
                    <g id="SvgjsG2340" class="apexcharts-series-markers-wrap" data:realIndex="0">
                      <g class="apexcharts-series-markers">
                        <circle id="SvgjsCircle2372" r="0" cx="163.10344827586206" cy="38.4" class="apexcharts-marker wtwfn7caki no-pointer-events" stroke="#ffffff" fill="#206bc4" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: #5ea6e5; --darkreader-inline-stroke: #e8e6e3;"></circle>
                      </g>
                    </g>
                  </g>
                  <g id="SvgjsG2343" class="apexcharts-series" seriesName="April" data:longestSeries="true" rel="2" data:realIndex="1">
                    <path id="SvgjsPath2346" d="M 0 2.799999999999997C 2.5948275862068964 2.799999999999997 4.818965517241379 18.4 7.413793103448276 18.4C 10.008620689655173 18.4 12.232758620689655 19.6 14.827586206896552 19.6C 17.42241379310345 19.6 19.646551724137932 30.4 22.24137931034483 30.4C 24.836206896551726 30.4 27.060344827586206 26 29.655172413793103 26C 32.25 26 34.474137931034484 26 37.06896551724138 26C 39.66379310344828 26 41.88793103448276 27.6 44.48275862068966 27.6C 47.077586206896555 27.6 49.30172413793103 13.2 51.89655172413793 13.2C 54.491379310344826 13.2 56.71551724137931 32.4 59.310344827586206 32.4C 61.9051724137931 32.4 64.12931034482759 22.8 66.72413793103448 22.8C 69.31896551724138 22.8 71.54310344827586 28.8 74.13793103448276 28.8C 76.73275862068965 28.8 78.95689655172414 25.6 81.55172413793103 25.6C 84.14655172413794 25.6 86.37068965517241 15.2 88.96551724137932 15.2C 91.5603448275862 15.2 93.7844827586207 15.600000000000001 96.37931034482759 15.600000000000001C 98.97413793103448 15.600000000000001 101.19827586206897 29.2 103.79310344827586 29.2C 106.38793103448276 29.2 108.61206896551724 24.4 111.20689655172414 24.4C 113.80172413793103 24.4 116.02586206896552 26 118.62068965517241 26C 121.2155172413793 26 123.4396551724138 23.6 126.03448275862068 23.6C 128.6293103448276 23.6 130.85344827586206 29.2 133.44827586206895 29.2C 136.04310344827584 29.2 138.26724137931035 26 140.86206896551724 26C 143.45689655172413 26 145.68103448275863 19.6 148.27586206896552 19.6C 150.8706896551724 19.6 153.0948275862069 21.6 155.68965517241378 21.6C 158.28448275862067 21.6 160.50862068965517 15.2 163.10344827586206 15.2C 165.69827586206895 15.2 167.92241379310346 25.2 170.51724137931035 25.2C 173.11206896551724 25.2 175.33620689655174 22.4 177.93103448275863 22.4C 180.52586206896552 22.4 182.75 18.8 185.3448275862069 18.8C 187.93965517241378 18.8 190.16379310344828 23.6 192.75862068965517 23.6C 195.35344827586206 23.6 197.57758620689657 14 200.17241379310346 14C 202.76724137931035 14 204.99137931034483 24.4 207.58620689655172 24.4C 210.1810344827586 24.4 212.4051724137931 25.2 215 25.2" fill="none" fill-opacity="1" stroke="rgba(102,115,130,1)" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="3" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskf2f5s8oh)" pathTo="M 0 2.799999999999997C 2.5948275862068964 2.799999999999997 4.818965517241379 18.4 7.413793103448276 18.4C 10.008620689655173 18.4 12.232758620689655 19.6 14.827586206896552 19.6C 17.42241379310345 19.6 19.646551724137932 30.4 22.24137931034483 30.4C 24.836206896551726 30.4 27.060344827586206 26 29.655172413793103 26C 32.25 26 34.474137931034484 26 37.06896551724138 26C 39.66379310344828 26 41.88793103448276 27.6 44.48275862068966 27.6C 47.077586206896555 27.6 49.30172413793103 13.2 51.89655172413793 13.2C 54.491379310344826 13.2 56.71551724137931 32.4 59.310344827586206 32.4C 61.9051724137931 32.4 64.12931034482759 22.8 66.72413793103448 22.8C 69.31896551724138 22.8 71.54310344827586 28.8 74.13793103448276 28.8C 76.73275862068965 28.8 78.95689655172414 25.6 81.55172413793103 25.6C 84.14655172413794 25.6 86.37068965517241 15.2 88.96551724137932 15.2C 91.5603448275862 15.2 93.7844827586207 15.600000000000001 96.37931034482759 15.600000000000001C 98.97413793103448 15.600000000000001 101.19827586206897 29.2 103.79310344827586 29.2C 106.38793103448276 29.2 108.61206896551724 24.4 111.20689655172414 24.4C 113.80172413793103 24.4 116.02586206896552 26 118.62068965517241 26C 121.2155172413793 26 123.4396551724138 23.6 126.03448275862068 23.6C 128.6293103448276 23.6 130.85344827586206 29.2 133.44827586206895 29.2C 136.04310344827584 29.2 138.26724137931035 26 140.86206896551724 26C 143.45689655172413 26 145.68103448275863 19.6 148.27586206896552 19.6C 150.8706896551724 19.6 153.0948275862069 21.6 155.68965517241378 21.6C 158.28448275862067 21.6 160.50862068965517 15.2 163.10344827586206 15.2C 165.69827586206895 15.2 167.92241379310346 25.2 170.51724137931035 25.2C 173.11206896551724 25.2 175.33620689655174 22.4 177.93103448275863 22.4C 180.52586206896552 22.4 182.75 18.8 185.3448275862069 18.8C 187.93965517241378 18.8 190.16379310344828 23.6 192.75862068965517 23.6C 195.35344827586206 23.6 197.57758620689657 14 200.17241379310346 14C 202.76724137931035 14 204.99137931034483 24.4 207.58620689655172 24.4C 210.1810344827586 24.4 212.4051724137931 25.2 215 25.2" pathFrom="M -1 40 L -1 40 L 7.413793103448276 40 L 14.827586206896552 40 L 22.24137931034483 40 L 29.655172413793103 40 L 37.06896551724138 40 L 44.48275862068966 40 L 51.89655172413793 40 L 59.310344827586206 40 L 66.72413793103448 40 L 74.13793103448276 40 L 81.55172413793103 40 L 88.96551724137932 40 L 96.37931034482759 40 L 103.79310344827586 40 L 111.20689655172414 40 L 118.62068965517241 40 L 126.03448275862068 40 L 133.44827586206895 40 L 140.86206896551724 40 L 148.27586206896552 40 L 155.68965517241378 40 L 163.10344827586206 40 L 170.51724137931035 40 L 177.93103448275863 40 L 185.3448275862069 40 L 192.75862068965517 40 L 200.17241379310346 40 L 207.58620689655172 40 L 215 40" fill-rule="evenodd" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #9f968a;"></path>
                    <g id="SvgjsG2344" class="apexcharts-series-markers-wrap" data:realIndex="1">
                      <g class="apexcharts-series-markers">
                        <circle id="SvgjsCircle2373" r="0" cx="163.10344827586206" cy="15.2" class="apexcharts-marker w54k4xmqcl no-pointer-events" stroke="#ffffff" fill="#667382" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: #9f968a; --darkreader-inline-stroke: #e8e6e3;"></circle>
                      </g>
                    </g>
                  </g>
                  <g id="SvgjsG2341" class="apexcharts-datalabels" data:realIndex="0"></g>
                  <g id="SvgjsG2345" class="apexcharts-datalabels" data:realIndex="1"></g>
                </g>
                <g id="SvgjsG2350" class="apexcharts-grid-borders" style="display: none;"></g>
                <line id="SvgjsLine2359" x1="0" y1="0" x2="215" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #454a4d;"></line>
                <line id="SvgjsLine2360" x1="0" y1="0" x2="215" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                <g id="SvgjsG2361" class="apexcharts-xaxis" transform="translate(0, 0)">
                  <g id="SvgjsG2362" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                </g>
                <g id="SvgjsG2369" class="apexcharts-yaxis-annotations"></g>
                <g id="SvgjsG2370" class="apexcharts-xaxis-annotations"></g>
                <g id="SvgjsG2371" class="apexcharts-point-annotations"></g>
              </g>
            </svg>
            <div class="apexcharts-tooltip apexcharts-theme-dark" style="left: 62.0097px; top: -35.4219px;">
              <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">12 Jul</div>
              <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 107, 196); --darkreader-inline-bgcolor: #1a569d;" data-darkreader-inline-bgcolor=""></span>
                <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                  <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">May: </span><span class="apexcharts-tooltip-text-y-value">4</span></div>
                  <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                  <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                </div>
              </div>
              <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(102, 115, 130); --darkreader-inline-bgcolor: #525c68;" data-darkreader-inline-bgcolor=""></span>
                <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                  <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">April: </span><span class="apexcharts-tooltip-text-y-value">62</span></div>
                  <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                  <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                </div>
              </div>
            </div>
            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
              <div class="apexcharts-yaxistooltip-text"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="subheader">Active users</div>
          <div class="ms-auto lh-1">
            <div class="dropdown">
              <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item active" href="#">Last 7 days</a>
                <a class="dropdown-item" href="#">Last 30 days</a>
                <a class="dropdown-item" href="#">Last 3 months</a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-baseline">
          <div class="h1 mb-3 me-2">2,986</div>
          <div class="me-auto">
            <span class="text-green d-inline-flex align-items-center lh-1">
              4% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                <path d="M3 17l6 -6l4 4l8 -8"></path>
                <path d="M14 7l7 0l0 7"></path>
              </svg>
            </span>
          </div>
        </div>
        <div id="chart-active-users" class="chart-sm" style="min-height: 40px;">
          <div id="apexchartsvwxyrgo7" class="apexcharts-canvas apexchartsvwxyrgo7 apexcharts-theme-light" style="width: 215px; height: 40px;"><svg id="SvgjsSvg2374" width="215" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent; --darkreader-inline-bgimage: initial; --darkreader-inline-bgcolor: transparent;" data-darkreader-inline-bgimage="" data-darkreader-inline-bgcolor="">
              <foreignObject x="0" y="0" width="215" height="40">
                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 20px;"></div>
              </foreignObject>
              <g id="SvgjsG2503" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
              <g id="SvgjsG2376" class="apexcharts-inner apexcharts-graphical" transform="translate(11.471264367816092, 0)">
                <defs id="SvgjsDefs2375">
                  <linearGradient id="SvgjsLinearGradient2381" x1="0" y1="0" x2="0" y2="1">
                    <stop id="SvgjsStop2382" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0" data-darkreader-inline-stopcolor="" style="--darkreader-inline-stopcolor: rgba(39, 43, 44, 0.4);"></stop>
                    <stop id="SvgjsStop2383" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1" data-darkreader-inline-stopcolor="" style="--darkreader-inline-stopcolor: rgba(49, 54, 56, 0.5);"></stop>
                    <stop id="SvgjsStop2384" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1" data-darkreader-inline-stopcolor="" style="--darkreader-inline-stopcolor: rgba(49, 54, 56, 0.5);"></stop>
                  </linearGradient>
                  <clipPath id="gridRectMaskvwxyrgo7">
                    <rect id="SvgjsRect2416" width="219.00000000000003" height="40" x="-9.471264367816092" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: none;"></rect>
                  </clipPath>
                  <clipPath id="forecastMaskvwxyrgo7"></clipPath>
                  <clipPath id="nonForecastMaskvwxyrgo7"></clipPath>
                  <clipPath id="gridRectMarkerMaskvwxyrgo7">
                    <rect id="SvgjsRect2417" width="204.05747126436782" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: none;"></rect>
                  </clipPath>
                </defs>
                <rect id="SvgjsRect2385" width="3.4492667459373765" height="40" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2381)" class="apexcharts-xcrosshairs" y2="40" filter="none" fill-opacity="0.9"></rect>
                <g id="SvgjsG2482" class="apexcharts-grid">
                  <g id="SvgjsG2483" class="apexcharts-gridlines-horizontal" style="display: none;">
                    <line id="SvgjsLine2486" x1="-7.471264367816092" y1="0" x2="207.52873563218392" y2="0" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                    <line id="SvgjsLine2487" x1="-7.471264367816092" y1="8" x2="207.52873563218392" y2="8" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                    <line id="SvgjsLine2488" x1="-7.471264367816092" y1="16" x2="207.52873563218392" y2="16" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                    <line id="SvgjsLine2489" x1="-7.471264367816092" y1="24" x2="207.52873563218392" y2="24" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                    <line id="SvgjsLine2490" x1="-7.471264367816092" y1="32" x2="207.52873563218392" y2="32" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                    <line id="SvgjsLine2491" x1="-7.471264367816092" y1="40" x2="207.52873563218392" y2="40" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #393d40;"></line>
                  </g>
                  <g id="SvgjsG2484" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                  <line id="SvgjsLine2493" x1="0" y1="40" x2="200.05747126436782" y2="40" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: transparent;"></line>
                  <line id="SvgjsLine2492" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: transparent;"></line>
                </g>
                <g id="SvgjsG2418" class="apexcharts-bar-series apexcharts-plot-series">
                  <g id="SvgjsG2419" class="apexcharts-series" rel="1" seriesName="Profits" data:realIndex="0">
                    <path id="SvgjsPath2423" d="M -1.7246333729686882 40.001 L -1.7246333729686882 25.201 L 1.7246333729686882 25.201 L 1.7246333729686882 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M -1.7246333729686882 40.001 L -1.7246333729686882 25.201 L 1.7246333729686882 25.201 L 1.7246333729686882 40.001 Z" pathFrom="M -1.7246333729686882 40.001 L -1.7246333729686882 40.001 L 1.7246333729686882 40.001 L 1.7246333729686882 40.001 L 1.7246333729686882 40.001 L 1.7246333729686882 40.001 L 1.7246333729686882 40.001 L -1.7246333729686882 40.001 Z" cy="25.2" cx="1.7246333729686882" j="0" val="37" barHeight="14.8" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2425" d="M 5.173900118906063 40.001 L 5.173900118906063 26.001 L 8.62316686484344 26.001 L 8.62316686484344 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 5.173900118906063 40.001 L 5.173900118906063 26.001 L 8.62316686484344 26.001 L 8.62316686484344 40.001 Z" pathFrom="M 5.173900118906063 40.001 L 5.173900118906063 40.001 L 8.62316686484344 40.001 L 8.62316686484344 40.001 L 8.62316686484344 40.001 L 8.62316686484344 40.001 L 8.62316686484344 40.001 L 5.173900118906063 40.001 Z" cy="26" cx="8.62316686484344" j="1" val="35" barHeight="14" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2427" d="M 12.072433610780816 40.001 L 12.072433610780816 22.401 L 15.521700356718192 22.401 L 15.521700356718192 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 12.072433610780816 40.001 L 12.072433610780816 22.401 L 15.521700356718192 22.401 L 15.521700356718192 40.001 Z" pathFrom="M 12.072433610780816 40.001 L 12.072433610780816 40.001 L 15.521700356718192 40.001 L 15.521700356718192 40.001 L 15.521700356718192 40.001 L 15.521700356718192 40.001 L 15.521700356718192 40.001 L 12.072433610780816 40.001 Z" cy="22.4" cx="15.521700356718192" j="2" val="44" barHeight="17.6" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2429" d="M 18.970967102655568 40.001 L 18.970967102655568 28.801000000000002 L 22.420233848592943 28.801000000000002 L 22.420233848592943 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 18.970967102655568 40.001 L 18.970967102655568 28.801000000000002 L 22.420233848592943 28.801000000000002 L 22.420233848592943 40.001 Z" pathFrom="M 18.970967102655568 40.001 L 18.970967102655568 40.001 L 22.420233848592943 40.001 L 22.420233848592943 40.001 L 22.420233848592943 40.001 L 22.420233848592943 40.001 L 22.420233848592943 40.001 L 18.970967102655568 40.001 Z" cy="28.8" cx="22.420233848592943" j="3" val="28" barHeight="11.2" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2431" d="M 25.86950059453032 40.001 L 25.86950059453032 25.601000000000003 L 29.318767340467694 25.601000000000003 L 29.318767340467694 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 25.86950059453032 40.001 L 25.86950059453032 25.601000000000003 L 29.318767340467694 25.601000000000003 L 29.318767340467694 40.001 Z" pathFrom="M 25.86950059453032 40.001 L 25.86950059453032 40.001 L 29.318767340467694 40.001 L 29.318767340467694 40.001 L 29.318767340467694 40.001 L 29.318767340467694 40.001 L 29.318767340467694 40.001 L 25.86950059453032 40.001 Z" cy="25.6" cx="29.318767340467694" j="4" val="36" barHeight="14.4" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2433" d="M 32.76803408640507 40.001 L 32.76803408640507 30.401 L 36.21730083234245 30.401 L 36.21730083234245 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 32.76803408640507 40.001 L 32.76803408640507 30.401 L 36.21730083234245 30.401 L 36.21730083234245 40.001 Z" pathFrom="M 32.76803408640507 40.001 L 32.76803408640507 40.001 L 36.21730083234245 40.001 L 36.21730083234245 40.001 L 36.21730083234245 40.001 L 36.21730083234245 40.001 L 36.21730083234245 40.001 L 32.76803408640507 40.001 Z" cy="30.4" cx="36.21730083234245" j="5" val="24" barHeight="9.6" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2435" d="M 39.666567578279825 40.001 L 39.666567578279825 14.001 L 43.115834324217204 14.001 L 43.115834324217204 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 39.666567578279825 40.001 L 39.666567578279825 14.001 L 43.115834324217204 14.001 L 43.115834324217204 40.001 Z" pathFrom="M 39.666567578279825 40.001 L 39.666567578279825 40.001 L 43.115834324217204 40.001 L 43.115834324217204 40.001 L 43.115834324217204 40.001 L 43.115834324217204 40.001 L 43.115834324217204 40.001 L 39.666567578279825 40.001 Z" cy="14" cx="43.115834324217204" j="6" val="65" barHeight="26" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2437" d="M 46.565101070154576 40.001 L 46.565101070154576 27.601000000000003 L 50.014367816091955 27.601000000000003 L 50.014367816091955 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 46.565101070154576 40.001 L 46.565101070154576 27.601000000000003 L 50.014367816091955 27.601000000000003 L 50.014367816091955 40.001 Z" pathFrom="M 46.565101070154576 40.001 L 46.565101070154576 40.001 L 50.014367816091955 40.001 L 50.014367816091955 40.001 L 50.014367816091955 40.001 L 50.014367816091955 40.001 L 50.014367816091955 40.001 L 46.565101070154576 40.001 Z" cy="27.6" cx="50.014367816091955" j="7" val="31" barHeight="12.4" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2439" d="M 53.46363456202933 40.001 L 53.46363456202933 25.201 L 56.912901307966706 25.201 L 56.912901307966706 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 53.46363456202933 40.001 L 53.46363456202933 25.201 L 56.912901307966706 25.201 L 56.912901307966706 40.001 Z" pathFrom="M 53.46363456202933 40.001 L 53.46363456202933 40.001 L 56.912901307966706 40.001 L 56.912901307966706 40.001 L 56.912901307966706 40.001 L 56.912901307966706 40.001 L 56.912901307966706 40.001 L 53.46363456202933 40.001 Z" cy="25.2" cx="56.912901307966706" j="8" val="37" barHeight="14.8" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2441" d="M 60.36216805390408 40.001 L 60.36216805390408 24.401 L 63.81143479984146 24.401 L 63.81143479984146 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 60.36216805390408 40.001 L 60.36216805390408 24.401 L 63.81143479984146 24.401 L 63.81143479984146 40.001 Z" pathFrom="M 60.36216805390408 40.001 L 60.36216805390408 40.001 L 63.81143479984146 40.001 L 63.81143479984146 40.001 L 63.81143479984146 40.001 L 63.81143479984146 40.001 L 63.81143479984146 40.001 L 60.36216805390408 40.001 Z" cy="24.4" cx="63.81143479984146" j="9" val="39" barHeight="15.6" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2443" d="M 67.26070154577884 40.001 L 67.26070154577884 15.200999999999999 L 70.70996829171622 15.200999999999999 L 70.70996829171622 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 67.26070154577884 40.001 L 67.26070154577884 15.200999999999999 L 70.70996829171622 15.200999999999999 L 70.70996829171622 40.001 Z" pathFrom="M 67.26070154577884 40.001 L 67.26070154577884 40.001 L 70.70996829171622 40.001 L 70.70996829171622 40.001 L 70.70996829171622 40.001 L 70.70996829171622 40.001 L 70.70996829171622 40.001 L 67.26070154577884 40.001 Z" cy="15.2" cx="70.70996829171622" j="10" val="62" barHeight="24.8" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2445" d="M 74.15923503765359 40.001 L 74.15923503765359 19.601000000000003 L 77.60850178359097 19.601000000000003 L 77.60850178359097 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 74.15923503765359 40.001 L 74.15923503765359 19.601000000000003 L 77.60850178359097 19.601000000000003 L 77.60850178359097 40.001 Z" pathFrom="M 74.15923503765359 40.001 L 74.15923503765359 40.001 L 77.60850178359097 40.001 L 77.60850178359097 40.001 L 77.60850178359097 40.001 L 77.60850178359097 40.001 L 77.60850178359097 40.001 L 74.15923503765359 40.001 Z" cy="19.6" cx="77.60850178359097" j="11" val="51" barHeight="20.4" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2447" d="M 81.05776852952835 40.001 L 81.05776852952835 26.001 L 84.50703527546573 26.001 L 84.50703527546573 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 81.05776852952835 40.001 L 81.05776852952835 26.001 L 84.50703527546573 26.001 L 84.50703527546573 40.001 Z" pathFrom="M 81.05776852952835 40.001 L 81.05776852952835 40.001 L 84.50703527546573 40.001 L 84.50703527546573 40.001 L 84.50703527546573 40.001 L 84.50703527546573 40.001 L 84.50703527546573 40.001 L 81.05776852952835 40.001 Z" cy="26" cx="84.50703527546573" j="12" val="35" barHeight="14" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2449" d="M 87.95630202140309 40.001 L 87.95630202140309 23.601000000000003 L 91.40556876734047 23.601000000000003 L 91.40556876734047 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 87.95630202140309 40.001 L 87.95630202140309 23.601000000000003 L 91.40556876734047 23.601000000000003 L 91.40556876734047 40.001 Z" pathFrom="M 87.95630202140309 40.001 L 87.95630202140309 40.001 L 91.40556876734047 40.001 L 91.40556876734047 40.001 L 91.40556876734047 40.001 L 91.40556876734047 40.001 L 91.40556876734047 40.001 L 87.95630202140309 40.001 Z" cy="23.6" cx="91.40556876734047" j="13" val="41" barHeight="16.4" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2451" d="M 94.85483551327785 40.001 L 94.85483551327785 26.001 L 98.30410225921523 26.001 L 98.30410225921523 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 94.85483551327785 40.001 L 94.85483551327785 26.001 L 98.30410225921523 26.001 L 98.30410225921523 40.001 Z" pathFrom="M 94.85483551327785 40.001 L 94.85483551327785 40.001 L 98.30410225921523 40.001 L 98.30410225921523 40.001 L 98.30410225921523 40.001 L 98.30410225921523 40.001 L 98.30410225921523 40.001 L 94.85483551327785 40.001 Z" cy="26" cx="98.30410225921523" j="14" val="35" barHeight="14" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2453" d="M 101.7533690051526 40.001 L 101.7533690051526 29.201 L 105.20263575108999 29.201 L 105.20263575108999 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 101.7533690051526 40.001 L 101.7533690051526 29.201 L 105.20263575108999 29.201 L 105.20263575108999 40.001 Z" pathFrom="M 101.7533690051526 40.001 L 101.7533690051526 40.001 L 105.20263575108999 40.001 L 105.20263575108999 40.001 L 105.20263575108999 40.001 L 105.20263575108999 40.001 L 105.20263575108999 40.001 L 101.7533690051526 40.001 Z" cy="29.2" cx="105.20263575108999" j="15" val="27" barHeight="10.8" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2455" d="M 108.65190249702735 40.001 L 108.65190249702735 2.800999999999997 L 112.10116924296473 2.800999999999997 L 112.10116924296473 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 108.65190249702735 40.001 L 108.65190249702735 2.800999999999997 L 112.10116924296473 2.800999999999997 L 112.10116924296473 40.001 Z" pathFrom="M 108.65190249702735 40.001 L 108.65190249702735 40.001 L 112.10116924296473 40.001 L 112.10116924296473 40.001 L 112.10116924296473 40.001 L 112.10116924296473 40.001 L 112.10116924296473 40.001 L 108.65190249702735 40.001 Z" cy="2.799999999999997" cx="112.10116924296473" j="16" val="93" barHeight="37.2" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #1a569d;"></path>
                    <path id="SvgjsPath2457" d="M 115.55043598890211 40.001 L 115.55043598890211 18.801000000000002 L 118.99970273483949 18.801000000000002 L 118.99970273483949 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 115.55043598890211 40.001 L 115.55043598890211 18.801000000000002 L 118.99970273483949 18.801000000000002 L 118.99970273483949 40.001 Z" pathFrom="M 115.55043598890211 40.001 L 115.55043598890211 40.001 L 118.99970273483949 40.001 L 118.99970273483949 40.001 L 118.99970273483949 40.001 L 118.99970273483949 40.001 L 118.99970273483949 40.001 L 115.55043598890211 40.001 Z" cy="18.8" cx="118.99970273483949" j="17" val="53" barHeight="21.2" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2459" d="M 122.44896948077685 40.001 L 122.44896948077685 15.601 L 125.89823622671423 15.601 L 125.89823622671423 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 122.44896948077685 40.001 L 122.44896948077685 15.601 L 125.89823622671423 15.601 L 125.89823622671423 40.001 Z" pathFrom="M 122.44896948077685 40.001 L 122.44896948077685 40.001 L 125.89823622671423 40.001 L 125.89823622671423 40.001 L 125.89823622671423 40.001 L 125.89823622671423 40.001 L 125.89823622671423 40.001 L 122.44896948077685 40.001 Z" cy="15.600000000000001" cx="125.89823622671423" j="18" val="61" barHeight="24.4" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2461" d="M 129.3475029726516 40.001 L 129.3475029726516 29.201 L 132.79676971858896 29.201 L 132.79676971858896 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 129.3475029726516 40.001 L 129.3475029726516 29.201 L 132.79676971858896 29.201 L 132.79676971858896 40.001 Z" pathFrom="M 129.3475029726516 40.001 L 129.3475029726516 40.001 L 132.79676971858896 40.001 L 132.79676971858896 40.001 L 132.79676971858896 40.001 L 132.79676971858896 40.001 L 132.79676971858896 40.001 L 129.3475029726516 40.001 Z" cy="29.2" cx="132.79676971858896" j="19" val="27" barHeight="10.8" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2463" d="M 136.24603646452636 40.001 L 136.24603646452636 18.401 L 139.69530321046372 18.401 L 139.69530321046372 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 136.24603646452636 40.001 L 136.24603646452636 18.401 L 139.69530321046372 18.401 L 139.69530321046372 40.001 Z" pathFrom="M 136.24603646452636 40.001 L 136.24603646452636 40.001 L 139.69530321046372 40.001 L 139.69530321046372 40.001 L 139.69530321046372 40.001 L 139.69530321046372 40.001 L 139.69530321046372 40.001 L 136.24603646452636 40.001 Z" cy="18.4" cx="139.69530321046372" j="20" val="54" barHeight="21.6" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2465" d="M 143.14456995640109 40.001 L 143.14456995640109 22.801000000000002 L 146.59383670233845 22.801000000000002 L 146.59383670233845 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 143.14456995640109 40.001 L 143.14456995640109 22.801000000000002 L 146.59383670233845 22.801000000000002 L 146.59383670233845 40.001 Z" pathFrom="M 143.14456995640109 40.001 L 143.14456995640109 40.001 L 146.59383670233845 40.001 L 146.59383670233845 40.001 L 146.59383670233845 40.001 L 146.59383670233845 40.001 L 146.59383670233845 40.001 L 143.14456995640109 40.001 Z" cy="22.8" cx="146.59383670233845" j="21" val="43" barHeight="17.2" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2467" d="M 150.04310344827584 40.001 L 150.04310344827584 32.400999999999996 L 153.4923701942132 32.400999999999996 L 153.4923701942132 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 150.04310344827584 40.001 L 150.04310344827584 32.400999999999996 L 153.4923701942132 32.400999999999996 L 153.4923701942132 40.001 Z" pathFrom="M 150.04310344827584 40.001 L 150.04310344827584 40.001 L 153.4923701942132 40.001 L 153.4923701942132 40.001 L 153.4923701942132 40.001 L 153.4923701942132 40.001 L 153.4923701942132 40.001 L 150.04310344827584 40.001 Z" cy="32.4" cx="153.4923701942132" j="22" val="19" barHeight="7.6" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2469" d="M 156.9416369401506 40.001 L 156.9416369401506 21.601000000000003 L 160.39090368608797 21.601000000000003 L 160.39090368608797 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 156.9416369401506 40.001 L 156.9416369401506 21.601000000000003 L 160.39090368608797 21.601000000000003 L 160.39090368608797 40.001 Z" pathFrom="M 156.9416369401506 40.001 L 156.9416369401506 40.001 L 160.39090368608797 40.001 L 160.39090368608797 40.001 L 160.39090368608797 40.001 L 160.39090368608797 40.001 L 160.39090368608797 40.001 L 156.9416369401506 40.001 Z" cy="21.6" cx="160.39090368608797" j="23" val="46" barHeight="18.4" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2471" d="M 163.84017043202536 40.001 L 163.84017043202536 24.401 L 167.28943717796272 24.401 L 167.28943717796272 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 163.84017043202536 40.001 L 163.84017043202536 24.401 L 167.28943717796272 24.401 L 167.28943717796272 40.001 Z" pathFrom="M 163.84017043202536 40.001 L 163.84017043202536 40.001 L 167.28943717796272 40.001 L 167.28943717796272 40.001 L 167.28943717796272 40.001 L 167.28943717796272 40.001 L 167.28943717796272 40.001 L 163.84017043202536 40.001 Z" cy="24.4" cx="167.28943717796272" j="24" val="39" barHeight="15.6" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2473" d="M 170.73870392390012 40.001 L 170.73870392390012 15.200999999999999 L 174.18797066983748 15.200999999999999 L 174.18797066983748 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 170.73870392390012 40.001 L 170.73870392390012 15.200999999999999 L 174.18797066983748 15.200999999999999 L 174.18797066983748 40.001 Z" pathFrom="M 170.73870392390012 40.001 L 170.73870392390012 40.001 L 174.18797066983748 40.001 L 174.18797066983748 40.001 L 174.18797066983748 40.001 L 174.18797066983748 40.001 L 174.18797066983748 40.001 L 170.73870392390012 40.001 Z" cy="15.2" cx="174.18797066983748" j="25" val="62" barHeight="24.8" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2475" d="M 177.63723741577485 40.001 L 177.63723741577485 19.601000000000003 L 181.0865041617122 19.601000000000003 L 181.0865041617122 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 177.63723741577485 40.001 L 177.63723741577485 19.601000000000003 L 181.0865041617122 19.601000000000003 L 181.0865041617122 40.001 Z" pathFrom="M 177.63723741577485 40.001 L 177.63723741577485 40.001 L 181.0865041617122 40.001 L 181.0865041617122 40.001 L 181.0865041617122 40.001 L 181.0865041617122 40.001 L 181.0865041617122 40.001 L 177.63723741577485 40.001 Z" cy="19.6" cx="181.0865041617122" j="26" val="51" barHeight="20.4" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2477" d="M 184.5357709076496 40.001 L 184.5357709076496 26.001 L 187.98503765358697 26.001 L 187.98503765358697 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 184.5357709076496 40.001 L 184.5357709076496 26.001 L 187.98503765358697 26.001 L 187.98503765358697 40.001 Z" pathFrom="M 184.5357709076496 40.001 L 184.5357709076496 40.001 L 187.98503765358697 40.001 L 187.98503765358697 40.001 L 187.98503765358697 40.001 L 187.98503765358697 40.001 L 187.98503765358697 40.001 L 184.5357709076496 40.001 Z" cy="26" cx="187.98503765358697" j="27" val="35" barHeight="14" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2479" d="M 191.43430439952436 40.001 L 191.43430439952436 23.601000000000003 L 194.88357114546173 23.601000000000003 L 194.88357114546173 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 191.43430439952436 40.001 L 191.43430439952436 23.601000000000003 L 194.88357114546173 23.601000000000003 L 194.88357114546173 40.001 Z" pathFrom="M 191.43430439952436 40.001 L 191.43430439952436 40.001 L 194.88357114546173 40.001 L 194.88357114546173 40.001 L 194.88357114546173 40.001 L 194.88357114546173 40.001 L 194.88357114546173 40.001 L 191.43430439952436 40.001 Z" cy="23.6" cx="194.88357114546173" j="28" val="41" barHeight="16.4" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <path id="SvgjsPath2481" d="M 198.33283789139912 40.001 L 198.33283789139912 13.200999999999999 L 201.7821046373365 13.200999999999999 L 201.7821046373365 40.001 Z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvwxyrgo7)" pathTo="M 198.33283789139912 40.001 L 198.33283789139912 13.200999999999999 L 201.7821046373365 13.200999999999999 L 201.7821046373365 40.001 Z" pathFrom="M 198.33283789139912 40.001 L 198.33283789139912 40.001 L 201.7821046373365 40.001 L 201.7821046373365 40.001 L 201.7821046373365 40.001 L 201.7821046373365 40.001 L 201.7821046373365 40.001 L 198.33283789139912 40.001 Z" cy="13.2" cx="201.7821046373365" j="29" val="67" barHeight="26.8" barWidth="3.4492667459373765" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #5ea6e5;"></path>
                    <g id="SvgjsG2421" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                      <g id="SvgjsG2422" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2424" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2426" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2428" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2430" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2432" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2434" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2436" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2438" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2440" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2442" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2444" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2446" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2448" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2450" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2452" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2454" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2456" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2458" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2460" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2462" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2464" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2466" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2468" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2470" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2472" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2474" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2476" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2478" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                      <g id="SvgjsG2480" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskvwxyrgo7)"></g>
                    </g>
                  </g>
                  <g id="SvgjsG2420" class="apexcharts-datalabels" data:realIndex="0"></g>
                </g>
                <g id="SvgjsG2485" class="apexcharts-grid-borders" style="display: none;"></g>
                <line id="SvgjsLine2494" x1="-7.471264367816092" y1="0" x2="207.52873563218392" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #454a4d;"></line>
                <line id="SvgjsLine2495" x1="-7.471264367816092" y1="0" x2="207.52873563218392" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                <g id="SvgjsG2496" class="apexcharts-xaxis" transform="translate(0, 0)">
                  <g id="SvgjsG2497" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                </g>
                <g id="SvgjsG2504" class="apexcharts-yaxis-annotations"></g>
                <g id="SvgjsG2505" class="apexcharts-xaxis-annotations"></g>
                <g id="SvgjsG2506" class="apexcharts-point-annotations"></g>
              </g>
            </svg>
            <div class="apexcharts-tooltip apexcharts-theme-dark">
              <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
              <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 107, 196); --darkreader-inline-bgcolor: #1a569d;" data-darkreader-inline-bgcolor=""></span>
                <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                  <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                  <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                  <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                </div>
              </div>
            </div>
            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
              <div class="apexcharts-yaxistooltip-text"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
            <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M17 17h-11v-14h-2"></path>
                <path d="M6 5l14 1l-1 7h-13"></path>
              </svg>
            </span>
          </div>
          <div class="col">
            <div class="font-weight-medium">
              78 Orders
            </div>
            <div class="text-muted">
              32 shipped
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
            <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z"></path>
              </svg>
            </span>
          </div>
          <div class="col">
            <div class="font-weight-medium">
              623 Shares
            </div>
            <div class="text-muted">
              16 today
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
<!-- Social Media Traffic -->
<div class="row">
  <div class="col-md-6 col-lg-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Social Media Traffic</h3>
      </div>
      <table class="table card-table table-vcenter">
        <thead>
          <tr>
            <th>Network</th>
            <th colspan="2">Visitors</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Instagram</td>
            <td>3,550</td>
            <td class="w-50">
              <div class="progress progress-xs">
                <div class="progress-bar bg-primary" style="width: 71.0%"></div>
              </div>
            </td>
          </tr>
          <tr>
            <td>Twitter</td>
            <td>1,798</td>
            <td class="w-50">
              <div class="progress progress-xs">
                <div class="progress-bar bg-primary" style="width: 35.96%"></div>
              </div>
            </td>
          </tr>
          <tr>
            <td>Facebook</td>
            <td>1,245</td>
            <td class="w-50">
              <div class="progress progress-xs">
                <div class="progress-bar bg-primary" style="width: 24.9%"></div>
              </div>
            </td>
          </tr>
          <tr>
            <td>TikTok</td>
            <td>986</td>
            <td class="w-50">
              <div class="progress progress-xs">
                <div class="progress-bar bg-primary" style="width: 19.72%"></div>
              </div>
            </td>
          </tr>
          <tr>
            <td>Pinterest</td>
            <td>854</td>
            <td class="w-50">
              <div class="progress progress-xs">
                <div class="progress-bar bg-primary" style="width: 17.08%"></div>
              </div>
            </td>
          </tr>
          <tr>
            <td>VK</td>
            <td>650</td>
            <td class="w-50">
              <div class="progress progress-xs">
                <div class="progress-bar bg-primary" style="width: 13.0%"></div>
              </div>
            </td>
          </tr>
          <tr>
            <td>Pinterest</td>
            <td>420</td>
            <td class="w-50">
              <div class="progress progress-xs">
                <div class="progress-bar bg-primary" style="width: 8.4%"></div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="col-md-12 col-lg-8">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tasks</h3>
      </div>
      <div class="table-responsive">
        <table class="table card-table table-vcenter">
          <tbody>
            <tr>
              <td class="w-1 pe-0">
                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
              </td>
              <td class="w-100">
                <a href="#" class="text-reset">Extend the data model.</a>
              </td>
              <td class="text-nowrap text-muted">
                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                  <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                  <path d="M16 3v4"></path>
                  <path d="M8 3v4"></path>
                  <path d="M4 11h16"></path>
                  <path d="M11 15h1"></path>
                  <path d="M12 15v3"></path>
                </svg>
                August 04, 2021
              </td>
              <td class="text-nowrap">
                <a href="#" class="text-muted">
                  <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                    <path d="M5 12l5 5l10 -10"></path>
                  </svg>
                  2/7
                </a>
              </td>
              <td class="text-nowrap">
                <a href="#" class="text-muted">
                  <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                    <path d="M8 9h8"></path>
                    <path d="M8 13h6"></path>
                    <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                  </svg>
                  3</a>
              </td>
              <td>
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
              </td>
            </tr>
            <tr>
              <td class="w-1 pe-0">
                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
              </td>
              <td class="w-100">
                <a href="#" class="text-reset">Verify the event flow.</a>
              </td>
              <td class="text-nowrap text-muted">
                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                  <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                  <path d="M16 3v4"></path>
                  <path d="M8 3v4"></path>
                  <path d="M4 11h16"></path>
                  <path d="M11 15h1"></path>
                  <path d="M12 15v3"></path>
                </svg>
                January 03, 2019
              </td>
              <td class="text-nowrap">
                <a href="#" class="text-muted">
                  <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                    <path d="M5 12l5 5l10 -10"></path>
                  </svg>
                  3/10
                </a>
              </td>
              <td class="text-nowrap">
                <a href="#" class="text-muted">
                  <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                    <path d="M8 9h8"></path>
                    <path d="M8 13h6"></path>
                    <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                  </svg>
                  6</a>
              </td>
              <td>
                <span class="avatar avatar-sm">JL</span>
              </td>
            </tr>
            <tr>
              <td class="w-1 pe-0">
                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
              </td>
              <td class="w-100">
                <a href="#" class="text-reset">Database backup and maintenance</a>
              </td>
              <td class="text-nowrap text-muted">
                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                  <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                  <path d="M16 3v4"></path>
                  <path d="M8 3v4"></path>
                  <path d="M4 11h16"></path>
                  <path d="M11 15h1"></path>
                  <path d="M12 15v3"></path>
                </svg>
                December 28, 2018
              </td>
              <td class="text-nowrap">
                <a href="#" class="text-muted">
                  <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                    <path d="M5 12l5 5l10 -10"></path>
                  </svg>
                  0/6
                </a>
              </td>
              <td class="text-nowrap">
                <a href="#" class="text-muted">
                  <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                    <path d="M8 9h8"></path>
                    <path d="M8 13h6"></path>
                    <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                  </svg>
                  1</a>
              </td>
              <td>
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/002m.jpg)"></span>
              </td>
            </tr>
            <tr>
              <td class="w-1 pe-0">
                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
              </td>
              <td class="w-100">
                <a href="#" class="text-reset">Identify the implementation team.</a>
              </td>
              <td class="text-nowrap text-muted">
                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                  <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                  <path d="M16 3v4"></path>
                  <path d="M8 3v4"></path>
                  <path d="M4 11h16"></path>
                  <path d="M11 15h1"></path>
                  <path d="M12 15v3"></path>
                </svg>
                November 07, 2020
              </td>
              <td class="text-nowrap">
                <a href="#" class="text-muted">
                  <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                    <path d="M5 12l5 5l10 -10"></path>
                  </svg>
                  6/10
                </a>
              </td>
              <td class="text-nowrap">
                <a href="#" class="text-muted">
                  <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                    <path d="M8 9h8"></path>
                    <path d="M8 13h6"></path>
                    <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                  </svg>
                  12</a>
              </td>
              <td>
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
              </td>
            </tr>
            <tr>
              <td class="w-1 pe-0">
                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
              </td>
              <td class="w-100">
                <a href="#" class="text-reset">Define users and workflow</a>
              </td>
              <td class="text-nowrap text-muted">
                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                  <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                  <path d="M16 3v4"></path>
                  <path d="M8 3v4"></path>
                  <path d="M4 11h16"></path>
                  <path d="M11 15h1"></path>
                  <path d="M12 15v3"></path>
                </svg>
                November 23, 2021
              </td>
              <td class="text-nowrap">
                <a href="#" class="text-muted">
                  <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                    <path d="M5 12l5 5l10 -10"></path>
                  </svg>
                  3/7
                </a>
              </td>
              <td class="text-nowrap">
                <a href="#" class="text-muted">
                  <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                    <path d="M8 9h8"></path>
                    <path d="M8 13h6"></path>
                    <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                  </svg>
                  5</a>
              </td>
              <td>
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000f.jpg)"></span>
              </td>
            </tr>
            <tr>
              <td class="w-1 pe-0">
                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
              </td>
              <td class="w-100">
                <a href="#" class="text-reset">Check Pull Requests</a>
              </td>
              <td class="text-nowrap text-muted">
                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                  <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                  <path d="M16 3v4"></path>
                  <path d="M8 3v4"></path>
                  <path d="M4 11h16"></path>
                  <path d="M11 15h1"></path>
                  <path d="M12 15v3"></path>
                </svg>
                January 14, 2021
              </td>
              <td class="text-nowrap">
                <a href="#" class="text-muted">
                  <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                    <path d="M5 12l5 5l10 -10"></path>
                  </svg>
                  2/9
                </a>
              </td>
              <td class="text-nowrap">
                <a href="#" class="text-muted">
                  <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"></path>
                    <path d="M8 9h8"></path>
                    <path d="M8 13h6"></path>
                    <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                  </svg>
                  3</a>
              </td>
              <td>
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/001f.jpg)"></span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection