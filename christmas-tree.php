<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christmass Time!</title>
    <style type="text/css">
        .star{
            color:green;
        }
        body{
            text-align: center;
        }
        .pot{
            color:brown;
        }
        .merry{
            color:green;
        }
        .xmass{
            color:red;
        }
        .firstStar{
            color:orangered;
        }
        .oddStars{
            color:orange;
            animation: flash 1s linear infinite;
        }

        @keyframes flash {
            90% {
                opacity: 0;
            }
        }

        .text{
            margin-top:5px;
        }

     </style>

</head>
<body>

<?php
$numStars = 0;
$maxNumber = 10;

//print the stars
for($i=$maxNumber; $i>0; $i--){

    $stars = "";
    $numStars+=1; //increase the number of stars by 1 with each iteration

    if($numStars % 2 == 0){ 
        //if the number of stars is even, add 1 to make it odd
        //odd number of stars are easier to position centrally
        $numStars+=1;
    }
    //store stores to print
    for($j=1; $j<=$numStars; $j++){
        if($numStars == 1){
            $stars.='<span class="firstStar">*</span>'; 
        }
        else{
          if($i%2 == 0){
            $stars.='<span class="star">*</span>';  
          }
          else{
            $stars.='<span class="oddStars">*</span>';  
          }  
        }  
    }



    //print new line after printing stars
    print($stars."<br/>"); 
}

print('<div class="pot">');

print("__|_|__<br/>");
print("\_____/<br/>");
print('</div>');

print('<div class="text"><span class="merry">MERRY</span> <span class="xmass">CHRISTMASS!</span></div>');
?>
    
</body>
</html>




