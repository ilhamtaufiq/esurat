<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        Aplikasi Manajemen Surat - Disperkim Cianjur
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins/apex/apexcharts.css')}}">

        @vite(['resources/scss/light/assets/components/list-group.scss'])
        @vite(['resources/scss/light/assets/widgets/modules-widgets.scss'])

        @vite(['resources/scss/dark/assets/components/list-group.scss'])
        @vite(['resources/scss/dark/assets/widgets/modules-widgets.scss'])

        @vite(['resources/scss/light/assets/elements/alert.scss'])
        @vite(['resources/scss/dark/assets/elements/alert.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Layouts</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div class="row layout-top-spacing">
        <div class="col-12">
            <div class="alert alert-arrow-right alert-icon-right alert-light-success alert-dismissible fade show mb-4" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                <strong>{{ $greeting }}</strong> Surat masuk hari ini {{ $currentDate }}: {{ $todayIncomingLetter }} surat
            </div>
        </div>


        {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
             <x-widgets._w-four title="Visitors by Browser"/>
        </div>

        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
            <x-widgets._w-hybrid-one value="{{ $sumIncomingLetter }}" title="Total Surat Masuk" chart-id="daily-sales"/>
        </div> --}}

    </div>

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

        <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
        {{-- <script src="{{asset('plugins/apex/custom-apexcharts.js')}}"></script> --}}
        @vite(['resources/assets/js/widgets/modules-widgets.js'])

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
