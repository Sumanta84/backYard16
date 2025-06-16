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
	#user_sign{
		padding: 11px;
	}
#new_user input[type="file"] {
  display: none !important;
}
.form-control.input_div.sign{
  border: 1px solid #ccc;
  display: inline-block;
  padding: 6px 12px;
  cursor: pointer;
}
label.custom-file-upload {
    border: 1px solid #bababa;
    background: #eee;
    color: #000;
    padding: 10px;
    border-radius: 6px;
 cursor: pointer;
}

.form-control:focus {
    background-color: #ffffff !important;
    border: 1px solid #dcdcdc;
    border-radius: 17px;
    padding: 0 15px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px !important;
}


</style>


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg" style="margin-left: 250px;">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Add User</li>
                </ol>
            </nav>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
        <form action="{{route('user.save')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12 mb-lg-0 mb-4">
                            <div class="card mt-4">
                                <div class="card-body p-3" id="new_user">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="client_name" class="client_heading">Name: </label>
                                            <input type="text" class="form-control input_div" name="name" id="name" placeholder="Name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="company_name" class="client_heading">Email: </label>
                                            <input type="email" name="email" id="email" placeholder="Email"
                                                class="form-control input_div">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6  mb-3">
                                            <label for="ph_no" class="client_heading">Ph No: </label>
                                            <input type="text" name="ph_no" id="ph_no" placeholder="Phone No"
                                                class="form-control input_div">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="client_heading">Password: </label>
                                            <input type="password" name="password" id="password" placeholder="Password"
                                                class="form-control input_div">
                                        </div>
                                    </div>

                                    <!-- <div class="row">
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
                                    </div> -->

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="address" class="client_heading">Address: </label>
                                            <textarea name="address" id="address" class="form-control input_div"></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12  mb-3">
                                            <label for="role" class="client_heading">Upload Signature: </label>
                                            <label for="user_sign" class="custom-file-upload">
        										Choose file
    										</label>
                                            <input type="file" name="user_sign" id="user_sign"
                                                class="form-control input_div sign">
                                        </div>

                                    </div>

                                    <div class="col-6 text-end" id="new_client_btn">
                                        <button class="btn bg-gradient-dark mb-0" type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</main>

<script src="{{ asset('assets/js/custom/component/client-list.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>


</script>
