<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>

    <div class="spinner" style="display:none;
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 15;
    background: #49243E center no-repeat;
    text-align:center;
    "><h1 style="color:white; margin-top:25%;"><i class="fa fa-refresh fa-circle-notch fa-spin" aria-hidden="true"></i>
</h1>
</div>

<?php 

$servername = "127.0.0.1";
$port = "3306";
    $username = "root";
    $password = "9894625158";
    $database = "customers";

?>


<script>
    
    $(document).ready(function () {
        $("a, :submit").click(function(){
            $(".spinner").css("display","block");
            setTimeout(function() {  
                $(".spinner").css("display","none");
        }, 5000);
        });
    });
</script>


    </body>
</html>
