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
            padding: 5px 3px 5px;
            font-size: 12px;

        }

        @page teacher {
            size: A4 portrait;
            margin: 1cm;
        }

        .teacherPage {
            page: teacher;
            page-break-after: always;
        }
    </style>
</head>

<body>

    @php
    $net_total = 0;
    $net_qty = 0;
    @endphp

    @if($bill_data[0]->bill_type == 'non gst')
        @php
            $per_page_data = 11;
        @endphp
    @else
        @php
            $per_page_data = 6;
        @endphp
    @endif

        <?php
        $page_no = 1;
        $pages = (int)ceil(count($bill_data) / $per_page_data);
        for ($i = count($bill_data); $i >= 0; $i = $i - $per_page_data) {
        ?>



        <!-- ============= Project Section Start ============== -->
        <section class="project_details teacherPage" style="">

            <div class="content_wrapper" style="position: relative;">

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
                        <td style="border: none;">
                            <span style="background: red; display: inline-block; width: 100px; height: 2px;    position: relative; top: -3px;"></span>
                            WWW.BACKYARD16.COM
                            <span style="background: red; display: inline-block; width: 100px; height: 2px;    position: relative; top: -3px;"></span>
                        </td>
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
                            <b style="padding-bottom: 3px; display: inline-block;">BILL TO</b>
                            <br>
                            <b style="padding-bottom: 3px; display: inline-block;">M/S: {{$client_data->name}}</b>
                            <br>
                            <span style="padding-bottom: 3px; display: inline-block;">{{$client_data->address}}</span>
                            <br>
                            <!-- <span>WEAT BENGAL</span>
                        <br> -->
                            <span style="padding-bottom: 3px; display: inline-block;">MOB: {{$client_data->ph_no}}</span>
                            <br>
                            <span style="padding-bottom: 3px; display: inline-block;">PAN: {{$client_data->pan_no}}</span>
                            <br>
                            <span style="padding-bottom: 3px; display: inline-block;"><b>GSTIN/UIN:</b> {{$client_data->gst_no}}</span>
                            <!-- <br>
                        <span><b>STATE:</b>West Bengal</span>
                        <br>
                        <span><b>STATE CODE:</b>19</span>-->
                            <br>
                            <span style="padding-bottom: 3px; display: inline-block;">Tax is payble on reverse charge basis (Yes/No): No</span>
                        </td>
                        <td style="text-align: left; border: none; border-left: 1px solid #000; width: 50%;">
                            <span style="padding-bottom: 3px; display: inline-block;"><b>Invoice No :</b>{{$bill_data[0]->invoice_id}}</span>
                            <br>
                            <span style="padding-bottom: 3px; display: inline-block;"><b>Invoice Dt :</b>{{date('d/m/Y')}}</span>
                            <br>
                            <span style="padding-bottom: 3px; display: inline-block;"><b>Order No :</b></span>
                            <br>
                            <span style="padding-bottom: 3px; display: inline-block;"><b>Order Dt :</b></span>
                            <br>
                            <span style="padding-bottom: 3px; display: inline-block;"><b>Place of Supply :</b>West Bengal</span>
                            <br>
                            <span style="padding-bottom: 3px; display: inline-block;"><b>Page No :</b>{{$page_no}}</span>
                            <br>
                            <span style="padding-bottom: 3px; display: inline-block;"><b>Vehicle No :</b></span>

                        </td>
                    </tr>
                </table>



                <!-- gst bill -->
                @if($bill_data[0]->bill_type == 'gst')
                <table style="position: relative;font-size: 13px; min-height: 370px;">

                    <tr style="font-size: 5px;">
                        <td style="width: 3%; border-left: none;font-size: 12px;"><b>Sl No.</b></td>
                        <td style="width: 10%;font-size: 12px;"><b>HSN SAC</b></td>
                        <td style="width:30%;font-size: 12px;"><b>Description</b></td>
                        <td style="font-size: 12px;width: 10%;"><b>Qty</b></td>
                        <td style="font-size: 12px;width: 10%;"><b>Unit</b></td>
                        <td style="font-size: 12px;width: 10%;"><b>Rate</b></td>
                        @if($bill_data[0]->igst == 'non igst')
                        <td style="font-size: 12px;width: 5%;"><b>SGST %</b></td>
                        <td style="font-size: 12px;width: 5%;"><b>CGST %</b></td>
                        @else
                        <td style="font-size: 12px; width:10%;" colspan="2"><b>IGST %</b></td>
                        @endif

                        <td style="border-right: none;font-size: 12px;width: 17%;"><b>Ammount</b></td>
                    </tr>

                    @php
                    $net_total = 0;
                    $net_qty = 0;
                    $count = 0;
                    @endphp

                    <?php
                            for($j=($page_no-1)*11;$j<($page_no)*11;$j++){

                                $key = $j;
                                if(count($bill_data)>$j){
                                    $bill = $bill_data[$j];
                    ?>
                    @php
                    $total = $bill->quantity * $bill->rate;
                    $net_total = $net_total + $total;
                    $net_qty = $net_qty + $bill->quantity;
                    @endphp
                    <tr>
                        <td style="border-top: none; border-left: none;  border-bottom: none;">{{$key+1}}</td>
                        <td style="border-top: none; border-left: none; border-bottom: none; ">{{$bill->hsn_code}}</td>
                        <td style="text-align: left;border: none;border-right: 1px solid #000;"><b>{{$bill->bill_work_type2}}</b><br>{{$bill->description}}</td>
                        <td style="text-align: right;border: none;border-right: 1px solid #000;"><b>{{$bill->quantity}}</b></td>
                        <td style="border: none;border-right: 1px solid #000;">{{$bill->unit}}</td>
                        <td style="text-align: right;border: none;border-right: 1px solid #000;">{{number_format($bill->rate)}}</td>
                        @if($bill_data[0]->igst == 'non igst')
                        <td style="text-align: right;border: none;border-right: 1px solid #000;">{{$bill->sgst_rate}}</td>
                        <td style="text-align: right;border: none;border-right: 1px solid #000;">{{$bill->cgst_rate}}</td>
                        @else
                        <td colspan="2" style="text-align: right;border: none;border-right: 1px solid #000;">{{$bill->igst_rate}}</td>
                        @endif
                        <td style="text-align: right;border: none;">{{number_format($total)}}</td>
                    </tr>
                    <?php
                            }
                        }
                            ?>
                    <?php
                        if($pages!=$page_no){
                        if ($count < 12) {

                            for ($dammy = 0; $dammy <= 1 - $count; $dammy++) {
                    ?>

                    <tr style="min-height: 70px;">
                        <td style="border: none; border-right: 1px solid #000;"></td>
                        <td style="border: none;border-right: 1px solid #000;"></td>
                        <td style="border: none;border-right: 1px solid #000;color:#fff;""><b>Book Cover Animation<br>adf</b></td>
                        <td style="border: none;border-right: 1px solid #000;"></td>
                        <td style="border: none;border-right: 1px solid #000;"></td>
                        <td style="border: none;border-right: 1px solid #000;"></td>

                        @if($bill_data[0]->igst == 'non igst')
                        <td style="border: none;border-right: 1px solid #000;"></td>
                        <td style="border: none;"></td>
                        @else
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>


                        @endif
                        <td style="border: none;border-left: 1px solid #000;"></td>
                    </tr>

                     <?php
                            }
                            }
                        }else{
                            if ($count < 12) {

                            for ($dammy = 0; $dammy <= 1 - $count; $dammy++) {
                        ?>
                    <tr style="min-height: 70px;">
                        <td style="border: none; border-right: 1px solid #000;"></td>
                        <td style="border: none;border-right: 1px solid #000;"></td>
                        <td style="border: none;border-right: 1px solid #000;color:#fff;"><b>Book Cover Animation<br>adf</b></td>
                        <td style="border: none;border-right: 1px solid #000;"></td>
                        <td style="border: none;border-right: 1px solid #000;"></td>
                        <td style="border: none;border-right: 1px solid #000;"></td>

                        @if($bill_data[0]->igst == 'non igst')
                        <td style="border: none;border-right: 1px solid #000;"></td>
                        <td style="border: none;"></td>

                        @else
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>


                        @endif
                        <td style="border: none;border-left: 1px solid #000;"></td>
                    </tr>

                    <?php
                            }
                            }
                        }
                        ?>

                    <!-- <tr>
                    <td style="border: none; border-bottom: 1px solid #000;"></td>
                    <td style="border: none; border-bottom: 1px solid #000;"></td>
                    <td style="text-align: left;border: none;border-right: 1px solid #000; border-bottom: 1px solid #000;"><b></b></td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000; border-bottom: 1px solid #000;">{{$net_qty}}</td>
                    <td style="border: none; border-bottom: 1px solid #000;"></td>
                    <td style="border: none;border-bottom: 1px solid #000;"></td>
                    <td style="border: none;border-bottom: 1px solid #000;"></td>
                    <td style="text-align: right;border: none;border-right: 1px solid #000;border-bottom: 1px solid #000;"></td>
                    <td style="text-align: right;border: none;border-bottom: 1px solid #000;">{{number_format($net_total)}}</td>
                </tr> -->
                </table>

                <?php

                if ($page_no == $pages) {

                ?>

                <table>
                    <tr style="border-top: 1px solid #000; border-bottom: 1px solid #000;">
                        <td style="border: none;width: 3%;"></td>
                        <td style="width: 10%;border: none;"><b></b></td>
                        <td style="border: none;width: 10%;"></td>
                        <td style="border: none;width: 10%;"></td>
                        <td style="text-align: right;border: none; border-right: 1px solid #000;width: 10%;">{{$net_qty}}</td>
                        <td style="border: none;width: 10%;"></td>
                        @if($bill_data[0]->igst == 'non igst')
                        <td style="border: none;width: 5%;"></td>
                        <td style="border: none;width: 5%;"></td>
                        @else
                        <td style="border: none;width: 10%;"></td>
                        @endif
                        <td style="text-align: right; border: none;border-left: 1px solid #000;width: 17%;">{{number_format($net_total,2)}}</td>
                    </tr>
                </table>

                <?php
                }
                ?>
                @endif
                <!-- gst bill -->



                <!-- non gst bill -->
                @if($bill_data[0]->bill_type == 'non gst')
                <table style="position: relative; min-height: 450px;">

                    <tbody>
                        <tr>
                            <td style="width: 3%; border-left: none;"><b>Sl No.</b></td>
                            <td style="width:34%;"><b>Description</b></td>
                            <td><b>Qty</b></td>
                            <td><b>Unit</b></td>
                            <td><b>Rate</b></td>
                            <td style="border-right: none;"><b>Ammount</b></td>
                        </tr>
                        @php
                        $count = 0;
                        @endphp


                        <?php

                            for($j=($page_no-1)*$per_page_data;$j<($page_no)*$per_page_data;$j++){

                                $key = $j;
                                if(count($bill_data)>$j){
                                    $bill = $bill_data[$j];
                        ?>


                        @php
                        $count++;
                        $total = $bill->quantity * $bill->rate;
                        $net_total = $net_total + $total;
                        $net_qty = $net_qty + $bill->quantity;
                        @endphp

                        <tr>
                            <td style="border-top: none; border-left: none;  border-bottom: none;">{{$key+1}}</td>
                            <td style="text-align: left;border: none;border-right: 1px solid #000;"><b>{{$bill->bill_work_type2}}</b><br>{{$bill->description}}</td>
                            <td style="text-align: right;border: none;border-right: 1px solid #000;"><b>{{$bill->quantity}}</b></td>
                            <td style="border: none;border-right: 1px solid #000;">{{$bill->unit}}</td>
                            <td style="text-align: right;border: none;border-right: 1px solid #000;">{{number_format($bill->rate,2)}}</td>
                            <td style="text-align: right;border: none;">{{number_format($total,2)}}</td>
                        </tr>


                        <?php
                            }
                        }
                            ?>

                        <?php
                        if($pages!=$page_no){
                        if ($count < $per_page_data+1) {

                            for ($dammy = 0; $dammy <= 11 - $count; $dammy++) {
                        ?>
                                <tr style="min-height: 70px;">
                                    <td style="border-top: none; border-left: none;  border-bottom: none;"></td>
                                    <td style="text-align: left;border: none;border-right: 1px solid #000; color:#fff;"><b>Book Cover Animation<br>adf</b></td>
                                    <td style="text-align: right;border: none;border-right: 1px solid #000;"><b></b></td>
                                    <td style="border: none;border-right: 1px solid #000;"></td>
                                    <td style="text-align: right;border: none;border-right: 1px solid #000;"></td>
                                    <td style="text-align: right;border: none;"></td>
                                </tr>
                        <?php
                            }
                            }
                        }else{
                            if ($count < $per_page_data+1) {

                            for ($dammy = 0; $dammy <= 10 - $count; $dammy++) {
                        ?>
                                <tr style="min-height: 70px;">
                                    <td style="border-top: none; border-left: none;  border-bottom: none;"></td>
                                    <td style="text-align: left;border: none;border-right: 1px solid #000; color:#fff;"><b>Book Cover Animation<br>adf</b></td>
                                    <td style="text-align: right;border: none;border-right: 1px solid #000;"><b></b></td>
                                    <td style="border: none;border-right: 1px solid #000;"></td>
                                    <td style="text-align: right;border: none;border-right: 1px solid #000;"></td>
                                    <td style="text-align: right;border: none;"></td>
                                </tr>
                        <?php
                            }
                            }
                        }
                        ?>
                        <!-- <tr>
                        <td style="border-left: none; border-top: none;">1</td>
                        <td style="border-top: none;"></td>
                        <td style="border-top: none;"></td>
                        <td style="border-top: none;"></td>
                        <td style="border-top: none;"></td>

                        <td style="border-right: none; border-top: none;"></td>
                    </tr>

                    <tr>
                        <td style="border-left: none; border-top: none;">2</td>
                        <td style="border-top: none;"></td>
                        <td style="border-top: none;"></td>
                        <td style="border-top: none;"></td>
                        <td style="border-top: none;"></td>

                        <td style="border-right: none; border-top: none;"></td>
                    </tr>

                    <tr>
                        <td style="border-left: none; border-top: none;">3</td>
                        <td style="border-top: none;"></td>
                        <td style="border-top: none;"></td>
                        <td style="border-top: none;"></td>
                        <td style="border-top: none;"></td>

                        <td style="border-right: none; border-top: none;"></td>
                    </tr>

                    <tr>
                        <td style="border-left: none; border-top: none;">4</td>
                        <td style="border-top: none;"></td>
                        <td style="border-top: none;"></td>
                        <td style="border-top: none;"></td>
                        <td style="border-top: none;"></td>

                        <td style="border-right: none; border-top: none;"></td>
                    </tr> -->


                    </tbody>
                </table>
                <?php

                if ($page_no == $pages) {

                ?>
                    <table>
                        <tr style="border-top: 1px solid #000; ">
                            <td style="border: none;width: 3%;"></td>
                            <td style="width: 34%;border: none;"><b></b></td>
                            <td style="text-align: right;border: none; border-right: 1px solid #000;">{{$net_qty}}</td>
                            <td style="border: none;"></td>
                            <td style="border: none;"></td>
                            <td style="text-align: right; border: none;border-left: 1px solid #000;">{{number_format($net_total,2)}}</td>
                        </tr>
                    </table>
                <?php
                }
                ?>
                @endif
                <!-- non gst bill -->
                <!-- @if($bill_data[0]->bill_type == 'non gst')
                <table>
                    <tr style="border-top: 1px solid #000; border-bottom: 1px solid #000;">
                        <td style="border: none;width: 3%;"></td>
                        <td style="width: 34%;border: none;"><b></b></td>
                        <td style="text-align: right;border: none; border-right: 1px solid #000;">{{$net_qty}}</td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="text-align: right; border: none;border-left: 1px solid #000;">{{number_format($net_total,2)}}</td>
                    </tr>
                </table>
            @endif -->

                <?php

                if ($page_no == $pages) {

                ?>
                @php
                $in_total = $net_total;
                $round_off = $in_total - round($in_total);
                @endphp
                @if($bill_data[0]->bill_type == 'gst')

                <!-- cgst+sgst -->
                @if($bill_data[0]->igst == 'non igst')
                <table style="width: 100%;">
                    <tr>
                        <td style="width: 50%; border: none; border-right: 1px solid #000; ">
                            <table style="border: none;">
                                <tr>
                                    <td style="border: none; text-align: left; width: 15%; font-weight: 600; padding-bottom:5px;">GST </td>
                                    <td style="border: none;text-align: left;width: 30%;font-weight: 600; padding-bottom:5px;">TAXABLE AMT </td>
                                    <td style="border: none;text-align: left;width: 5%;font-weight: 600; padding-bottom:5px;"> </td>
                                    <td style="border: none;text-align: left;width: 25%;font-weight: 600; padding-bottom:5px;">SGST</td>
                                    <td style="border: none;text-align: left;width: 25%;font-weight: 600; padding-bottom:5px;">CGST</td>
                                </tr>


                                @php
                                $cgst_amnt = 0;
                                $sgst_amnt = 0;
                                $igst_amnt = 0;
                                @endphp

                                @foreach($gst_data as $gst)
                                <tr>

                                    <td style="border: none;text-align: left;">{{$gst->gst_rate}}%</td>
                                    <td style="border: none;text-align: left;">of {{number_format($gst->total_amt,2)}}</td>
                                    <td style="border: none;text-align: left;">=</td>
                                    @php
                                    $cgst_amnt = $cgst_amnt + $gst->gst_amt/2;
                                    $sgst_amnt = $sgst_amnt + $gst->gst_amt/2;
                                    $total_gst_amt = $cgst_amnt+$sgst_amnt
                                    @endphp
                                    <td style="border: none;text-align: left;">{{number_format($gst->gst_amt/2,2)}} +</td>
                                    <td style="border: none;text-align: left;">{{number_format($gst->gst_amt/2,2)}}</td>
                                </tr>
                                @endforeach

                                <tr style="border-top: 1px solid #000;">
                                    <td style="border: none;text-align: left;">TOTAL </td>
                                    <td style="border: none;text-align: left;">{{number_format($net_total,2)}}</td>
                                    <td style="border: none;text-align: left;"> </td>
                                    <td style="border: none;text-align: left;">{{number_format($cgst_amnt,2)}}</td>
                                    <td style="border: none;text-align: left;">{{number_format($sgst_amnt,2)}}</td>
                                </tr>
                            </table>
                        </td>

                        @if($bill_data[0]->bill_type == 'gst')
                        @php
                        $in_total = $net_total+$total_gst_amt;
                        $round_off = $in_total - round($in_total);
                        @endphp
                        @else
                        @php
                        $in_total = $net_total;
                        $round_off = $in_total - round($in_total);
                        @endphp
                        @endif
                        <td style="width: 50%; border: none;">
                            <table style="">

                                <tr>
                                    <td style="border: none; text-align: left; font-weight: 600;">CGST</td>
                                    <td style="border: none; text-align: right;">{{number_format($cgst_amnt,2)}}</td>
                                </tr>
                                <tr>
                                    <td style="border: none; text-align: left; font-weight: 600;">SGST</td>
                                    <td style="border: none; text-align: right;">{{number_format($sgst_amnt,2)}}</td>
                                </tr>

                                <!-- <tr style="border-top: 1px solid #000;">
                                    <td style="border: none; text-align: left;">Discount</td>
                                    <td style="border: none; text-align: right;"></td>
                                </tr> -->

                                <tr>
                                    <td style="border: none; text-align: left;">Round off</td>
                                    <td style="border: none; text-align: right;">{{number_format($round_off,2)}}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                @endif
                <!-- cgst+sgst -->

                <!-- igst -->
                @if($bill_data[0]->igst == 'igst')
                <table style="width: 100%;">
                    <tr>
                        <td style="width: 50%; border: none; border-right: 1px solid #000; ">
                            <table style="border: none;">
                                <tr>
                                    <td style="border: none; text-align: left; width: 20%; font-weight: 600; padding-bottom:5px;">GST </td>
                                    <td style="border: none;text-align: left;width: 30%;font-weight: 600; padding-bottom:5px;">TAXABLE AMT </td>
                                    <td style="border: none;text-align: left;width: 10%;font-weight: 600; padding-bottom:5px;"> </td>
                                    <td style="border: none;text-align: left;width: 20%;font-weight: 600; padding-bottom:5px;">IGST</td>
                                </tr>


                                @php
                                $cgst_amnt = 0;
                                $sgst_amnt = 0;
                                $igst_amnt = 0;
                                @endphp

                                @foreach($gst_data as $gst)
                                <tr>

                                    <td style="border: none;text-align: left;">{{$gst->gst_rate}}%</td>
                                    <td style="border: none;text-align: left;">of {{number_format($gst->total_amt,2)}}</td>
                                    <td style="border: none;text-align: left;">=</td>
                                    @php
                                    $igst_amnt = $igst_amnt + $gst->gst_amt;
                                    $total_gst_amt = $igst_amnt;
                                    @endphp
                                    <td style="border: none;text-align: left;">{{number_format($gst->gst_amt,2)}}</td>
                                </tr>
                                @endforeach

                                <tr style="border-top: 1px solid #000;">

                                    <td style="border: none;text-align: left;">TOTAL </td>
                                    <td style="border: none;text-align: left;">{{number_format($net_total,2)}}</td>
                                    <td style="border: none;text-align: left;"> </td>
                                    <td style="border: none;text-align: left;">{{number_format($igst_amnt,2)}}</td>
                                </tr>
                            </table>
                        </td>

                        @if($bill_data[0]->bill_type == 'gst')
                        @php
                        $in_total = $net_total+$total_gst_amt;
                        $round_off = $in_total - round($in_total);
                        @endphp
                        @else
                        @php
                        $in_total = $net_total;
                        $round_off = $in_total - round($in_total);
                        @endphp
                        @endif
                        <td style="width: 50%; border: none;">
                            <table style="">
                                <tr>
                                    <td style="border: none; text-align: left;">IGST</td>
                                    <td style="border: none; text-align: right;">{{number_format($igst_amnt,2)}}</td>
                                </tr>

                                <!-- <tr style="border-top: 1px solid #000;">
                                    <td style="border: none; text-align: left;">Discount</td>
                                    <td style="border: none; text-align: right;"></td>
                                </tr> -->

                                <tr>
                                    <td style="border: none; text-align: left;">Round off</td>
                                    <td style="border: none; text-align: right;">{{number_format($round_off,2)}}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                @endif
                <!-- igst -->

                @endif



                @php
                $formatter = new \NumberFormatter('en', \NumberFormatter::SPELLOUT);
                $amountInWords = ucfirst($formatter->format(round($in_total)));
                @endphp



                <table>
                    <tr>
                        <td style="width: 50%; border: none; border-right: 1px solid #000;  border-top: 1px solid #000; padding: 0; ">
                            <table>
                                <tr>
                                    <td style="text-align: left;border: none;">[IN Words] : {{$amountInWords}}.</td>
                                </tr>
                            </table>
                        </td>
                        <td style="width: 50%; border: none; padding: 0;">

                            <table>
                                <tr style="border-top: 1px solid #000;">
                                    <td style="border: none; text-align: left;"><b>Net Amount</b></td>
                                    <td style="border: none; text-align: right;">{{number_format($in_total)}}</td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                </table>

                <table>
                    <tr>
                        <td style="text-align: left; border: none; border-top: 1px solid #000; position: relative; ">
                            <span style="font-weight: 600; text-decoration: underline;">BANK DETAILS</span>
                            <br>
                            <br>
                            <span style="display: inline-block; padding-bottom: 7px;">FOR NEET/RTGS: <b>STATE BANK OF INDIA</b></span>
                            <br>
                            <span style="display: inline-block; padding-bottom: 7px;">A/C NO: <b>42840001299</b></span>
                            <br>
                            <span style="display: inline-block; padding-bottom: 7px;">BRANCH: <b>SBIN0001649</b></span>
                            <br>
                            <span>UPI Id: <b>backyardsixteen@SBI</b></span>
                            <img src="{{public_path('/assets/img/logo/scanner.jpeg')}}" alt="" style="height: 100px; width: 100px; position: absolute; top: 10px;right: 27%;">
                        </td>
                        <td style="text-align: right; border-right: none; border-bottom: none; border-left: none; position:relative;">
                            <span>E.&.O.E.
                            </span>
                            <br>
                            <span><b>For BACKYARD 16</b></span>
                            <br>
                            <span style="display: inline-block; height: 30px;">
                                <img src="" alt="" style="height: 100%; width: 60px;right:0; object-fit:contain;">
                            </span>
                            <br>
                            <span style="padding-right:15px;">{{$auth_data->name}}</span><br>
                            <span>Authorized Sign.</span>
                        </td>
                    </tr>
                </table>

                <?php
               }
                ?>

            </div>
        </section>
        <!-- ============= Project Section End ============== -->
    <?php $page_no++; }


    ?>


</body>

</html>
