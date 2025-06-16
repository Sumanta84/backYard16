                                                @extends('structure.template')
@section('content')

<style>
    .client_heading {
        display: block;
        font-size: 13px;
        font-weight: 600;
        color: #37373d;
        margin-bottom: 4px;
    }

    input.input_div {
        width: 100%;
        background-color: #ffffff !important;
        border: 1px solid #dcdcdc;
        border-radius: 17px;
        height: 50px;
        padding: 0 15px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    textarea.input_div {
        width: 100%;
        background-color: #ffffff !important;
        border: 1px solid #dcdcdc;
        border-radius: 17px;
        height: 100px;
        padding: 0 15px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    select.form-select.select_list {
        width: 100%;
        background-color: #ffffff;
        border: 1px solid #dcdcdc;
        border-radius: 17px;
        height: 50px;
        padding: 0 15px;
        box-shadow: rgb(79 82 86 / 32%) 0px 8px 24px;
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
        border: 1px solid #dcdcdc;
        height: 50px;
        width: 100%;
        background: #ffffff;
        border-radius: 17px;
        display: inline-block;
        padding: 10px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .billing_btn {
        display: flex;
        justify-content: right;
        gap: 12px;
    }

    .billing_btn1 {
        display: flex !important;
    }

    .li {
        margin-bottom: 2px;
        border-bottom: 1px solid #a6a6a687;
        padding-bottom: 10px;
    }


    .select2-container .select2-selection--single {
        padding-top: 0;
    }

    /* -------------------------------- */


    .select2-container--default .select2-selection--single {
        height: 38px;
        border: 1px solid #ced4da;
        border-radius: 0.375rem;
        padding: 6px 12px;
    }

    .select2-selection__rendered {
        line-height: 26px !important;
    }

    .select2-selection__arrow {
        height: 100% !important;
    }

    .select2-container {
        width: 100% !important;
    }

    .form_body {
        background: #ffffff;
        padding: 35px 50px;
        border-radius: 10px;
    }
</style>
<style>
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #444;
        line-height: 28px;
        background: #ffffff;
        height: 50px;
        border: 1px solid #dcdcdc;
        border-radius: 17px;
        left: -10px;
        position: relative;
        width: 100%;
        /* box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px !important; */
        box-shadow: rgb(79 82 86 / 32%) 0px 8px 24px;
    }

    .select2-container--default .select2-selection--single {

        border: none !important;

    }

    body {
        overflow-x: hidden;
    }

    .select2-container--default .select2-selection--single {
        border: none !important;
        outline: none;
    }

    .select2-container .select2-selection--single {
        height: 57px !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__placeholder {
        color: #737373;
        font-size: 14px;
        margin-top: 10px;
        display: inline-block;
        padding-left: 5px;
    }

    .form-control:focus {
        color: #404040;
        background-color: #fff !important;
        border-color: #dcdcdc !important;
        outline: 0;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: -3px !important;
        right: 33px !important;
        width: 20px;
    }

    .card {
        padding: 15px 20px;
    }

    .card .card-body {
        padding: 0 !important;
    }

    .card .card-header {
        padding-left: 0 !important;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        padding: 10px !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__placeholder {
        margin-top: 0;
    }

    #c_details {
        padding: 25px;
        background: #fbf7d8;
        border-radius: 13px;
        width: 47%;
        box-shadow: rgb(100 100 111 / 15%) 0px 7px 29px 0px;
        background: linear-gradient(180deg, rgba(222, 224, 251, 1) 0%, rgba(255, 255, 255, 1) 64%);

    }

    .select2-selection__rendered {
        font-size: 14px !important;
        color: #9d9d9d !important;
    }

    #c_details .client_heading {
        font-size: 16px;
        margin: 0;
    }

    h6#c_name {
        margin-bottom: 5px !important;
        margin-top: 10px;
        color: #635c5c;
    }

    #c_details .text-dark {
        color: #3e2f2f !important;
    }

    .card-header h6 {
        position: relative;
        display: inline;
        margin-bottom: 22px;
    }

    .card-header h6::before {
        position: absolute;
        content: "";
        background: #d5000063;
        height: 5px;
        width: 18%;
        bottom: -7px;
        left: 2px;
        border-radius: 11px;
        border: none;
    }

    .card-header h6::after {
        position: absolute;

        content: "";
        background: #d5000063;
        height: 5px;
        width: 53%;
        bottom: -7px;
        left: 31px;
        border-radius: 11px;
        border: none;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        width: 104%;
    }

    .card .card-header {
        padding: 0 !important;
    }

    .select2-container--default .select2-selection--single {
        padding-top: 0 !important;
    }

    .form-select {

        background-position: right 18px center !important;
    }

    button#addMore {
        margin-bottom: 2px;
    }
