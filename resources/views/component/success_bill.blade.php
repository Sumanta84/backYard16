@extends('structure.template')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg" style="margin-left: 250px;">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Billing</li>
                </ol>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">

        <!-- <form action="{{route('print.bill')}}" method="POST" id="asas" target="_blank"> -->
            @csrf
            <h5>Download the pdf. Your invoice id: {{$invoice_id}}</h5>
            <p>Thank you for using our service.</p>
            <!-- <input type="text" name="unique_id" value="{{$unique_id}}"> -->

            <a class="btn btn-secondary mb-0" href="{{route('print.bill', ['unique_id' => $unique_id])}}" target="_blank">Downlolad Pdf</a>


            <!-- <div class="col-6 text-end" id="">
                <button class="btn btn-secondary mb-0" type="submit" id="download_pdf">Downlolad Pdf</button>
            </div> -->


        <!-- </form> -->
    </div>
</main>
