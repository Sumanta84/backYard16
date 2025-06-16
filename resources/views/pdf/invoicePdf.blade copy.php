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
            max-width: 1025px;
            margin: auto;
            border: 1px solid #000;
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
            padding: 8px;
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

        td {
            padding: 0 3px;
            font-size: 14px;

        }
    </style>
</head>

<body>

    <!-- ============= Project Section Start ============== -->
    <section class="project_details" style="padding-top: 50px;">
        <div class="content_wrapper">
            <table>
                <tr>
                    <td style="border: none;"><img src="{{public_path('/assets/img/logo/backyard16.webp')}}" alt="" title="" loading="lazy" height="50px" width="280px"></td>
                </tr>
                <tr>
                    <td style="border: none;"><b>Address: 159/12,N.S.C. Bose Road,Kolkata-700040</b></td>
                </tr>
                <tr>
                    <td style="border: none;">
                        <b>Contact no:</b> 9874816447 / 7003805353
                    </td>
                </tr>
                <tr>
                    <td style="border: none;"><b>Email:</b> roysupriyo 126@gmail.com / backyard 16 official@gmail.com </td>
                </tr>
                <tr>
                    <td style="border: none;"><b>GSTIN:</b> 19ABCFB7205K1ZE <b>State Code:</b> 19 West Bengal <b>PAN:</b> ABCFB7205K</td>
                </tr>
                <tr>
                    <td style="border: none;">WWW.BACKYARD16.COM</td>
                </tr>


            </table>


            <table>
                <tr>

                    <td style="border: none; border-top: 1px solid #000; border-bottom: 1px solid #000; text-align:right; width: 55%;"><b>TAX INVOICE</b></td>
                    <td style="border: none; border-top: 1px solid #000; border-bottom: 1px solid #000; text-align: right;"><b>ORIGINAL For Recipient</b></td>
                </tr>
            </table>

            <table>
                <tr>
                    <td style="text-align: left; border: none; width:49.9%;">
                        <b>BILL TO</b>
                        <br>
                        <b>M/S: {{$client_data->name}}</b>
                        <br>
                        <span>{{$client_data->address}}</span>
                        <br>
                        <!-- <span>WEAT BENGAL</span>
                    <br> -->
                        <span>MOB: {{$client_data->ph_no}}</span>
                        <br>
                        <span>PAN: {{$client_data->pan_no}}</span>
                        <br>
                        <span><b>GSTIN/UIN:</b> {{$client_data->gst_no}}</span>
                        <!-- <br>
                    <span><b>STATE:</b>West Bengal</span>
                    <br>
                    <span><b>STATE CODE:</b>19</span>
                    <br> -->
                        <span>Tax is payble on reverse charge basis (Yes/No): No</span>
                    </td>
                    <td style="text-align: left; border: none; border-left: 1px solid #000; width: 50%;">
                        <span><b>Invoice No :</b>{{$bill_data[0]->invoice_id}}</span>
                        <br>
                        <span><b>Invoice Dt :</b>{{date('d/m/Y')}}</span>
                        <br>
                        <span><b>Order No :</b></span>
                        <br>
                        <span><b>Order Dt :</b></span>
                        <br>
                        <span><b>Place of Supply :</b>West Bengal</span>
                        <br>
                        <span><b>Page No :</b>01</span>
                        <br>
                        <span><b>Vehicle No :</b></span>
                        <br>
                        <br>
                        <br>
                        <br>
                    </td>
                </tr>
            </table>


            <table style="position: relative;">

                <tr>
                    <td style="width: 3%; border-left: none;"><b>Sl No.</b></td>
                    @if($bill_data[0]->bill_type == 'gst')
                    <td style="width: 6%;"><b>HSN SAC</b></td>
                    @endif
                    <td style="width:34%;"><b>Description</b></td>
                    <td><b>Qty</b></td>
                    <td><b>Unit</b></td>
                    <td><b>Rate</b></td>
                    @if($bill_data[0]->bill_type == 'gst')
                    @if($bill_data[0]->igst == 'non igst')
                    <td><b>SGST %</b></td>
                    <td><b>CGST %</b></td>
                    @else
                    <td><b>IGST %</b></td>
                    @endif
                    @endif

                    <td style="border-right: none;"><b>Ammount</b></td>
                </tr>

                <!-- <tr>
                <td style="border-top: none; border-left: none;  border-bottom: none;">1</td>
                <td style="border-top: none; border-left: none; border-bottom: none; ">65050090</td>
                <td style="text-align: left;border: none;border-right: 1px solid #000;"><b>29Pr60 Small Cap</b></td>
                <td style="text-align: right;border: none;border-right: 1px solid #000;"><b>300.000</b></td>
                <td style="border: none;border-right: 1px solid #000;">Pcs</td>
                <td style="text-align: right;border: none;border-right: 1px solid #000;">28.00</td>
                <td style="text-align: right;border: none;border-right: 1px solid #000;">2.5</td>
                <td style="text-align: right;border: none;border-right: 1px solid #000;">2.5</td>
                <td style="text-align: right;border: none;">8400.00</td>
                </tr>

                <tr>
                    <td style="border-top: none; border-left: none;  border-bottom: none;">2</td>
                    <td style="border-top: none; border-left: none; border-bottom: none; ">65050090</td>
                    <td style="text-align: left;border: none;border-right: 1px solid #000;"><b>29Pr60 Small Cap</b></td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000;"><b>300.000</b></td>
                    <td style="border: none;border-right: 1px solid #000;">Pcs</td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000;">28.00</td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000;">2.5</td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000;">2.5</td>
                    <td style="text-align: right;border: none;">8400.00</td>
                </tr>

                <tr>
                    <td style="border-top: none; border-left: none;  border-bottom: none;">3</td>
                    <td style="border-top: none; border-left: none; border-bottom: none; ">65050090</td>
                    <td style="text-align: left;border: none;border-right: 1px solid #000;"><b>29Pr60 Small Cap</b></td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000;"><b>300.000</b></td>
                    <td style="border: none;border-right: 1px solid #000;">Pcs</td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000;">28.00</td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000;">2.5</td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000;">2.5</td>
                    <td style="text-align: right;border: none;">8400.00</td>
                </tr> -->

                @php
                $net_total = 0;
                $net_qty = 0;
                @endphp

                @foreach($bill_data as $key=>$bill)
                @php
                $total = $bill->quantity * $bill->rate;
                $net_total = $net_total + $total;
                $net_qty = $net_qty + $bill->quantity;
                @endphp
                <tr>
                    <td style="border-top: none; border-left: none;  border-bottom: none;">{{$key+1}}</td>
                    @if($bill_data[0]->bill_type == 'gst')
                    <td style="border-top: none; border-left: none; border-bottom: none; ">{{$bill->hsn_code}}</td>
                    @endif
                    <td style="text-align: left;border: none;border-right: 1px solid #000;"><b>{{$bill->bill_work_type2}}</b></td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000;"><b>{{$bill->quantity}}</b></td>
                    <td style="border: none;border-right: 1px solid #000;">{{$bill->unit}}</td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000;">{{number_format($bill->rate)}}</td>
                    @if($bill_data[0]->bill_type == 'gst')
                    @if($bill_data[0]->igst == 'non igst')
                    <td style="text-align: right;border: none;border-right: 1px solid #000;">{{$bill->sgst_rate}}</td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000;">{{$bill->cgst_rate}}</td>
                    @else
                    <td style="text-align: right;border: none;border-right: 1px solid #000;">{{$bill->igst_rate}}</td>
                    @endif
                    @endif
                    <td style="text-align: right;border: none;">{{number_format($total)}}</td>
                </tr>
                @endforeach


                <tr style="height:150px;">
                    <td style="border-left: none; border-top: none;"></td>
                    <td style="border-top: none;"></td>
                    <td style="border-top: none;"></td>
                    <td style="border-top: none;"></td>
                    <td style="border-top: none;"></td>
                    <td style="border-top: none;"></td>
                    <td style="border-top: none;"></td>
                    <td style="border-top: none;"></td>
                    <td style="border-right: none; border-top: none;"></td>
                </tr>


                <tr>
                    <td style="border: none; border-bottom: 1px solid #000;"></td>
                    <td style="border: none; border-bottom: 1px solid #000;"></td>
                    <td style="text-align: left;border: none;border-right: 1px solid #000; border-bottom: 1px solid #000;"><b></b></td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000; border-bottom: 1px solid #000;">{{$net_qty}}</td>
                    <td style="border: none; border-bottom: 1px solid #000;"></td>
                    <td style="border: none;border-bottom: 1px solid #000;"></td>
                    <td style="border: none;border-bottom: 1px solid #000;"></td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000;border-bottom: 1px solid #000;"></td>
                    <td style="text-align: right;border: none;border-bottom: 1px solid #000;">{{number_format($net_total)}}</td>
                </tr>

                <!-- <img src="{{public_path('/assets/img/logo/LOGO_SUBMARK.png')}}" alt="" style=" height: 170px; -->
                <!-- <img src="/home/elp/workdrive/localserver/pdfconverter/public/assets/img/logo/LOGO_SUBMARK.png" alt="" style=" height: 170px;

                width: 206px;
                position: absolute;
                display: table;
                margin: auto;
                opacity: 0.1;
                left: 50%;
                top: 60%;
                transform: translate(-50% , -50%);
                "  > -->

            </table>

            <table>

                <tr>
                    <td style="border: none; width: 6%;">GST</td>
                    <td style="width: 14%; border: none;">TAXABLE AMT</td>
                    <td style="width: 5%;border: none;"></td>
                    @if($bill_data[0]->igst == 'non igst')
                    <td style="width: 12%;border: none;">SGST</td>
                    <td style="width: 12%;border: none;">CGST</td>
                    @else
                    <td style="width: 12%;border: none;">IGST</td>
                    @endif
                    <td style="border: none; border-left: 1px solid #000; text-align: left;"></td>
                    <td style="border: none; text-align: right;"></td>
                </tr>


                <!-- <tr>
                    <td style="border: none; width: 6%;">18.00%</td>
                    <td style="width: 14%; border: none;">of 33936.00</td>
                    <td style="width: 5%;border: none;">=</td>
                    <td style="width: 12%;border: none;">3054.24+</td>
                    <td style="width: 12%;border: none;">3054.24</td>
                    <td style="border: none; border-left: 1px solid #000; text-align: left;">SGST</td>
                    <td style="border: none; text-align: right;">3849.24</td>
                </tr>

                <tr>
                    <td style="border: none; width: 6%;">05.00%</td>
                    <td style="width: 14%; border: none;">of 31800.00</td>
                    <td style="width: 5%;border: none;">=</td>
                    <td style="width: 12%;border: none;">795.00+</td>
                    <td style="width: 12%;border: none;">795.00</td>

                    <td style="border: none; border-left: 1px solid #000; text-align: left;">CGST</td>
                    <td style="border: none; text-align: right;">3849.24</td>
                </tr> -->
                @php
                $cgst_amnt = 0;
                $sgst_amnt = 0;
                $igst_amnt = 0;
                @endphp
                @foreach($gst_data as $gst)
                <tr>
                    <td style="border: none; width: 6%;">{{$gst->gst_rate}}%</td>
                    <td style="width: 14%; border: none;">of {{$gst->total_amt}}</td>
                    <td style="width: 5%;border: none;">=</td>
                    @if($bill_data[0]->igst == 'non igst')
                    @php
                    $cgst_amnt = $cgst_amnt + $gst->gst_amt/2;
                    $sgst_amnt = $sgst_amnt + $gst->gst_amt/2;
                    @endphp
                    <td style="width: 12%;border: none;">{{$gst->gst_amt/2}} +</td>
                    <td style="width: 12%;border: none;">{{$gst->gst_amt/2}}</td>
                    @else
                    @php
                    $igst_amnt = $igst_amnt + $gst->gst_amt;
                    @endphp
                    <td style="width: 12%;border: none;">{{$gst->gst_amt}}</td>
                    @endif
                    <td style="border: none; border-left: 1px solid #000; text-align: left;">CGST</td>
                    <td style="border: none; text-align: right;">3849.24</td>
                </tr>
                @endforeach

                <tr style="border-top: 1px solid #000; ">
                    <td style="border: none; width: 6%;">TOTAL</td>
                    <td style="width: 14%; border: none;">{{number_format($net_total)}}</td>
                    <td style="width: 5%;border: none;"></td>
                    @if($bill_data[0]->igst == 'non igst')
                    <td style="width: 12%;border: none;">{{$cgst_amnt}}</td>
                    <td style="width: 12%;border: none;">{{$sgst_amnt}}</td>
                    @else
                    <td style="width: 12%;border: none;">{{$igst_amnt}}</td>
                    @endif
                    <td style="border: none; border-left: 1px solid #000; text-align: left;">Discount</td>
                    <td style="border: none; text-align: right;"></td>
                </tr>

                <tr style="border-bottom: 1px solid #000;">
                    <td style="border: none; width: 6%;"></td>
                    <td style="width: 14%; border: none;"></td>
                    <td style="width: 5%;border: none;"></td>
                    <td style="width: 12%;border: none;"></td>
                    <td style="width: 12%;border: none;"></td>
                    <td style="border: none; border-left: 1px solid #000; text-align: left;">Round off</td>
                    <td style="border: none; text-align: right;">0.52</td>
                </tr>

                <tr>
                    <td style="border: none; width: 6%; text-align: left;" colspan="5">[IN Words] : Seventy Three Hundred Thirty Five Only.</td>
                    <td style="border: none; border-left: 1px solid #000; text-align: left;"><b>Net Amount</b></td>
                    <td style="border: none; text-align: right;">73435.00</td>
                </tr>

            </table>

            <table>
                <tr>
                    <td style="text-align: left; border: none; border-top: 1px solid #000; position: relative; ">
                        <span style="font-weight: 600; text-decoration: underline;">BANK DETAILS</span>
                        <br>
                        <span>FOR NEET/RTGS: <b>STATE BANK OF INDIA</b></span>
                        <br>
                        <span>A/C NO: <b>42840001299</b></span>
                        <br>
                        <span>BRANCH: <b>SBIN0001649</b></span>
                        <br>
                        <span>UPI Id: <b>backyardsixteen@SBI</b></span>
                        <img src="{{public_path('/assets/img/logo/scanner.jpeg')}}" alt="" style="height: 100px; width: 100px; position: absolute; top: 0;right: 27%;">
                    </td>
                    <td style="text-align: right; border-right: none; border-bottom: none; border-left: none;">
                        <span>E.&.O.E.
                        </span>
                        <br>
                        <span><b>For BACKYARD 16</b></span>
                        <br><br><br>
                        <span>Authorized Sign.</span>
                    </td>
                </tr>
            </table>



        </div>
    </section>
    <!-- ============= Project Section End ============== -->

</body>

</html>
