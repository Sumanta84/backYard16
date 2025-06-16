@extends('structure.template')
@section('content')

<style>
    .client_heading {
        display: block;
        font-size: 15px;
        font-weight: 600;
        color: #37373d;
    }

    input.input_div {
        width: 100%;
        background-color: #e1e1e1 !important;
        border: 1px solid #eee;
        border-radius: 4px;
        height: 50px;
        padding: 0 15px;
    }

    textarea.input_div {
        width: 100%;
        background-color: #e1e1e1 !important;
        border: 1px solid #eee;
        border-radius: 4px;
        height: 100px;
        padding: 0 15px;
    }

    select.form-select.select_list {
        width: 100%;
        background-color: #e1e1e1;
        border: 1px solid #eee;
        border-radius: 4px;
        height: 50px;
        padding: 0 15px;
    }


    .select_box .arrow_icon {

        bottom: 18%;
    }

    .card.card-plain {
        border: none !important;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px !important;
        padding: 25px 20px 35px !important;
    }

    span.span_div {
        border: 1px solid #eee;
        height: 50px;
        width: 100%;
        background: #e1e1e1;
        border-radius: 5px;
        padding: 10px;
    }

	.table.dashboard-table thead th {
    padding: 0.5rem 0.5rem !important;
}
</style>


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg" style="margin-left: 250px;">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
        <div class="container-fluid py-2">
        <div class="row mb-4">
            <div class="ms-3">
                <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>
                <p class="mb-4">
                    Check the updated sales and invoice history.
                </p>
            </div>
            <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-2 ps-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-sm mb-0 text-capitalize">Todays Earning</p>
                                <h4 class="mb-0">₹ {{number_format($todaysTotalAmount)}}</h4>
                            </div>
                            <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                                <i class="material-symbols-rounded opacity-10">currency_rupee</i>
                            </div>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-2 ps-3">
                        <p class="mb-0 text-sm"><span class="text-success font-weight-bolder"></p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-2 ps-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-sm mb-0 text-capitalize">Todays Total Invoice</p>
                                <h4 class="mb-0">2300</h4>
                            </div>
                            <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                                <i class="material-symbols-rounded opacity-10">receipt</i>
                            </div>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-2 ps-3">
                        <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+3% </span>than last month</p>
                    </div>
                </div>
            </div> -->
            <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-2 ps-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-sm mb-0 text-capitalize">Total Earning</p>
                                <h4 class="mb-0">₹ {{number_format($totalAmount)}}</h4>
                            </div>
                            <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                                <i class="material-symbols-rounded opacity-10">payments</i>
                            </div>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-2 ps-3">
                        <!-- <p class="mb-0 text-sm"><span class="text-danger font-weight-bolder">-2% </span>than yesterday</p> -->
                    </div>
                </div>
            </div>
            <!-- <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-header p-2 ps-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-sm mb-0 text-capitalize">Total Invoice</p>
                                <h4 class="mb-0">$103,430</h4>
                            </div>
                            <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                                <i class="material-symbols-rounded opacity-10">receipt_long</i>
                            </div>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-2 ps-3">
                        <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+5% </span>than yesterday</p>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="row mb-4">
            <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Invoice</h6>
                                <p class="text-sm mb-0">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    <span class="font-weight-bold ms-1">Latest Invoice</span>
                                </p>
                            </div>
                            <!-- <div class="col-lg-6 col-5 my-auto text-end">
                                <div class="dropdown float-lg-end pe-4">
                                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-secondary"></i>
                                    </a>
                                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0 dashboard-table">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Invoice ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Client Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Company Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Project Title</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount</th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                   @foreach($latest_invoice as $invoice)

                                    <tr>
                                        <td>
                                            <div class="d-flex py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$invoice->invoice_id}}</h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        @if($invoice->bill_type === 'gst')
                                                        GST Bill
                                                        @elseif($invoice->bill_type === 'non gst')
                                                        Non-GST Bill
                                                        @else
                                                        Unknown Type
                                                        @endif</p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$invoice->name}}</h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$invoice->company_name}}</h6>
                                                </div>
                                            </div>
                                        </td>


                                        <td class="align-middle text-sm">
                                            <span class="text-xs font-weight-bold"> {{$invoice->project_title}} </span>
                                        </td>
                                        @if($invoice->bill_type === 'gst')
                                        <td class="align-middle text-sm">
                                            <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span><span class="text-xs font-weight-bold"> {{number_format(round($invoice->total_amount+$invoice->total_gst_amount))}}.00 </span>
                                        </td>
                                        @elseif($invoice->bill_type === 'non gst')
                                        <td class="align-middle text-sm">
                                            <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span><span class="text-xs font-weight-bold"> {{number_format(round($invoice->total_amount))}}.00 </span>
                                        </td>
                                        @endif

                                        <td class="align-middle text-sm">
                                            <span class="text-xs font-weight-bold"> {{ \Carbon\Carbon::parse($invoice->created_at)->format('Y-m-d') }}</span>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header pb-0">
                        <h6>Orders overview</h6>
                        <p class="text-sm">
                            <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                            <span class="font-weight-bold">24%</span> this month
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="timeline timeline-one-side">
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="material-symbols-rounded text-success text-gradient">notifications</i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="material-symbols-rounded text-danger text-gradient">code</i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="material-symbols-rounded text-info text-gradient">shopping_cart</i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="material-symbols-rounded text-warning text-gradient">credit_card</i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="material-symbols-rounded text-primary text-gradient">key</i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <span class="timeline-step">
                                    <i class="material-symbols-rounded text-dark text-gradient">payments</i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

    </div>
    </div>
</main>


