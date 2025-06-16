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
        .content_wrapper {
            max-width: 768px;
            margin: auto;
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
    </style>
</head>

<body>

    <!-- ============= Project Section Start ============== -->
    <section class="project_details" style="padding-top: 50px;">
        <div class="content_wrapper">
            <table>
                <tr>
                    <th style="font-size: 25px;">GENERATED INVOICE</th>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="border: none; text-align: left; padding-top: 25px;">Invoice No: {{$bill_data[0]->invoice_id}} </td>
                    <td style="border: none;"></td>
                    <td style="border: none; text-align: right; padding-top: 25px;">Date: {{date('d/m/Y')}}
                    </td>
                </tr>

                <tr>
                    <td style="border: none; font-size: 19px; padding: 0;" colspan="3"><img src="{{public_path('/assets/img/logo/backyard16.webp')}}" alt="logo" srcset="" style="width: 30%"></td>
                </tr>
                <tr>
                    <td style="border: none; font-size: 19px; padding: 0; padding-bottom: 25px;" colspan="3">
                        <p>5/14, Netaji Nagar Road, Kolkata- 700040</p>
                        <p><u>backyardsixteen@gmail.com, 7003805353, 9874816447</u></p>
                    </td>
                </tr>
                <tr>
                    <td style="border: none;  text-align: left; padding: 0;">Bill To: {{$client_data->name}}</td>
                </tr>
                <tr>
                    <td style="border: none;  text-align: left; padding: 0;">Project Title: {{$bill_data[0]->project_title}}
                    </td>
                </tr>
            </table>
            <div class="table_footer" style="padding-top: 50px; padding-bottom: 30px;">
                <table class="officeuse_table">
                    <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Description</th>
                            <th>Work Type</th>
                            <th>Requirement</th>
                            <th>Rate</th>
                            <th>Price</th>
                        </tr>

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
                            <td style="width: 5%;">{{$key+1}}</td>
                            <td style="width: 28%;">{{$bill->description}}</td>
                            <td style="width: 22%;">{{$bill->wt_2_item}} <br> <span style="font-size: 13px;">({{$bill->wt_1_item}})</span> </td>
                            <td style="width: 10%;">{{$bill->quantity}} {{$bill->unit}}</td>
                            <td style="width: 15%;">{{number_format($bill->rate)}}</td>
                            <td style="width: 20%;">{{number_format($total)}}</td>
                        </tr>
                        @endforeach





                        <tr>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Price</td>
                            <td>{{number_format($net_total)}}</td>

                        </tr>
                        <tr>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>SGST: X%
                                CGST:Y%
                                IGST:Z%</td>

                        </tr>

                        @php
                        $formatter = new \NumberFormatter('en', \NumberFormatter::SPELLOUT);
                        $amountInWords = ucfirst($formatter->format($net_total));
                        @endphp

                        7:15

                        <tr>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Price</td>
                            <td>{{number_format($net_total)}}+GST</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <table>
                <tr>
                    <td style="border: none; text-align: right;">
                        Total Amount in words: {{$amountInWords}} only
                    </td>
                </tr>
                <tr>
                    <td style="border: none; text-align: right; padding-top: 50px;">
                        Authorized signature

                    </td>
                </tr>
                <tr>
                    <td style="border: none; text-align: right; ">
                        ...................................................................................................................................................... Name

                    </td>
                </tr>

                <!-- <tr>
                    <td style="border: none; text-align:left; padding-top: 50px; ">
                        Email Invoice: (Email ID is already pre filled from “Client Email” field above)
                        Whatsapp Invoice: (Whatsapp number is already pre filled from “Client phone number” field
                        above)
                    </td>
                </tr> -->
            </table>
        </div>
    </section>
    <!-- ============= Project Section End ============== -->

</body>

</html>
