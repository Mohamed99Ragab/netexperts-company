<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us Mail</title>
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="{{asset('website/css/vendor/bootstrap.min.css')}}">

    <style>


        .email-title h1
        {
            color: #32325c;
            text-transform: uppercase;
            font-size: 35px;
            text-align: center;
        }
        .email-title p
        {

            font-size: 18px;
            text-align: center;
            color: black;
        }


    </style>
</head>
<body>

    <div class="conatiner">
        <div class="email-title w-75 mx-auto">
            <h1>Contact Us Support</h1>
            <p>Some one send info to contact us</p>
        </div>

        <hr>


        <strong>Phone Number:</strong>
        <p>{{$data->phone_number}}</p>
        <strong>Email of customer:</strong>
        <p>{{$data->email}}</p>
        <strong>Message:</strong>
        <p>{{$data->message}}</p>
    </div>

    <div class="footer">

    </div>


</body>
</html>
