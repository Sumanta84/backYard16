<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ELPHILL</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <style>
            body {
            font-family: 'Helvetica', sans-serif;
            margin: 0;
            /* background-color: #121212; 
            color: #e0e0e0;  */
        }

        /* Sidebar Navigation */
        .sidenav {
            position: fixed;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            background: linear-gradient(145deg, #2a2a2a, #1a1a1a);
            width: 60px;
            border-radius: 0 12px 12px 0;
            box-shadow: 3px 3px 15px rgba(0, 0, 0, 0.7);
            overflow: hidden;
            transition: width 0.3s ease-in-out;
        }

        .sidenav:hover {
            width: 250px; 
        }

        /* Sidebar Links */
        .sidenav a {
            display: flex;
            align-items: center;
            padding: 15px;
            color: #f5f5f5; 
            font-size: 18px;
            text-decoration: none;
            border-radius: 0 12px 12px 0;
            transition: all 0.3s ease;
            width: 100%;
            position: relative;
        }

        .sidenav a:hover {
            background: linear-gradient(145deg, #333, #111); 
            box-shadow: inset 0 0 12px 6px #555555; 
            color: #b3b3b3; 
        }

        /* Sidebar Icons */
        .sidenav a .icon {
            margin-right: 10px;
            font-size: 20px;
            transition: margin-right 0.3s, color 0.3s;
            color: #9e9e9e; 
        }

        .sidenav a:hover .icon {
            margin-right: 20px;
            color: #b3b3b3; 
        }

        /* Sidebar Link Text */
        .sidenav a .text {
            opacity: 0;
            margin-left: -60px;
            transition: opacity 0.3s, margin-left 0.3s;
            color: #e0e0e0; 
        }

        .sidenav a:hover .text {
            opacity: 1;
            margin-left: 15px;
        }

        /* Content Section */
        .content {
            margin-left: 80px;
            padding: 20px;
            color: #e0e0e0;
        }

        /* Premium Header */
        .content h1 {
            font-size: 48px;
            font-weight: bold;
            color: #f5f5f5;
            text-shadow: 3px 3px 15px rgba(0, 0, 0, 0.9), 0 0 15px #555555; 
        }

        .content p {
            font-size: 18px;
            line-height: 1.8;
            color: #ccc;
        }

        @media (max-width: 600px) {
            .sidenav:hover {
                width: 180px; 
            }

            .content {
                margin-left: 60px;
                padding: 10px;
            }
        }
        #faplus{
            border: 1px solid white;
            padding: 3px;
            border-radius: 4px;
        }
        .hideclientinfo{
            display: none;
        }
        .showclientinfo{
            display: block;
        }
        #adddiv{
            
    position: relative !important;
}
.#savebutton {
    position: absolute !important;
    top: 0;
    right: 1%;
}
form span{
    display: block;
    color: red;
}
 </style>

</head>

<body>
    <div class="sidenav">
        <a href="/">
            <span class="icon"><i class="fas fa-home"></i></span>
            <span class="text">Home</span>
        </a>
        <a href="{{route('addbill')}}">
            <span class="icon"><i class="fa-solid fa-pen-to-square"></i></span>
            <span class="text">Add Bill</span>
        </a>
        <a href="{{route('clients')}}">
            
            <span class="icon"><i class="fa-solid fa-users"></i></span>
            <span class="text">Clients</span>
        </a>
        {{-- <a href="#">
            <span class="icon"><i class="fas fa-phone-alt"></i></span>
            <span class="text">Contact</span>
        </a> --}}
    </div>