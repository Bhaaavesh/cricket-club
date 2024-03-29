<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Club - About Us</title>
    <link rel="stylesheet" href="Style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;            
        }

        header {
            background-image:url("header.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /*background-color: #333;*/
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .container img{
            width: 200px; /* Adjust the width as needed */
            height: 200px; /* Adjust the height as needed */
            border-radius: 50%; /* Optional border-radius for a circular image */
            margin-top: 20px; /* Optional margin for spacing */
            al
        }

        section {
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            line-height: 1.6em;
            color: #666;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>




<body>
    <?php include ('navbar.php');
    ?>
    <!--<header>
        <h1>R'45 Cricket Academy</h1>
    </header>
    -->




 

    <div class="container">
        <section>
            <h2>About Us</h2>
            <img src="images/profile photo.jpg" alt="Cinque Terre">
            <div class="desc">Rohit Sharma</div>
            <p>R'45 is a unique online Interactive cricket community platform 
                which was launched by Rohit Sharma on the 6th of June 2014 at the cricket Club of India (CCI Mumbai). 
                This is a decidedly new initiative aimed at transforming the traditional teaching methodologies of cricket education 
                to one that is unique, robust, distinctly contemporary, remarkably interactive, and easily accessible to young 
                cricket enthusiasts far and wide.</p>

            <p>Ever Since its humble beginnings in 1994. Rohit Sharma Cricket Academy (R'45) has emerged as one of the pre-eminent 
                cricket academies of India with a global outreach.</p>

            <p>Its unmatched track record, as exemplified by its 
                large participant base spread across different countries , is a testimony to its commitment to impeccableand 
                uncompromising coaching standards, free coaching philosophy, advanced training facilities, development of skill 
                performance and enhanced knowledge and understanding of the gentlemans game of cricket.</p>
        </section>
    </div>


    <footer>
        <p>&copy; 2024 Cricket Club. All rights reserved.</p>
    </footer>

</body>
</html>
