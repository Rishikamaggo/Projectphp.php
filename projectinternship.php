<html>
<head>
<title>button</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href=<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</form>
<script>

</script>
<style>
container{height:1000px;

}
h1{font-size:80px;}
</style></head>
<body>
<div class="container bg-dark">
<div >
<center>
<h1 class="text-light ">Play Rock Paper Scissor <h1></center><br><br>
<div class="row">
<div class="col-lg-2"></div>
<div class="col-lg-3">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQURRXMrcqSwUakqkJlGctmSqvY3HueOSKw3xdDhgGpOwlSaG9gsJ9iBCKh65RE7bjp-v4&usqp=CAU"></div>
<div class="col-lg-3">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUCmaf-HaltNtvmtB6EG8jCjkbICmErLjlvACv-XM1yXMDVN5Tk_FJOKYdlGNCYaihdBk&usqp=CAU"></div>
<div class="col-lg-3">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTD9iNuDdYoasaY5uH8CiFBH06FIqd7AdtjEKXE9AZpK29g8nNH-RyNvtOe3728VCjl-W8&usqp=CAU"></div>
<div class="col-lg-1"></div>
</div><br><br>

      <center>
 <form method="post">
 <input type="submit" name="RockPaperScissor"
                class="button btn-lg btn-light " value="Play Game" />
				
				<br>
				</form></center><br><br>
</div>
</div>
</body>
</html>



<?php
  if(array_key_exists('RockPaperScissor', $_POST)) 
  {
           RockPaperScissor();
        }
		
		function RockPaperScissor(){    
$game=array("Rock","Paper","Scissor");

$player1=0;
$player2=0;
$player3=0;
$player4=0;
$a1=0;
$a2=0;
$a3=0;
$b1=0;
$b2=0;
$b3=0;
$c1=0;
$c2=0;
$c3=0;
$d1=0;
$d2=0;
$d3=0;

for($i=1;$i<=50;$i++)
{
	
$player1=rand(0,2);
$player2=rand(0,2);
$player3=rand(0,2);
$player4=rand(0,2);
$choice1="$game[$player1]";
$choice2="$game[$player2]";
$choice3="$game[$player3]";
$choice4="$game[$player4]";


 if(($player1==0 && $player2==2) || ($player1==1 && $player2==0) || ($player1==2 && $player2==1))
 
 {
$a1 +=1;

}
elseif($player1==$player2) 
{$a1 +=0;
$b1 +=0;}

else{
$b1 +=1;}



if(($player1==0 && $player3==2) || ($player1==1 && $player3==0) || ($player1==2 && $player3==1))
 
 {
$a2 +=1;

}
elseif($player1==$player3) 
{$a2 +=0;
$c1 +=0;}

else{
$c1 +=1;}



if(($player1==0 && $player4==2) || ($player1==1 && $player4==0) || ($player1==2 && $player4==1))
 
 {
$a3 +=1;

}
elseif($player1==$player4) 
{$a3 +=0;
$d1 +=0;}

else{
$d1 +=1;}



if(($player2==0 && $player3==2) || ($player2==1 && $player3==0) || ($player2==2 && $player2==3))
 
 {
$b2 +=1;

}
elseif($player2==$player3) 
{$b2 +=0;
$c2 +=0;}

else{
$c2 +=1;}

if(($player2==0 && $player4==2) || ($player2==1 && $player4==0) || ($player2==2 && $player4==1))
 
 {
$b3 +=1;

}
elseif($player2==$player4) 
{$d2 +=0;
$b3 +=0;}

else{
$d2 +=1;}



if(($player3==0 && $player4==2) || ($player3==1 && $player4==0) || ($player3==2 && $player4==1))
 
 {
$c3 +=1;

}
elseif($player3==$player4
) 
{$c3 +=0;
$c3 +=0;}

else{
$d3 +=1;}






?>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;

}
th, td {
  padding: 10px;
}

</style>
</head>

<body>
<center>

<h3>Round<?php echo"$i";?></h3>
<table class ="text-center">
<tr>
<td>Player1</td>
<td>Player2</td>
<td>Player3</td>
<td>Player4</td>
</tr>
<tr>
<td><?php echo"$choice1";?></td>
<td><?php echo"$choice2";?></td>
<td><?php echo"$choice3";?></td>
<td><?php echo"$choice4";?></td>

</tr>
</table>
<br><br>
<table class ="text-center">
<tr>
<td>Totals</td>
<td></td>
<td colspan="4">Against</td>

</tr>
<tr>
<td></td>
<td></td>
<td>Player1</td>
<td>Player2</td>
<td>Player3</td>
<td>Player4</td>
</tr>
<tr>
<td rowspan="4">Player wins</td>
<td>Player 1</td>
<td><?php echo "-"?></td>
<td><?php echo "$a1"?></td>
<td><?php echo "$a2"?></td>
<td><?php echo "$a3"?></td>
</tr>
<tr>

<td>Player 2</td>
<td><?php echo "$b1"?></td>
<td><?php echo "-"?></td>
<td><?php echo "$b2"?></td>
<td><?php echo "$b3"?></td>
</tr>
<tr>

<td>Player 3</td>
<td><?php echo "$c1"?></td>
<td><?php echo "$c2"?></td>
<td><?php echo "-"?></td>
<td><?php echo "$c3"?></td>
</tr>
<tr>

<td>Player 4</td>
<td><?php echo "$d1"?></td>
<td><?php echo "$d2"?></td>
<td><?php echo "$d3"?></td>
<td><?php echo "-"?></td>
</tr>
</table>
<br>
<br>
</center>
</body>
</html>
<?php
}


		}
?>



