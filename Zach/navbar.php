<!DOCTYPE html>
<html>
<head>
   <script type"text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <style>
        body {
           margin: 0px;
        }
        ul {
           list-style-type: none;
           margin: 0px;
           padding: 0px;
           font-weight: 900;
        }
        /* styles the navigation bar itself */
        .topnav {
           position: -webkit-sticky; /* Safari */
           position: sticky;
           top: 0;
           background-color: black;
           overflow: hidden;
        }

        /* Styles links in navigation bar */
        .topnav a {
           float: left;
           color: #F2F2F2;
           text-align: center;
           padding: 14px 16px;
           text-decoration: none;
           font-size: 17px;
        }

        /* :hover allows the color of the links to change when the mouse
           hovers over them */
        .topnav a:hover {
           background-color: white;
           color: black;
        }

        .topnav a.active {
           background-color: #ffd700;
           color: #800;
        }

   </style>
</head>
<body>
   <div class="topnav">
     <ul>
        <a class="active" href="https://lamp.salisbury.edu/~wjenkins2/home.php">Home</a>
        <a href="https://lamp.salisbury.edu/~zmoore4/index.php">Login</a>
        <a href="https://lamp.salisbury.edu/~zmoore4/reg.php">Register</a>
        <a href="https://lamp.salisbury.edu/~zmoore4/contact.php">Contact</a>
        <a style="float:right" href="https://lamp.salisbury.edu/~zmoore4/logout.php">Logout</a>
        <a style="float:right" href="https://lamp.salisbury.edu/~zmoore4/admin.php">Admin</a>
        <a href="https://lamp.salisbury.edu/~adepace1/about.php">About</a>
     </ul>
   </div>
   <script>
        $('ul a').click(function() {
        $('ul a').removeClass('active');
        $(this).addClass('active');
        });
   </script>
</body>
</html>