</style>


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
        <div class="form_body">
            <form action="{{route('bill.save')}}" method="POST" id="asas">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">

                            <div class="col-md-12 mb-lg-4 mb-4">
                                <div class="card">
                                    <div class="card-header pb-0 ">
                                        <div class="row">
                                            <div class="col-6 d-flex align-items-center">
                                                <h6>Client Information</h6>
                                            </div>
                                            <div class="col-6 text-end" id="new_client_btn">
                                                <a class="btn bg-gradient-dark mb-0" href="javascript:;" onclick="add_new_client()"><i class="material-symbols-rounded text-sm">add</i>  Add New Client</a>
                                            </div>
                                            <div class="col-6 text-end" id="existing_client_btn">
                                                <a class="btn bg-gradient-dark mb-0" href="javascript:;" onclick="existing_client()"><i class="material-symbols-rounded text-sm">add</i>  Existing Client</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body " id="existing_client">
                                        <div class="row">
                                            <div class="col-sm-6 mb-md-0 mb-6">
                                                <div class="align-items-left ">
                                                    <input type="hidden" name="edit_client_id" id="edit_client_id" value="{{$edit_bill_details[0]->bill_client_id}}">
                                                    <label for="select_client" class="client_heading">Select client</label>
                                                    <select class="form-select select_list select2" id="selectclient" name="selectclient">
                                                        <option value="" selected>Select Client</option>
                                                        @foreach($all_client as $key => $client_data)
                                                        <option value="{{$client_data->id}}" {{ $client_data->id == $edit_bill_details[0]->bill_client_id ? 'selected' : '' }}>{{$client_data->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="col-sm-6 mb-md-0 mb-6 d-none" id="c_details">
                                                <div class=" align-items-center ">
                                                    <label for="select_client" class="client_heading">Client Details</label>
                                                    <div class="d-flex flex-column align-items-start p-l-3">

                                                        <h6 class="mb-3 text-sm" id="c_name"></h6>

                                                        <span class="mb-2 text-xs d-none" id="com_h_name">Company Name: <span class="text-dark font-weight-bold ms-sm-2" id="com_name"></span></span>

                                                        <span class="mb-2 text-xs d-none" id="c_h_email">Email Address: <span class="text-dark ms-sm-2 font-weight-bold" id="c_email"></span></span>

                                                        <span class="mb-2 text-xs d-none" id="c_h_ph">Ph No*: <span class="text-dark ms-sm-2 font-weight-bold" id="c_ph"></span></span>

                                                        <span class="mb-2 text-xs d-none" id="c_h_pan">PAN No: <span class="text-dark ms-sm-2 font-weight-bold" id="c_pan"></span></span>

                                                        <span class="mb-2 text-xs d-none" id="c_h_gst">GST No: <span class="text-dark ms-sm-2 font-weight-bold" id="c_gst"></span></span>
                                                    </div>
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="card-body p-3" id="new_client">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="client_name" class="client_heading">Client Name*: </label>
                                                <input type="text" class="form-control input_div" name="client_name" id="client_name" placeholder="Client Name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="company_name" class="client_heading">Company Name: </label>
                                                <input type="text" name="company_name" id="company_name" placeholder="Company Name"
                                                    class="form-control input_div">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6  mb-3">
                                                <label for="ph_no" class="client_heading">Ph No*: </label>
                                                <input type="number" name="ph_no" id="ph_no" placeholder="Phone No"
                                                    class="form-control input_div">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email" class="client_heading">Email: </label>
                                                <input type="email" name="email" id="email" placeholder="Email"
                                                    class="form-control input_div">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6  mb-3">
                                                <label for="pan_no" class="client_heading">PAN No: </label>
                                                <input type="text" name="pan_no" id="pan_no" placeholder="PAN No"
                                                    class="form-control input_div">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="gst_no" class="client_heading">GST No: </label>
                                                <input type="text" name="gst_no" id="gst_no" placeholder="GST No"
                                                    class="form-control input_div">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="address" class="client_heading">Address*: </label>
                                                <textarea name="address" id="address" class="form-control input_div"></textarea>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                            </div>

                            <div class="col-md-12 mb-md-4 mb-4">
                                <div class="card card-body border  border-radius-lg d-flex align-items-left ">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="card-header pb-0 px-3">
                                                <h6>Project Information</h6>


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="select_client" class="client_heading">Project Title</label>

                                            <input type="text" name="project_title" id="project_title" placeholder="Project Title"
                                                class="form-control input_div" value="{{$edit_bill_details[0]->project_title}}">
                                        </div>
                                    </div>






                                </div>
                            </div>


                            <div class="col-md-12 mb-md-4 mb-4">
                                <div class="card card-body border  border-radius-lg d-flex align-items-left ">
                                    <div class="row ">
                                        <div class="col-md-12 mb-3">
                                            <div class="card-header pb-0 px-3">
                                                <h6>Order Information</h6>


                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="order_date" class="client_heading">Order date</label>

                                            <input type="date" name="order_date" id="order_date" placeholder="order date"
                                                class="form-control input_div" value="{{$edit_bill_details[0]->order_date}}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="place_of_supply" class="client_heading">Place of supply</label>

                                            <input type="text" name="place_of_supply" id="place_of_supply" placeholder="Place of supply"
                                                class="form-control input_div" value="{{$edit_bill_details[0]->place_of_supply}}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="vehicle_no" class="client_heading">Vehicle no</label>

                                            <input type="text" name="vehicle_no" id="vehicle_no" placeholder="Vehicle no"
                                                class="form-control input_div" value="{{$edit_bill_details[0]->vehicle_no}}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="invoice_date" class="client_heading">Invoice date</label>

                                            <input type="date" name="invoice_date" id="invoice_date" placeholder="invoice date"
                                                class="form-control input_div" value="{{$edit_bill_details[0]->invoice_date}}">
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <label for="order_no" class="client_heading">Order no</label>

                                            <input type="text" name="order_no" id="order_no" placeholder="Order no"
                                                class="form-control input_div" value="{{$edit_bill_details[0]->order_no}}">
                                        </div>
                                        <div class="col-sm-5 mt-2">
                                            <label for="tax_reverse_charge " class="client_heading">Tax is payble on reverse charge </label>
                                            <!-- <span id="unit_1" class="span_div"></span> -->
                                            <select name="tax_reverse_charge" id="tax_reverse_charge" class="form-select select_list">
                                                <!-- <option value="" selected>Select tax</option> -->
                                                <option value="Yes" {{ 'Yes' == $edit_bill_details[0]->tax_reverse_charge ? 'selected' : '' }}>Yes</option>
                                                <option value="No" {{ 'No' == $edit_bill_details[0]->tax_reverse_charge ? 'selected' : '' }}>No</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header pb-0 px-3">
                                <h6 class="mb-0">Billing Information</h6>
                                <div class="billing_btn">

                                    <input type="text" id="edit_gst" value="{{$edit_bill_details[0]->bill_type}}">

                                    <input type="text" id="edit_igst" value="{{$edit_bill_details[0]->igst}}">

                                    <div class="form-check form-switch ps-0 billing_btn1">
                                        <input class="form-check-input ms-auto" type="checkbox" name="gst_bill" id="gst_bill">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="gst_bill">GST Bill</label>
                                    </div>


                                </div>

                            </div>


                            <div class="row gst_edit" id="gst_block">
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="igst" id="igst">
                                        <label class="form-check-label" for="igst">
                                            IGST
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-4 p-3">

                                <ul class="list-group" id="workTypeList">
                                    @foreach($edit_bill_details as $key=>$bill_data)

                                    <div class="li">
                                        <div class="row mb-2">
                                            <input type="hidden" id="wt1_id_{{$key+1}}" value="{{$bill_data->wt1_id}}">

                                            <div class="col-sm-6">
                                                <div class="select_box">
                                                    <label for="wt1_{{$key+1}}" class="client_heading">Work type 1: </label>
                                                    <select class="form-select select_list wt1_change select2" id="wt1_{{$key+1}}" name="selectwt1[]">
                                                        <option value="" selected>Select Work type 1</option>
                                                        @foreach($work_type1_data as $key1 => $value)
                                                        <option value="{{$value->id}}" {{ $bill_data->wt1_id == $value->id ? 'selected' : '' }}>{{$value->wt_1_item}}</option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                            </div>




                                            <input type="hidden" id="wt2_id_{{$key+1}}" value="{{$bill_data->wt2_id}}">

                                            <div class="col-sm-6" id="wt2_select_{{$key+1}}">
                                                <div class="select_box">
                                                    <label for="wt2_{{$key+1}}" class="client_heading">Work type 2: </label>
                                                    <select class="form-select select_list wt2_change select2" id="wt2_{{$key+1}}" name="selectwt2[]" onchange="">
                                                        <option value="" selected>Select Work type 2</option>
                                                    </select>

                                                </div>
                                            </div>


                                            <div class="col-sm-6 mt-1" id="wt2_details_1" style="display: none;">
                                                <div class="select_box">

                                                    <label for="wt2_details_1" class="client_heading">Work Type 2 Details: </label>

                                                    <input type="text" class="form-control input_div wt2_details" name="selectwt2[]" id="wt2_1">
                                                </div>
                                            </div>



                                        </div>

                                        <!-- hsn code and gst block -->
                                        <div id="hsn_gst" class="hsn_gst" style="display: none;">

                                            <div class="row  mb-3" id="hsn_block_gst_{{$key+1}}" style="display: none;">
                                                <div class="col-sm-6">
                                                    <label for="hsn" class="client_heading">HSN Code: </label>

                                                    <input type="text" id="hsn_show_gst_{{$key+1}}" class="form-control input_div" value="" disabled>

                                                    <input type="hidden" name="hsn[]" id="hsn_gst_{{$key+1}}" class="form-control input_div" value="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="gst" class="client_heading">GST: </label>

                                                    <input type="number" id="gst_show_block_gst_{{$key+1}}" class="form-control input_div" value="" disabled>


                                                    <input type="hidden" name="gst[]" id="gst_block_gst_{{$key+1}}" class="form-control input_div" value="">
                                                </div>
                                            </div>


                                            <div class="row  mb-3 " id="hsn_block_other_{{$key+1}}" style="display: none;">
                                                <div class="col-sm-6">
                                                     <label for="hsn" class="client_heading">HSN Code: </label>
                                                    <input type="text" name="hsn[]" id="hsn_other_{{$key+1}}" class="form-control input_div" value="">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="gst" class="client_heading">GST: </label>
                                                    <input type="number" name="other_gst[]" id="other_gst_{{$key+1}}" class="form-control input_div" value="">
                                                </div>
                                            </div>

                                        </div>
                                        <!-- hsn code and gst block -->
                                        <div class="row ">
                                            <div class="col-sm-3">
                                                <label for="unit_{{$key+1}}" class="client_heading">Unit: </label>
                                                <!-- <span id="unit_1" class="span_div"></span> -->
                                                <select name="unit[]" id="unit" class="form-select select_list">
                                                    <option value="" selected>Select Unit</option>
                                                    <option value="sq.ft" {{ 'sq.ft' == $bill_data->unit ? 'selected' : '' }}>Sq.ft</option>
                                                    <option value="number" {{ 'number' == $bill_data->unit ? 'selected' : '' }}>Number</option>
                                                    <option value="months" {{ 'months' == $bill_data->unit ? 'selected' : '' }}>Months</option>
                                                </select>
                                            </div>




                                            <div class="col-sm-3">
                                                <label for="rate_{{$key+1}}" class="client_heading">Rate: </label>
                                                <input type="number" name="input_rate[]" id="input_rate_{{$key+1}}" class="form-control input_div duplicate_rate_input" value="{{$bill_data->rate}}">
                                                <!-- <span id="rate_1" class="span_div duplicate_rate_span"></span> -->

                                            </div>
                                            <div class="col-sm-3">
                                                <label for="quantity_{{$key+1}}" class="client_heading">Quantity: </label>
                                                <input type="number" class="form-control input_div item_quantity" name="qty[]" id="qty_{{$key+1}}" value="{{$bill_data->rate}}">
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="total_{{$key+1}}" class="client_heading">Total: </label>
                                                <span id="total_{{$key+1}}" class="span_div"></span>
                                            </div>
                                        </div>

                                        <div class="row mb-3 mt-2">


                                            <div class="col-sm-6">
                                                <label for="desc_{{$key+1}}" class="client_heading">Description: </label>
                                                <textarea name="desc[]" id="desc_{{$key+1}}" class="form-control input_div"></textarea>
                                            </div>
                                        </div>

                                        <div class="ms-auto text-end">
                                            <button class="btn btn-link text-danger text-gradient px-3 mb-0 remove-item" type="button"><i class="material-symbols-rounded text-sm me-2">delete</i>Delete</button>
                                        </div>

                                        <div class="row">


                                        </div>
                                    </div>

                                    @endforeach
                                </ul>


                                <button type="button" class="btn btn-primary mt-3" id="addMore">Add More</button>
                            </div>
                            <span id="error_msg" class="text-center text-danger"></span>
                            @if (session('error'))
                            <div id="errorMessage" class="alert alert-danger">
                                {{ session('error') }}
                            </div>

                            <script>
                                setTimeout(() => {
                                    const errorBox = document.getElementById('errorMessage');
                                    if (errorBox) {
                                        errorBox.style.display = 'none';
                                    }
                                }, 5000); // 5000ms = 5 seconds
                            </script>
                            @endif
                        </div>
                    </div>

                </div>


                <div class="col-6 text-end" id="">
                    <button class="btn btn-secondary mb-0" type="button" id="preview_btn" style="display: none;">Preview</button>
                    <button class="btn bg-gradient-dark mb-0" type="submit">Create Bill</button>
                </div>


            </form>
        </div>
    </div>


    <!-- Bootstrap Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Bill Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="invoice-box">
                        <h4 class="text-center fw-bold">GENERATED INVOICE</h4>
                        <div class="d-flex justify-content-between">
                            <p><strong>Invoice No:</strong> XXXXXXXXXXXX</p>
                            <p><strong>Date: </strong><span id="bill_date"></span></p>
                        </div>

                        <div class="text-center">
                            <!-- <h5>OUR COMPANY LOGO</h5> -->
                            <img src="{{ asset('assets/img/logo/backyard16.webp') }}" alt="logo" srcset="" style="width: 30%">
                            <p>5/14, Netaji Nagar Road, Kolkata- 700040</p>
                            <p><u>backyardsixteen@gmail.com, 7003805353, 9874816447</u></p>
                        </div>

                        <p><strong>Bill To: </strong><span id="client_name_preview"></span></p>
                        <p><strong>Project Title: </strong><span id="project_title_preview"></span></p>

                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Serial No:</th>
                                    <th>Description</th>
                                    <th>Work Type</th>
                                    <th>Requirement</th>
                                    <th>Rate (₹)</th>
                                    <th>Price (₹)</th>
                                </tr>
                            </thead>
                            <tbody id="bill_body">

                            </tbody>
                        </table>

                        <p class="fw-bold text-center mt-3">Total Amount in words: <span id="price_in_word"></span></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</main>

<script src="{{ asset('assets/js/custom/component/client-list.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/number-to-words"></script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Select2 JS (after jQuery!) -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<!-- add more -->
<script>
    $(document).ready(function() {
        $("#addMore").click(function() {
            var newItem = `
            <div class="li">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <div class="select_box">
                            <label for="wt1_${counter}" class="client_heading">Work type 1:</label>

                            <select class="form-select select_list wt1_change select2 w1_change_js" id="wt1_${counter}" name="selectwt1[]">
                                <option value="" selected>Select Work Type 1</option>
                                @foreach($work_type1_data as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->wt_1_item }}</option>
                                @endforeach
                            </select>


                        </div>
                    </div>
                    <div class="col-sm-6" id="wt2_select_${counter}">
                        <div class="select_box">
                            <label for="wt2_${counter}" class="client_heading">Work type 2:</label>
                            <select class="form-select select_list wt2_change select2 w2_change_js" id="wt2_${counter}" name="selectwt2[]">
                                <option value="" selected>Select Work Type 2</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-sm-6 mt-1" id="wt2_details_${counter}" style="display: none;">
                        <div class="select_box">

                            <label for="wt2_details_${counter}" class="client_heading">Work Type 2 Details: </label>

                            <input type="text" class="form-control input_div wt2_details" name="selectwt2[]" id="wt2_${counter}">

                        </div>
                    </div>
                </div>

								<div id="hsn_gst" class="hsn_gst" style="display: none;">
                                    <div class="row  mb-3" id="hsn_block_gst_${counter}" style="display: none;">
                                        <div class="col-sm-6">
                                            <label for="hsn" class="client_heading">HSN Code: </label>

                                            <input type="text" id="hsn_show_gst_${counter}" class="form-control input_div" value="" disabled>

                                            <input type="hidden" name="hsn[]" id="hsn_gst_${counter}" class="form-control input_div" value="">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="gst" class="client_heading">GST: </label>

                                            <input type="number" id="gst_show_block_gst_${counter}" class="form-control input_div" value="" disabled>

                                            <input type="hidden" name="gst[]" id="gst_block_gst_${counter}" class="form-control input_div" value="">
                                        </div>
                                    </div>



                                    <div class="row  mb-3 " id="hsn_block_other_${counter}" style="display: none;">
                                        <div class="col-sm-6">
                                            <label for="hsn" class="client_heading">HSN Code: </label>
                                            <input type="text" name="hsn[]" id="hsn_other_${counter}" class="form-control input_div" value="">
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="gst" class="client_heading">GST: </label>
                                            <input type="number" name="other_gst[]" id="other_gst_${counter}" class="form-control input_div" value="">
                                        </div>
                                    </div>
								</div>

                <div class="row ">
                    <div class="col-sm-3">
                        <label for="unit_${counter}" class="client_heading">Unit: </label>



                        <select name="unit[]" id="unit_${counter}" class="form-select select_list">
                                             <option value="" selected>Select Unit</option>
                                             <option value="sq.ft">Sq.ft</option>
                                             <option value="number">Number</option>
                                             <option value="months">Months</option>
                                             </select>

                    </div>

                    <div class="col-sm-3">
                        <label for="rate_${counter}" class="client_heading">Rate: </label>

                        <input type="number" name="input_rate[]" id="input_rate_${counter}" class="form-control input_div duplicate_rate_input">




                    </div>
                     <div class="col-sm-3">
                        <label for="quantity_${counter}" class="client_heading">Quantity: </label>
                        <input type="number" class="form-control input_div item_quantity" name="qty[]" id="qty_${counter}">
                    </div>

                    <div class="col-sm-3">
                        <label for="total_${counter}" class="client_heading">Total: </label>
                        <span id="total_${counter}" class="span_div"></span>

                    </div>
                </div>



                <div class="row mb-3 mt-2">
                    <div class="col-sm-6">
                        <label for="desc_${counter}" class="client_heading">Description: </label>
                        <textarea name="desc[]" id="desc_${counter}" class="form-control input_div"></textarea>

                    </div>
                </div>



                <div class="ms-auto text-end">
                    <button class="btn btn-link text-danger text-gradient px-3 mb-0 remove-item" type="button"><i class="material-symbols-rounded text-sm me-2">delete</i>Delete</button>
                </div>
            </div>
        `;

            $("#workTypeList").append(newItem);

            $.getScript('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', function() {
                $('.w1_change_js').select2({
                    placeholder: "Select Work type 1",
                });
            });

            $('.select2').on('select2:open', function() {
                let searchField = document.querySelector('.select2-container--open .select2-search__field');
                if (searchField) {
                    searchField.focus();
                }
            });

            $.getScript('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', function() {
                $('.w2_change_js').select2();
            });

            $(document).on('select2:open', () => {
                document.querySelector('.select2-container--open .select2-search__field').focus();
            });

            counter++;
            count++;

            $('.wt1_change').on('change', function() {
                var workType1Id = $(this).val();
                var selectId = this.id;
                var wt2Dropdown = $("#" + selectId.replace("wt1", "wt2"));

                let newId = selectId.replace("wt1_", "");

                if (workType1Id) {
                    $.ajax({
                        url: "{{ route('get.worktype2') }}", // Laravel route
                        type: "GET",
                        data: {
                            work_type1_id: workType1Id
                        },
                        success: function(data) {

                            if (data == '') {
                                $('#wt2_details_' + newId).show();
                                $('#wt2_select_' + newId).hide();


                                $('#hsn_block_other_' + newId).show();
                                $('#hsn_block_gst_' + newId).hide();
                            } else {
                                $('#wt2_details_' + newId).hide();
                                $('#wt2_select_' + newId).show();
                                $('#hsn_block_other_' + newId).hide();
                                $('#hsn_block_gst_' + newId).show();



                                $(wt2Dropdown).html('<option value="">Select Work Type 2</option>');
                                $.each(data, function(key, value) {
                                    $(wt2Dropdown).append('<option value="' + value.id + '">' + value.wt_2_item + '</option>');
                                });
                            }
                        }
                    });
                } else {
                    $(wt2Dropdown).html('<option value="">Select Work Type 2</option>');
                }
            });


            $(document).on("change", ".wt2_change", function() {
                var workType1Id = $(this).val();
                var selectId = this.id;
                let newId = selectId.replace("wt2_", "");

                // console.log(workType1Id);

                if (workType1Id) {
                    $.ajax({
                        url: "{{ route('get.worktype2.rate') }}",
                        type: "GET",
                        data: {
                            id: workType1Id
                        },
                        success: function(data) {

                            // console.log(data);

                            $('#gst_show_block_gst_' + newId).val(data.gst);
                            $('#gst_block_gst_' + newId).val(data.gst);


                            $('#hsn_gst_' + newId).val(data.hsn_code);
                            $('#hsn_show_gst_' + newId).val(data.hsn_code);
                        }
                    });
                } else {
                    $(wt2Dropdown).html('<option value="">Select Work Type 2</option>');
                }
            });
        });

    });
</script>
<!-- add more -->

<script>
    $('#selectclient').select2({
        placeholder: "Select Client",

    });

    // ===========================client data==============================
    $('#selectclient').on('change', function() {
        var client_id = $(this).val();
        // console.log(client_id);

        if (client_id) {
            $.ajax({
                url: "{{ route('get.client-data') }}",
                type: "GET",
                data: {
                    client_id: client_id
                },
                success: function(data) {
                    // console.log(data);
                    document.getElementById("c_details").classList.remove("d-none");
                    $("#c_details").show();

                    $("#c_name").text(data.name);
                    if (data.company_name) {
                        document.getElementById("com_h_name").classList.remove("d-none");
                        $("#com_name").text(data.company_name);
                    } else {
                        document.getElementById("com_h_name").classList.add("d-none");

                        $("#com_name").text();
                    }
                    if (data.email) {
                        document.getElementById("c_h_email").classList.remove("d-none");
                        $("#c_email").text(data.email);
                    } else {
                        document.getElementById("c_h_email").classList.add("d-none");
                        $("#c_email").text();
                    }

                    if (data.ph_no) {
                        document.getElementById("c_h_ph").classList.remove("d-none");
                        $("#c_ph").text(data.ph_no);
                    } else {
                        document.getElementById("c_h_ph").classList.add("d-none");
                        $("#c_ph").text();
                    }

                    if (data.pan_no) {
                        document.getElementById("c_h_pan").classList.remove("d-none");
                        $("#c_pan").text(data.pan_no);
                    } else {
                        document.getElementById("c_h_pan").classList.add("d-none");
                        $("#c_pan").text();
                    }

                    if (data.gst_no) {
                        document.getElementById("c_h_gst").classList.remove("d-none");
                        $("#c_gst").text(data.gst_no);
                    } else {
                        document.getElementById("c_h_gst").classList.add("d-none");
                        $("#c_gst").text();
                    }
                }
            });
        } else {
            document.getElementById("c_details").classList.add("d-none");
            $("#c_details").hide();
        }
    });
    // ===========================client data============================

    $('.select2').on('select2:open', function() {
        let searchField = document.querySelector('.select2-container--open .select2-search__field');
        if (searchField) {
            searchField.focus();
        }
    });


    $('.wt1_change').select2({
        placeholder: "Select Work type 1",

    });

    $('.select2').on('select2:open', function() {
        let searchField = document.querySelector('.select2-container--open .select2-search__field');
        if (searchField) {
            searchField.focus();
        }
    });

    $('.wt2_change').select2({
        placeholder: "Select Work type 2"

    });

    $(document).on('select2:open', () => {
        document.querySelector('.select2-container--open .select2-search__field').focus();
    });

    // ==============edit bill============================

    $(document).ready(function() {

        var bill_data = @json($edit_bill_details);
        // var a = bill_data.length;
        // var counter = bill_data.length;
        // var count = bill_data.length;



        $.each(bill_data, function(key, value) {
            var workType1Id = $('#wt1_id_' + (parseInt(key) + 1)).val();
            var selectId = 'wt1_' + (parseInt(key) + 1);
            var wt2Dropdown = $("#" + selectId.replace("wt1", "wt2"));

            console.log(value);

            if (value.bill_type == 'gst') {
                $('.hsn_gst').show();
            }

            $('#total_' + (parseInt(key) + 1)).text(parseInt(value.quantity) * parseInt(value.rate));

            $('#desc_' + (parseInt(key) + 1)).text(value.description);


            if (workType1Id) {
                $.ajax({
                    url: "{{ route('get.worktype2') }}", // Laravel route
                    type: "GET",
                    data: {
                        work_type1_id: workType1Id
                    },
                    success: function(data) {
                        console.log(data);

                        if (data == '') {
                            $('#wt2_details_' + (parseInt(key) + 1)).show();
                            $('#wt2_select_' + (parseInt(key) + 1)).hide();
                            $('#hsn_block_other_' + (parseInt(key) + 1)).show();
                            $('#hsn_block_gst_' + (parseInt(key) + 1)).hide();

                            $('#hsn_other_' + (parseInt(key) + 1)).val(value.hsn_code);

                            $('#other_gst_' + (parseInt(key) + 1)).val(value.gst_rate);

                        } else {

                            // console.log(wt2Dropdown);


                            $('#wt2_details_' + (parseInt(key) + 1)).hide();
                            $('#wt2_select_' + (parseInt(key) + 1)).show();
                            $('#hsn_block_other_' + (parseInt(key) + 1)).hide();
                            $('#hsn_block_gst_' + (parseInt(key) + 1)).show();

                            $('#hsn_show_gst_' + (parseInt(key) + 1)).val(value.hsn_code);

                            $('#hsn_gst_' + (parseInt(key) + 1)).val(value.hsn_code);

                            $('#gst_show_block_gst_' + (parseInt(key) + 1)).val(value.gst_rate);

                            $('#gst_block_gst_' + (parseInt(key) + 1)).val(value.gst_rate);



                            $(wt2Dropdown).html('<option value="">Select Work Type 2</option>');
                            $.each(data, function(data_key, data_value) {
                                // console.log(data_value);
                                let selected = (data_value.id == value.wt2_id) ? 'selected' : '';
                                $(wt2Dropdown).append('<option value="' + data_value.id + '" ' + selected + ' >' + data_value.wt_2_item + '</option>');
                            });
                        }
                    }
                });
            } else {
                $(wt2Dropdown).html('<option value="">Select Work Type 2</option>');
            }

        });






    });

    // ==============edit bill============================

    $('.wt1_change').on('change', function() {
        var workType1Id = $(this).val();
        var selectId = this.id;
        let extractedValue = selectId.split('_')[1];
        var wt2Dropdown = $("#" + selectId.replace("wt1", "wt2"));

        console.log(workType1Id, extractedValue, selectId, wt2Dropdown);

        if (workType1Id) {
            $.ajax({
                url: "{{ route('get.worktype2') }}", // Laravel route
                type: "GET",
                data: {
                    work_type1_id: workType1Id
                },
                success: function(data) {

                    if (data == '') {
                        $('#wt2_details_' + extractedValue).show();
                        $('#wt2_select_' + extractedValue).hide();
                        $('#hsn_block_other_' + extractedValue).show();
                        $('#hsn_block_gst_' + extractedValue).hide();

                    } else {



                        $('#wt2_details_' + extractedValue).hide();
                        $('#wt2_select_' + extractedValue).show();
                        $('#hsn_block_other_' + extractedValue).hide();
                        $('#hsn_block_gst_' + extractedValue).show();

                        $(wt2Dropdown).html('<option value="">Select Work Type 2</option>');
                        $.each(data, function(key, value) {
                            $(wt2Dropdown).append('<option value="' + value.id + '">' + value.wt_2_item + '</option>');
                        });
                    }
                }
            });
        } else {
            $(wt2Dropdown).html('<option value="">Select Work Type 2</option>');
        }
    });


    $(document).on("change", ".wt2_change", function() {
        var workType1Id = $(this).val();
        var selectId = this.id;
        let newId = selectId.replace("wt2_", "");


        if (workType1Id) {
            $.ajax({
                url: "{{ route('get.worktype2.rate') }}",
                type: "GET",
                data: {
                    id: workType1Id
                },
                success: function(data) {


                    $('#gst_show_block_gst_' + newId).val(data.gst);
                    $('#gst_block_gst_' + newId).val(data.gst);


                    $('#hsn_gst_' + newId).val(data.hsn_code);
                    $('#hsn_show_gst_' + newId).val(data.hsn_code);

                }
            });
        } else {
            $(wt2Dropdown).html('<option value="">Select Work Type 2</option>');
        }
    });
</script>


<script>
    $(document).ready(function() {
        existing_client();
    });

    function add_new_client() {
        $('#existing_client').hide();
        $('#new_client').show();
        $('#new_client_btn').hide();
        $('#existing_client_btn').show();
        $("#selectclient").val('');
        document.getElementById("c_details").classList.add("d-none");
        $("#c_details").hide();
    }

    function existing_client() {
        $('#existing_client').show();
        $('#new_client').hide();
        $('#existing_client_btn').hide();
        $('#new_client_btn').show();

        $("#client_name").val('');
        $("#company_name").val('');
        $("#ph_no").val('');
        $("#email").val('');
        $("#pan_no").val('');
        $("#gst_no").val('');
        $("#address").val('');

    }


    // ====================client_data====================

    $(document).ready(function() {
        // $("#c_details").hide();

        var c_id = $('#edit_client_id').val();
        // console.log(c_id);

        if (c_id) {
            $.ajax({
                url: "{{ route('get.client-data') }}",
                type: "GET",
                data: {
                    client_id: c_id
                },
                success: function(data) {
                    document.getElementById("c_details").classList.remove("d-none");
                    $("#c_details").show();

                    $("#c_name").text(data.name);
                    if (data.company_name) {
                        document.getElementById("com_h_name").classList.remove("d-none");
                        $("#com_name").text(data.company_name);
                    } else {
                        document.getElementById("com_h_name").classList.add("d-none");

                        $("#com_name").text();
                    }
                    if (data.email) {
                        document.getElementById("c_h_email").classList.remove("d-none");
                        $("#c_email").text(data.email);
                    } else {
                        document.getElementById("c_h_email").classList.add("d-none");
                        $("#c_email").text();
                    }

                    if (data.ph_no) {
                        document.getElementById("c_h_ph").classList.remove("d-none");
                        $("#c_ph").text(data.ph_no);
                    } else {
                        document.getElementById("c_h_ph").classList.add("d-none");
                        $("#c_ph").text();
                    }

                    if (data.pan_no) {
                        document.getElementById("c_h_pan").classList.remove("d-none");
                        $("#c_pan").text(data.pan_no);
                    } else {
                        document.getElementById("c_h_pan").classList.add("d-none");
                        $("#c_pan").text();
                    }

                    if (data.gst_no) {
                        document.getElementById("c_h_gst").classList.remove("d-none");
                        $("#c_gst").text(data.gst_no);
                    } else {
                        document.getElementById("c_h_gst").classList.add("d-none");
                        $("#c_gst").text();
                    }
                }
            });
        } else {
            document.getElementById("c_details").classList.add("d-none");
            $("#c_details").hide();
        }


        // $(document).on("change", "#selectclient", function() {
        $('#selectclient').on('change', function() {

            var client_id = $(this).val();
            // console.log(client_id);

            if (client_id) {
                $.ajax({
                    url: "{{ route('get.client-data') }}",
                    type: "GET",
                    data: {
                        client_id: client_id
                    },
                    success: function(data) {
                        document.getElementById("c_details").classList.remove("d-none");
                        $("#c_details").show();

                        $("#c_name").text(data.name);
                        if (data.company_name) {
                            document.getElementById("com_h_name").classList.remove("d-none");
                            $("#com_name").text(data.company_name);
                        } else {
                            document.getElementById("com_h_name").classList.add("d-none");

                            $("#com_name").text();
                        }
                        if (data.email) {
                            document.getElementById("c_h_email").classList.remove("d-none");
                            $("#c_email").text(data.email);
                        } else {
                            document.getElementById("c_h_email").classList.add("d-none");
                            $("#c_email").text();
                        }

                        if (data.ph_no) {
                            document.getElementById("c_h_ph").classList.remove("d-none");
                            $("#c_ph").text(data.ph_no);
                        } else {
                            document.getElementById("c_h_ph").classList.add("d-none");
                            $("#c_ph").text();
                        }

                        if (data.pan_no) {
                            document.getElementById("c_h_pan").classList.remove("d-none");
                            $("#c_pan").text(data.pan_no);
                        } else {
                            document.getElementById("c_h_pan").classList.add("d-none");
                            $("#c_pan").text();
                        }

                        if (data.gst_no) {
                            document.getElementById("c_h_gst").classList.remove("d-none");
                            $("#c_gst").text(data.gst_no);
                        } else {
                            document.getElementById("c_h_gst").classList.add("d-none");
                            $("#c_gst").text();
                        }
                    }
                });
            } else {
                document.getElementById("c_details").classList.add("d-none");
                $("#c_details").hide();
            }
        });
    });

    // ====================client_data====================


    function ps(d, source) {

        // console.log(d);

        if (source == 'rate_change') {
            qtId = d.id.replace("input_rate_", "");
        } else if (source == 'quantity') {
            qtId = d.id.replace("qty_", "");
        }

        // let qtId = d.id.replace("qty_", "");
        var rate = $("#input_rate_" + qtId).val();
        var qt = $("#qty_" + qtId).val();
        $("#total_" + qtId).text(rate * qt);
    }


    document.addEventListener("keyup", function(event) {
        if (event.target.classList.contains("item_quantity")) {
            ps(event.target, 'quantity');
        }
    });

    document.addEventListener("keyup", function(event) {
        if (event.target.classList.contains("duplicate_rate_input")) {
            ps(event.target, 'rate_change');
        }
    });

    var bill_data = @json($edit_bill_details);

    var counter = bill_data.length + 1;
    var count = bill_data.length;

    // var counter = 2;
    // var count = 2;


    // Remove Item
    $(document).on("click", ".remove-item", function() {
        $(this).closest(".li").remove();
        count--;
    });


    document.getElementById("preview_btn").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent page reload


        let existing_client = $("#selectclient").val();

        console.log(existing_client);

        let new_client_name = $("#client_name").val();
        let new_company_name = $("#company_name").val();
        let new_ph_no = $("#ph_no").val();
        let new_email = $("#email").val();
        let new_pan_no = $("#pan_no").val();
        let new_gst_no = $("#gst_no").val();
        let new_address = $("#address").val();

        let gstcheckbox = document.getElementById("gst_bill");
        let project_title = $("#project_title").val();


        if (gstcheckbox.checked) {
            var gst_bill = 'yes';
        } else {
            var gst_bill = 'no';
        }

        // wt1 input

        let selectedWt1Input = document.querySelectorAll("select[name='selectwt1[]']");
        let selectedWt1Values = [];

        selectedWt1Input.forEach(input => {
            selectedWt1Values.push(input.value);
        });

        // wt2 input

        let selectedWt2Input = document.querySelectorAll("select[name='selectwt2[]']");
        let selectedWt2Values = [];

        selectedWt2Input.forEach(input => {
            selectedWt2Values.push(input.value);
        });


        let typeWt2Input = document.querySelectorAll("input[name='selectwt2[]']");
        let wt2Values = [];

        typeWt2Input.forEach(input => {
            wt2Values.push(input.value);
        });

        // rate input

        let rateInput = document.querySelectorAll("input[name='input_rate[]']");
        let rateValues = [];

        rateInput.forEach(input => {
            rateValues.push(input.value);
        });

        // unit input

        let unitInput = document.querySelectorAll("select[name='unit[]']");
        // console.log(unitInput);
        // console.log(rateInput);


        let unitValues = [];

        unitInput.forEach(input => {
            unitValues.push(input.value);
        });

        let quantityInput = document.querySelectorAll("input[name='qty[]']");
        let quantityValues = [];

        quantityInput.forEach(input => {
            quantityValues.push(input.value);
        });


        let descriptionInput = document.querySelectorAll("textarea[name='desc[]']");
        let descriptionValues = [];

        descriptionInput.forEach(input => {
            descriptionValues.push(input.value);
        });

        let formData = {
            existing_client: existing_client,
            client_name: new_client_name,
            company_name: new_company_name,
            ph_no: new_ph_no,
            email: new_email,
            pan_no: new_pan_no,
            gst_no: new_gst_no,
            address: new_address,

            work_type_1: selectedWt1Values,
            work_type_2: selectedWt2Values,

            type_work_type_2: wt2Values,

            unit: unitValues,
            rate: rateValues,
            quantity: quantityValues,
            description: descriptionValues,

            gst_bill: gst_bill,
            project_title: project_title,
        };

        // 322 console.log(formData);



        if (existing_client == "") {
            if (new_client_name == "" || new_ph_no == "") {
                $("#error_msg").text("Please select client or type new client details");
                return;
            }
        } else if (new_client_name == "" && new_ph_no == "" && new_address == "") {
            if (existing_client == "") {
                $("#error_msg").text("Please select client or type new client details");
                return;
            }
        }

        if (project_title == "") {
            $("#error_msg").text("Please type project title");
            return;
        }




        $.ajax({
            url: "{{ route('bill.preview') }}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            // data: formData,
            data: {
                formData: formData
            },
            // processData: false,
            // contentType: false,
            success: function(data) {
                console.log(data);
                $("#client_name_preview").empty();
                $("#bill_body").empty();
                $("#project_title").empty();

                const today = new Date();
                const formattedDate = `${String(today.getDate()).padStart(2, '0')}/${String(today.getMonth() + 1).padStart(2, '0')}/${today.getFullYear()}`;
                document.getElementById('bill_date').textContent = formattedDate;

                $("#client_name_preview").text(data.client_data.name);
                $("#project_title_preview").text(data.bill_info.project_title);

                var total_price = 0;

                data.bill_details.forEach(function(bill_data, key) {
                    var newBill = `
                        <tr>
                            <td>${key + 1}</td>
                            <td>${bill_data.description && bill_data.description.trim() !== '' ? bill_data.description : ''}</td>
                            <td>${bill_data.wt_2_item}</td>
                            <td>${bill_data.quantity} ${bill_data.unit && bill_data.unit.trim() !== '' ? bill_data.unit : ''}</td>
                            <td>${bill_data.rate.toLocaleString('en-IN')}</td>
                            <td>${(bill_data.rate * bill_data.quantity).toLocaleString('en-IN')}</td>
                        </tr>
                    `;
                    $("#bill_body").append(newBill);
                });
                $('#editModal').modal('show');
            }
        });
    });



    $(document).ready(function() {
        var gst_op = $('#edit_gst').val();

        var igst_op = $('#edit_igst').val();
        // console.log(gst_op);

        if (gst_op == 'gst') {
            if (igst_op == 'igst') {
                $("#gst_block").show();
                $('#gst_block').css('display', 'block');
            }
            document.getElementById('gst_bill').checked = true;
        } else {
            document.getElementById('gst_bill').checked = false;
            $("#gst_block").hide();
        }

        $("#gst_block").hide();
    });




    document.getElementById('gst_bill').addEventListener('change', function() {
        if (this.checked) {
            $('.hsn_gst').show();
            $("#gst_block").show();
        } else {
            $('.hsn_gst').hide();
            $("#gst_block").hide();
        }
    });
