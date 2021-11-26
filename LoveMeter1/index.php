<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();
    $_SESSION["number"] = rand(0, 100);
?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Meter</title>

    <link rel="stylesheet" type="text/css"
        href="Bootstrap5/css/bootstrap.min.css">
    <script type="text/javascript"
        src="Bootstrap5/js/bootstrap.min.js"></script>

    <style>
        .newDesign{
            border : 3px solid blue;
            border-radius: 25px;
        }
    </style>

    
</head>
<body>
    <div class="container">
        <div class="row shadow-lg rounded border border-dark my-2">
            <form action="secondpage.php" method="post" class="row my-4 justify-content-center px-5">
                
                <div class="col-lg-6">
                    <label for="YourName" class="form-label fw-bold">YOUR NAME</label>
                    <input type="text" class="form-control newDesign" id="YourName" placeholder="Enter Your Name" name="yourName" required>
                </div>
                <div class="col-lg-6">
                    <label for="YourName" class="form-label fw-bold">PARTNER'S NAME</label>
                    <input type="text" class="form-control newDesign" id="YourName" placeholder="Enter Partner's Name" name="partnerName" required>
                </div>

                <div class="col-lg-6 my-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genderYourName" id="flexRadioDefault1" value="male" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                                MALE
                        </label>
                    </div>
                
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genderYourName" id="flexRadioDefault2" value="female">
                        <label class="form-check-label" for="flexRadioDefault2">
                                FEMALE
                        </label>
                    </div>
                    
                </div>

                <div class="col-lg-6 my-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genderPartnerName" id="flexRadioDefault3" value="male">
                        <label class="form-check-label" for="flexRadioDefault3">
                                MALE
                        </label>
                    </div>
                
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genderPartnerName" id="flexRadioDefault4" value="female" checked>
                        <label class="form-check-label" for="flexRadioDefault4">
                                FEMALE
                        </label>
                    </div>
                    
                </div>

                <div class="col-lg-4 d-grid gap-2 my-3">
                    <input type="submit" class="btn btn-md btn-danger" value="Calculate Love %" name="submitbutton">
                </div>

            </form> 
        </div>
    </div>


</body>
</html>