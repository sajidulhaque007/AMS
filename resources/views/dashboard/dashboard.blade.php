<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>    
        <style>
                    @import url('https://fonts.googleapis.com/css?family=Sofia');

                        body {
                            font-family: 'Roboto', sans-serif;

                        }
                        *{
                            margin: 0;
                            padding: 0;
                            list-style: none;
                            text-decoration: none;
                        }
                        .sidebar{
                            position: fixed;
                            left: -250px;
                            width: 250px;
                            height: 100%;
                            background: #0d0d0d;
                            transition: all .5s ease;

                        }
                        .sidebar header{
                            font-size: 22px;
                            color: white;
                            text-align: center;
                            line-height: 70px;
                            background: #4A5568;
                            user-select: none;

                        }
                        .sidebar ul a{
                            display: block;
                            height: 100%;
                            width: 100%;
                            line-height: 65px;
                            font-size: 20px;
                            color: white;
                            padding-left: 40px;
                            box-sizing: border-box;
                            border-top: 1px solid rgba(255,255,255,.1);
                            border-bottom: 1px solid black;
                            transition: .4s;
                        }
                        ul li:hover a{
                            padding-left: 50px;
                        }
                        .sidebar ul a i{
                            margin-right: 16px;

                        }
                        #check{
                            display: none;

                        }
                        label #btn, label #cancel{
                            position: absolute;
                            cursor: pointer;
                            background: #4A5568;
                            border-radius: 3px;

                        }
                        label #btn{
                            left: 40px;
                            top: 25px;
                            font-size: 35px;
                            color:white;
                            padding: 6px 12px;
                            transition: all .5s;

                        }
                        label #cancel{
                            z-index: 1111;
                            left: -195px;
                            top: 17px;
                            font-size: 30px;
                            
                            color: #113559;
                            padding: 4px 9px;
                            transition: all .5s ease;

                        }
                        #check:checked ~ .sidebar{
                            left: 0;

                        }
                        #check:checked ~ label #btn{
                            left: 250px;
                            opacity: 0;
                            pointer-events: none;
                        }
                        #check:checked ~ label #cancel{
                            left: 195px;
                        
                        }
                        #check:checked ~ section{
                            margin-left: 250px;
                        
                        }
                        section{
                            background: url(../views/dashboard/2.jpg) no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 100vh;
                            transition: all .5s;
                        }

        </style>      
    </head>
    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header>Dashboard</header>
            <ul>
                <li><a href="{{ url('/departments') }}"><i class="fas fa-qrcode"></i>Department</a></li>
                <li><a href="{{ url('/employees') }}"><i class="fas fa-link"></i>Employees</a></li>
                <li><a href="{{ url('/attendances') }}"><i class="fas fa-calendar-week"></i>Attendance Table</a></li>                        
            </ul>
        </div>
        <section></section>
    </body>
</html>