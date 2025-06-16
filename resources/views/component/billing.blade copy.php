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
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group input-group-outline">
                        <label class="form-label">Type here...</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <ul class="navbar-nav d-flex align-items-center  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
                    </li>
                    <li class="mt-1">
                        <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="material-symbols-rounded fixed-plugin-button-nav">settings</i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-symbols-rounded">notifications</i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                            <i class="material-symbols-rounded">account_circle</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-md-12 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <h6 class="mb-0">Client Information</h6>
                                    </div>
                                    <div class="col-6 text-end" id="new_client_btn">
                                        <a class="btn bg-gradient-dark mb-0" href="javascript:;" onclick="add_new_client()"><i class="material-symbols-rounded text-sm">add</i>&nbsp;&nbsp;Add New Client</a>
                                    </div>
                                    <div class="col-6 text-end" id="existing_client_btn">
                                        <a class="btn bg-gradient-dark mb-0" href="javascript:;" onclick="existing_client()"><i class="material-symbols-rounded text-sm">add</i>&nbsp;&nbsp;Existing Client</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3" id="existing_client">
                                <div class="row">
                                    <div class="col-md-6 mb-md-0 mb-6">
                                        <div class="card card-body border card-plain border-radius-lg d-flex align-items-center ">

                                            <label for="">Select client</label>
                                            <select class="form-select" id="selectclient" name="selectclient" onchange="getclientdetails(this)">
                                                <option value="" selected disabled>Select Client</option>

                                                <option value="1">A</option>
                                                <option value="2">B</option>

                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                            <img class="w-10 me-3 mb-0" src="../assets/img/logos/visa.png" alt="logo">
                                            <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                                            <i class="material-symbols-rounded ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card">edit</i>
                                        </div>
                                    </div> -->
                                </div>

                                <!-- <h6>New Client?</h6> -->

                            </div>

                            <div class="card-body p-3" id="new_client">
                                <div class="row">
                                    <div class="col-md-6 mb-6">
                                        <label for="">Client Name: </label>
                                        <input type="text" name="client_name" id="client_name" placeholder="Client Name">
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <label for="">Company Name: </label>
                                        <input type="text" name="company_name" id="company_name" placeholder="Company Name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-6">
                                        <label for="">Ph No.</label>
                                        <input type="text" name="client_name" id="client_name" placeholder="Client Name">
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <label for="">Email: </label>
                                        <input type="text" name="company_name" id="company_name" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-6">
                                        <label for="">Address: </label>
                                        <textarea name="" id=""></textarea>
                                    </div>

                                </div>



                            </div>




                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-7 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Billing Information</h6>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group" id="workTypeList">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <div class="row">
                                        <label for="wt1">Work type 1: </label>
                                        <select class="form-select" id="wt1" name="selectwt1" onchange="">
                                            <option value="" selected>Select Work type 1</option>
                                            @foreach($work_type1_data as $key => $value)
                                            <option value="{{$value->id}}" `>{{$value->wt_1_item}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="row">
                                        <label for="wt2">Work type 2: </label>
                                        <select class="form-select" id="wt2" name="selectwt2" onchange="">
                                            <option value="" selected>Select Work type 2</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="ms-auto text-end">
                                    <button class="btn btn-link text-danger text-gradient px-3 mb-0 remove-item"><i class="material-symbols-rounded text-sm me-2">delete</i>Delete</button>
                                </div>
                                <!-- <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-symbols-rounded text-sm me-2">delete</i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-symbols-rounded text-sm me-2">edit</i>Edit</a>
                                </div> -->
                            </li>

                        </ul>

                        <button class="btn btn-primary mt-3" id="addMore">Add More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mt-4">
                <div class="card h-100 mb-4">
                    <div class="card-header pb-0 px-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-0">Your Transaction's</h6>
                            </div>
                            <div class="col-md-6 d-flex justify-content-start justify-content-md-end align-items-center">
                                <i class="material-symbols-rounded me-2 text-lg">date_range</i>
                                <small>23 - 30 March 2020</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Newest</h6>
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-symbols-rounded text-lg">expand_more</i></button>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Netflix</h6>
                                        <span class="text-xs">27 March 2020, at 12:30 PM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                                    - $ 2,500
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-symbols-rounded text-lg">expand_less</i></button>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Apple</h6>
                                        <span class="text-xs">27 March 2020, at 04:30 AM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                    + $ 2,000
                                </div>
                            </li>
                        </ul>
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3">Yesterday</h6>
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-symbols-rounded text-lg">expand_less</i></button>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Stripe</h6>
                                        <span class="text-xs">26 March 2020, at 13:45 PM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                    + $ 750
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-symbols-rounded text-lg">expand_less</i></button>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">HubSpot</h6>
                                        <span class="text-xs">26 March 2020, at 12:30 PM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                    + $ 1,000
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-symbols-rounded text-lg">expand_less</i></button>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Creative Tim</h6>
                                        <span class="text-xs">26 March 2020, at 08:30 AM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                    + $ 2,500
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-symbols-rounded text-lg">priority_high</i></button>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Webflow</h6>
                                        <span class="text-xs">26 March 2020, at 05:00 AM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                                    Pending
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>

<script src="{{ asset('assets/js/custom/component/client-list.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        existing_client();
    });

    function add_new_client() {
        $('#existing_client').hide();
        $('#new_client').show();
        $('#new_client_btn').hide();
        $('#existing_client_btn').show();
    }

    function existing_client() {
        $('#existing_client').show();
        $('#new_client').hide();
        $('#existing_client_btn').hide();
        $('#new_client_btn').show();
    }

    $(document).ready(function() {
        // $("#wt1").change(function() {
        //     var workType1Id = $(this).val();
        //     $("#wt2").html('<option value="">Loading...</option>'); // Show loading state
        //     console.log(workType1Id);

            // if (workType1Id) {
            //     $.ajax({
            //         url: "{{ route('get.worktype2') }}", // Laravel route
            //         type: "GET",
            //         data: {
            //             work_type1_id: workType1Id
            //         },
            //         success: function(data) {
            //             $("#wt2").html('<option value="">Select Work Type 2</option>');
            //             $.each(data, function(key, value) {
            //                 $("#wt2").append('<option value="' + value.id + '">' + value.wt_2_item + '</option>');
            //             });
            //         }
            //     });
            // } else {
            //     $("#wt2").html('<option value="">Select Work Type 2</option>');
            // }
        // });

        $(".wt1_change").change(function() {
            // var workType1Id = $(this).val();
            // $(".wt2_change").html('<option value="">Loading...</option>'); // Show loading state
            // console.log(workType1Id);

            // if (workType1Id) {
            //     $.ajax({
            //         url: "{{ route('get.worktype2') }}", // Laravel route
            //         type: "GET",
            //         data: {
            //             work_type1_id: workType1Id
            //         },
            //         success: function(data) {
            //             $(".wt2_change").html('<option value="">Select Work Type 2</option>');
            //             $.each(data, function(key, value) {
            //                 $(".wt2_change").append('<option value="' + value.id + '">' + value.wt_2_item + '</option>');
            //             });
            //         }
            //     });
            // } else {
            //     $(".wt2_change").html('<option value="">Select Work Type 2</option>');
            // }
        });
    });

    $(document).ready(function() {
        $("#addMore").click(function() {
            var counter = 2;
            var newItem = `
            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                    <div class="row">
                        <label for="wt1_${counter}">Work type 1:</label>
                        <select class="form-select wt1_change" id="wt1_${counter}" name="selectwt1[]">
                            <option value="" selected>Select Work Type 1</option>
                            @foreach($work_type1_data as $value)
                                <option value="{{ $value->id }}">{{ $value->wt_1_item }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row mt-2">
                        <label for="wt2">Work type 2:</label>
                        <select class="form-select wt2_change" id="wt2_${counter}" name="selectwt2[]">
                            <option value="" selected>Select Work Type 2</option>
                        </select>
                    </div>
                </div>
                <div class="ms-auto text-end">
                    <button class="btn btn-link text-danger text-gradient px-3 mb-0 remove-item"><i class="material-symbols-rounded text-sm me-2">delete</i>Delete</button>
                </div>
            </li>
        `;
            $("#workTypeList").append(newItem);
        });
    });
</script>
