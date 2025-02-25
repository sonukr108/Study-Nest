<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Nest - Best for BCA study material</title>
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/utility.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Poppins", sans-serif;
            background-color: black;
            color: white;
        }

        .container {
            margin: 50px auto;
            background-color: #1b093f;
            width: 90%;
            box-sizing: border-box;
            border-radius: 25px;
            flex-direction: column;
            align-items: center;
            padding: 5% 10px;
        }

        .cards {
            flex-wrap: wrap;
        }

        .unit-card {
            cursor: pointer;
            width: 380px;
            padding: 15px;
            background-color: #2e106a;
            background-image: linear-gradient(130deg, #5a1fd0 10%, rgba(46, 16, 106, 0) 70%);
            background-position: 50% 50%;
            transition: background-position .1s ease-in-out;
            background-size: 300% 300%;
            border: 1px solid #7b61ff;
            border-radius: 15px;
            box-sizing: border-box;
            margin: 10px 0;
            gap: 20px;
        }

        .unit-card img {
            height: 71px;
        }

        .unit-card:hover {
            border: 2px solid #7b61ff;
            background-color: #40129e;
        }

        a {
            text-decoration: none;
            color: white;
        }

        @media screen and (max-width: 450px) {
            .unit-card {
                width: 300px;
                padding: 10px;
            }
            h1{
                font-size: 27px;
            }
        }
    </style>
</head>

<body>
    <?php include 'shared/header.html'; ?>
    <div class="container flex">
        <div class="flex justify-center">
            <h1>HTML (BCA C4003)</h1>
        </div>
        <div class="cards flex justify-center" style="gap: 20px;">

            <a href="unit-1.php">
                <div class="unit-card flex">
                    <div class="img-part">
                        <img src="images/unit-1.svg" alt="unit 1">
                    </div>
                    <div class="text-part">
                        <h2>UNIT 1</h2>
                        <p>Introduction to HTML & Tags</p>
                    </div>
                </div>
            </a>
            <a href="unit-2.php">
                <div class="unit-card flex">
                    <div class="img-part">
                        <img src="images/unit-2.svg" alt="unit 1">
                    </div>
                    <div class="text-part">
                        <h2>UNIT 2</h2>
                        <p>Advanced HTML</p>
                    </div>
                </div>
            </a>
            <a href="unit-3.php">
                <div class="unit-card flex">
                    <div class="img-part">
                        <img src="images/unit-3.svg" alt="unit 1">
                    </div>
                    <div class="text-part">
                        <h2>UNIT 3</h2>
                        <p>CSS (Cascading Style Sheet)</p>
                    </div>
                </div>
            </a>
            <a href="unit-4.php">
                <div class="unit-card flex">
                    <div class="img-part">
                        <img src="images/unit-4.svg" alt="unit 1">
                    </div>
                    <div class="text-part">
                        <h2>UNIT 4</h2>
                        <p>Data Access & Error Handling</p>
                    </div>
                </div>
            </a>
            <a href="unit-5.php">
                <div class="unit-card flex">
                    <div class="img-part">
                        <img src="images/unit-5.svg" alt="unit 1">
                    </div>
                    <div class="text-part">
                        <h2>UNIT 5</h2>
                        <p>HTML Graphics and HTML Media</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <?php include 'shared/footer.html'; ?>
</body>

</html>