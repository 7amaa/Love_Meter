<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        
        $yourName = $_POST["yourName"];
        $partnerName = $_POST["partnerName"];
        $randomno = $_SESSION["number"];
        
        if($yourName == "" || $partnerName == ""){
            header("Location: index.php"); 
            exit();
        } else {
            $randomNumber = $randomno;

            $results = $yourName . " and " . $partnerName . " matches " . $randomNumber . "%\n"; 
            file_put_contents("wannaBeCouples.txt", $results, FILE_APPEND);
        }
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
        .progressBar{
            width: 100%;
            height: 50px;
            background-color: gray;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
        }
        .progressBarFill{
            width: <?php echo $randomNumber . "%"; ?>;
            height: 100%;
            background: red;
            transition: transform 1s;
        }

        .progressText{
            position: absolute;
            top: 50%;
            right: 5px;
            transform: translateY(-50%);
            font: bold 14px;
            color: white;
        }
    </style>
</head>
<body>
    

    <div class="container">
        <div class="shadow-lg rounded border border-dark my-2 d-flex row justify-content-center">
            
            
                <div class="col-lg-10 offset-lg-2 mt-4">
                    <h3>Precentage of love between <span style="color: red;"><?php echo $yourName; ?></span> and <span style="color: red;"><?php echo $partnerName; ?></span> is :-</h3>
                </div>   

                <div class="col-lg-8 mt-4">
                    <div class="progressBar">
                        <div class="progressBarFill" style=""></div>
                        <span class="progressText"><?php echo $randomNumber; ?>%</span>
                    </div>             
                </div> 

                <div class="col-lg-8 my-4">
                    <a href="index.php"><button type="submit" class="btn btn-md btn-danger">Return</button></a>
                </div>
                
        </div>
    </div>

</body>
</html>