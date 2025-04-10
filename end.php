<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vellore Institute of Technology</title>
    <link href="img/collegeicon.jpeg" rel="icon">
</head>

<body>

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .register {
            background: url(img/vit1.jpg);
            background-position: center;
            background-size: cover;
            height: 100vh;
        }

        .register .main {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register .page {
            background-color: #ffff;
            color: #004C93;
            font-weight: bold;
            width: 600px;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 20px;
            margin-top: 20%;
            font-size: 20px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        @media only screen and (max-width: 900px) {
            .page {
                width: 300px !important;
            }

            .page p {
                font-size: 10px;
            }
        }
    </style>

    <div class="register">
        <div class="main">
            <div class="page">
                <h2>Thank You!!!</h2>
                <p>The Form is Sumbitted Successfully!!!</p>
                <p> Our Team Will be in touch with you Shortly..</p>
            </div>
        </div>
    </div>
</body>

</html>