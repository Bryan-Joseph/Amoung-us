<!DOCTYPE html>
<html lang="en">
<head>
    <title>Check imposter or not.</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS  if error remove 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</head>
<body class="bg-primary text-center" onload="next()">
    <div class="bg-white">
        <h1>No . of people playing :</h1>
        <h1 id="getThis"><?php echo $_GET["p"]?></h1>
    </div>


    <div class="bg-white">
        <p id="pppppp"></p>
    </div>

    <div class="bg-white mx-auto" style="height: 150px; width: 300px;">
    <p id="pTag" style="display: none; font-size: 20px;" class="mt-5 font-weight-bolder"></p>
    </div>
    <button class="btn btn-success mt-5"type="button" onclick="showHide()">Show</button>
    <button class="btn btn-success mt-5"type="button" onclick="next()">Next</button>

    <script>
        i = 1;

        var pp = document.getElementById("getThis").innerHTML;
        var randomNumber = Math.floor(Math.random() * pp)+1;

        pd = 0


        function showHide(){
                document.getElementById("pTag").style.display = "inline-block";
        }

        function next() {
            document.getElementById("pTag").style.display = "none";           
            
            if(i <= pp){
                if(i == randomNumber){
                    document.getElementById("pTag").innerHTML = "You are the imposter";
                    i++;
                }else{
                    document.getElementById("pTag").innerHTML = "You are a crewmate";
                    i++;
                }
                pd++
                console.log(pp);

                document.getElementById("pppppp").innerHTML = pd;
            }else {
                document.getElementById("pTag").innerHTML = ""; 
            }
        }
    </script>

</body>
</html>