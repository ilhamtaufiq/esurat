<div class="row widget-statistic">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
        <div class="widget widget-one_hybrid widget-followers">
            <div class="widget-heading">
                <div class="w-title">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <div class="">
                        <p class="w-value">{{ $value }}</p>
                        <h5 class="">{{$title}}</h5>
                    </div>
                </div>
            </div>
            <div class="widget-content">
                <div class="w-chart">
                    <div id="{{$chartId}}"></div>
                </div>
            </div>
        </div>
    </div>
</div>
