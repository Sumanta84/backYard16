<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Structural Members Report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Fredoka:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Russo+One&family=Sora:wght@100..800&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <style>
        .content_wrapper {
            max-width: 768px;
            margin: auto;
        }

        body {
            font-family: "Poppins", sans-serif;
        }

        .right {
            text-align: right;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        .table_footer th,
        td {
            border: 1px solid black;
            padding: 15px 8px;
        }

        .table_footer th {
            background: #f2f2f2;
        }

        input.form-control {
            width: 180%;
            height: 38px;
            border-radius: 5px;
            border: 1px solid #adadad;
            background: #b3c1ca78;
            padding-left: 12px;
        }

        .colum {
            border: 1px solid #6a6a6a;
            margin: 5px;
            padding: 8px;
            border-radius: 6px;
            font-size: 17px;
            color: #6a6a6a;
        }

        .button_box {
            border: 1px solid #807d7d;
            padding: 10px 40px;
            border-radius: 4px;
            height: 20px;
        }
    </style>
</head>

<body>

    <!-- ============= Project Section Start ============== -->
    <section class="project_details" style="padding-top: 50px;">
        <div class="content_wrapper">


            <table>
                <thead style="border: 2px solid #000;">
                    <tr>
                        <td style="  border: none; text-align: right; font-weight: 600; font-size:15px; padding:4px 0;">Original Buyer's Copy/
                        </td>
                    </tr>
                    <tr>
                        <td style="border: none; text-align: right; padding-top: 2px; font-weight: 600;font-size:15px;padding: 0;">Duplicate Seller's Copy/
                        </td>
                    </tr>
                    <tr>
                        <td style=" border: none; text-align: right; padding-top:2px; font-weight: 600;font-size:15px;padding:4px 0;">Triplicate Transporter's Copy
                        </td>
                    </tr>

                </thead>
            </table>
            <table>
                <tr style="border: 2px solid #000; border-top: none;">
                    <th style="font-size:20px; font-weight: 700;"> BACKYARD16 </th>
                </tr>
            </table>
            <table>

                <tbody style="border: 2px solid #000; border-top:none; border-bottom:none;">

                    <tr>
                        <td style="border: none; font-size: 15px; padding:4px 0;  font-weight: 600;" colspan="3"> SIDDHARTHA APPARTMENT </td>
                    </tr>
                    <tr>
                        <td style="border: none; font-size: 15px; padding: 0; padding-bottom:4px;font-weight: 600;" colspan="3">159/12,N.S.C. Bose Road, Netaji Nagar , Kolkata-700040</td>
                    </tr>
                    <tr>
                        <td style="border: none; font-size: 15px; padding: 0;  padding-bottom:4px;font-weight: 600;" colspan="3">Mob- 7003805353/9874816447</td>
                    </tr>
                    <tr>
                        <td style="border: none; font-size: 15px; padding: 0;  padding-bottom:4px;font-weight: 600;" colspan="3">GSTIN-19ABCFB7205K1ZE </td>
                    </tr>

                </tbody>
            </table>

            <table>
                <tr style="border: 2px solid #000;text-align: center; border-top:none;">
                    <td style=" font-size: 17px; padding: 0;  font-weight: 700;" colspan="6">TAX INVOICE </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td style="  text-align: left; padding: 3px; font-size:12px;">Invoice No: {{$bill_data[0]->invoice_id}}</td>
                    <td style="  text-align: left; padding: 3px;font-size:12px;">
                        Work order No:
                    </td>
                </tr>
                <tr>
                    <td style="  text-align: left; padding: 3px;font-size:12px;">Invoice Date: {{date('d/m/Y')}}</td>
                    <td style="  text-align: left; padding: 3px;font-size:12px;">
                        Work orde Date:
                    </td>
                </tr>

                <tr>
                    <td style="  text-align: left; padding: 3px;font-size:12px;">Reverse Charges(Y/N)</td>
                    <td style="  text-align: left; padding: 3px;font-size:12px;">
                        Mode of Transport :
                    </td>
                </tr>

                <tr>
                    <td style="  text-align: left; padding: 3px; font-size:12px;">State : West Bengal</td>
                    <td style="  text-align: left; padding: 3px; font-size:12px;">
                        Vehicle No. :
                    </td>
                </tr>
                <tr>
                    <td style="  text-align: left; padding: 3px; font-size:12px;">Code : 19</td>
                    <td style=" padding: 3px;font-size:12px;"></td>
                </tr>

                <tr>
                    <td style="font-size: 16px; font-weight: 600; padding:5px 0 ;">Bill to Party</td>
                    <td style="padding:5px 0 ;font-size: 16px; font-weight: 600;">Place of Supply</td>
                </tr>
                <tr>
                    <td style="text-align: left;font-size: 12px; padding:5px 2px ;">Name : {{$client_data->name}}</td>
                    <td style="text-align: left; font-size: 12px;padding:5px 2px;">Name : {{$client_data->name}}</td>
                </tr>
                <tr>
                    <td style="text-align: left;font-size: 12px; padding:5px 2px ;">Address - {{$client_data->address}}</td>
                    <td style="text-align: left;font-size: 12px; padding:5px 2px ;">Address - {{$client_data->address}}</td>
                </tr>
                <tr>
                    <td style="text-align: left;font-size: 12px; padding:5px 2px ;">GSTIN: </td>
                    <td style="text-align: left;font-size: 12px; padding:5px 2px ;">GSTIN: </td>
                </tr>
                <tr>
                    <td style="text-align: left;font-size: 12px; padding:5px 2px ;">State : West Bengal</td>

                    <td style="text-align: left;font-size: 12px; padding:5px 2px ;">state :</td>

                </tr>
                <tr>
                    <td style="text-align: left;font-size: 12px; padding:5px 2px ;">Code :</td>
                    <td style="text-align: left;font-size: 12px; padding:5px 2px ;">Code :</td>
                </tr>
            </table>
            <div class="table_footer" style=" padding-bottom: 30px;">
                <table class="officeuse_table">
                    <thead>
                        <tr>
                            <th style="font-size: 14px; padding:5px ;">Serial No.</th>
                            <th style="font-size: 14px; padding:5px 0;">Description</th>

                            @if($bill_data[0]->bill_type == 'gst')

                            <th style="font-size: 14px; padding:5px 0;">HSN/ SAC Code
                            </th>

                            <th style="font-size: 14px; padding:5px 0;">GST %
                            </th>

                            @endif

                            <th style="font-size: 14px; padding:5px 0;">UCM
                            </th>
                            <th style="font-size: 14px; padding:5px 0;">Qty
                            </th>
                            <th style="font-size: 14px; padding:5px 0;">Rate
                            </th>
                            <th style="font-size: 14px; padding:5px 0;">Amount
                            </th>
                        </tr>
                        <!-- 954.19  1923.63 5744.38-->

                    </thead>
                    <tbody>

                        @php
                        $net_total = 0;
                        @endphp

                        @foreach($bill_data as $key=>$bill)
                        @php
                        $total = $bill->quantity * $bill->rate;
                        $net_total = $net_total + $total;
                        @endphp

                        <tr>
                            <td style="width: 5%; font-size: 12px; padding:5px 0;">{{$key+1}}</td>
                            <td style="width: 28%;font-size: 12px; padding:5px 0;">{{$bill->bill_work_type2}}
                                <!-- <br> <span style="font-size: 13px;">{{$bill->description}}</span> -->
                            </td>

                            @if($bill_data[0]->bill_type == 'gst')
                            <td style="width: 22%;font-size: 12px; padding:5px 0;">
                                {{$bill->hsn_code}}
                            </td>

                            <td style="width: 10%;font-size: 12px; padding:5px 0;">{{$bill->gst_rate}}</td>
                            @endif

                            <td style="width: 10%;font-size: 12px; padding:5px 0;">{{$bill->unit}}</td>
                            <td style="width: 10%;font-size: 12px; padding:5px 0;">{{$bill->quantity}}</td>
                            <td style="width: 20%;font-size: 12px; padding:5px 0;">{{number_format($bill->rate)}}</td>
                            <td style="width: 15%;font-size: 12px; padding:5px 0;">{{number_format($total)}}</td>
                        </tr>
                        @endforeach



                    </tbody>
                </table>

                @php
                $total_gst_amt = 0
                @endphp
                <table>
                    <tr>

                        @if($bill_data[0]->bill_type == 'gst')
                        <td style="text-align: left;font-size: 12px; padding:5px 0;"><strong>Total Amount Before Tax</strong></td>
                        <td style="font-size: 12px; padding:5px 0;">{{number_format($bill_amt)}}</td>
                        @endif
                    </tr>
                    @if($bill_data[0]->bill_type == 'gst')

                    @if(count($igst_data)>0)
                    @foreach($igst_data as $igst)
                    <tr>
                        <td style="text-align: left;font-size: 12px; padding:5px 0;">Add: IGST
                            <thead class="table-light">
                                <tr>
                                    <th>Serial No:</th>
                                    <th>Description</th>@ {{$igst->igst_rate}}%</td>
                        <td style="font-size: 12px; padding:5px 0;">{{number_format($igst->total_igst_amt, 2)}}</td>
                    </tr>

                    @php
                    $total_gst_amt = $total_gst_amt+$igst->total_igst_amt
                    @endphp

                    @endforeach
                    @else
                    @foreach($cgst_data as $index => $cgst)
                    <tr>
                        <td style="text-align: left;font-size: 12px; padding:5px 0; ">Add: CGST @ {{$cgst->cgst_rate}}%</td>
                        <td style="font-size: 12px; padding:5px 0;">{{number_format($cgst->total_cgst_amt, 2)}}</td>
                    </tr>

                    <tr>
                        <td style="text-align: left;font-size: 12px; padding:5px 0; ">Add: SGST @ {{$sgst_data[$index]->sgst_rate}}%</td>
                        <td style="font-size: 12px; padding:5px 0;">{{number_format($sgst_data[$index]->total_sgst_amt, 2)}}</td>
                    </tr>

                    @php
                    $total_gst_amt = $total_gst_amt+$cgst->total_cgst_amt+$sgst_data[$index]->total_sgst_amt
                    @endphp

                    @endforeach


                    @endif

                    @endif

                    <tr>
                        <td style="text-align: left;font-size: 12px; padding:5px 0;"><strong>Total Amount</strong></td>
                        <td style="font-size: 12px; padding:5px 0;">{{number_format(round($bill_amt+$total_gst_amt))}}</td>
                    </tr>

                </table>

                @php
                $formatter = new \NumberFormatter('en', \NumberFormatter::SPELLOUT);
                $amountInWords = ucfirst($formatter->format(round($bill_amt+$total_gst_amt)));
                @endphp

                <table>
                    <tr>
                        <td style="font-size: 12px; padding:5px 0;">Total Invoice Amount in words: {{$amountInWords}} only</td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style="text-align: right; font-size: 12px; padding:5px ;" colspan="6">For Backyard16 </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="text-align: left;font-size: 12px; padding:5px ;">BANK DETAILS</td>
                        <td rowspan="4" style="font-size: 15px; padding:5px 0;"> Authorised Signature
                            <br>
                            <img src="/home/elp/workdrive/localserver/pdfconverter/public/uploads/signatures/{{ $auth_data->signature }}" class="navbar-brand-img" width="160" height="50" alt="sign">


                            <br>
                            <span>{{$auth_data->name}}</span>
                        </td>



                    </tr>
                    <tr>
                        <td style="text-align: left;font-size: 12px; padding:5px ;">State Bank of India </td>

                    </tr>
                    <tr>

                        <td style="text-align: left;font-size: 12px; padding:5px ;">Account No-42840001299</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-size: 12px; padding:5px ;">IFSC Code: SBIN0001649</td>
                    </tr>
                </table>
            </div>


        </div>
    </section>
    <!-- ============= Project Section End ============== -->


</body>

</html>