</script>

<script>
    document.getElementById('asas').addEventListener('submit', function(e) {
        var hasError = false;

        var existing_client = $("#selectclient").val();

        var new_client_name = $("#client_name").val();
        var new_ph_no = $("#ph_no").val();
        var new_address = $("#address").val();

        var gstcheckbox = document.getElementById("gst_bill");
        var project_title = $("#project_title").val();



        if (existing_client == "") {
            if (new_client_name == "" || new_ph_no == "" || new_address == "") {
                $("#error_msg").text("Please select client or type new client details");
                hasError = true;
                e.preventDefault();
            }
        } else if (new_client_name == "" && new_ph_no == "" && new_address == "") {
            if (existing_client == "") {
                $("#error_msg").text("Please select client or type new client details");
                hasError = true;
                e.preventDefault();
            }
        }

        if (project_title == "") {
            $("#error_msg").text("Please type project title");
            hasError = true;
            e.preventDefault();
        }

        if (gstcheckbox.checked) {
            var gst_bill = 'yes';
            var cgst = $("#cgst").val();
            var sgst = $("#sgst").val();
            var igst = $("#igst").val();
        } else {
            var gst_bill = 'no';
        }

        if (gst_bill == "yes") {



            if (cgst == "" || sgst == "") {

                if (igst == "") {
                    $("#error_msg").text("Please type CGST and SGST or IGST value");
                    hasError = true;
                    e.preventDefault();
                } else {

                }
            } else if (igst == "") {
                if (cgst == "" || sgst == "") {
                    $("#error_msg").text("Please type CGST and SGST or IGST value");
                    hasError = true;
                    e.preventDefault();
                }
            }
        }
    });
</script>
