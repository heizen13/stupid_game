
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ROLE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <style>
    #container {
      width: 220px;
      height: 50px;
      position: relative;
      background: black;
      color:white;
    }
    #animate {
      width: 20px;
      height: 20px;
      position: absolute;
    }
    #animate2 {
      width: 20px;
      height: 20px;
      position: absolute;
      float: right;
    }



    #myhealth{
                    width:20%;
                    background-color: grey;
                    border: 1px solid black;
                }
                #player-health{
                    width: 100%;
                    background-color: green;

                }
                #opponenthealth{
                    width:20%;
                    background-color: grey;
                    border: 1px solid black;
                }
                #opponent-health{
                    width: 100%;
                    background-color: green;
                }

        #skill{



        }

    </style>
<!-- BATTLE START-->

    <body>
      <h3>opponent Health </h3><div id="opponenthealth"><div id="opponent-health"></div></div>
      <h3>Your Health </h3><div id="myhealth"><div id="player-health"></div></div><br>
      <button onclick="attack();myMove();myMove2();mySkill();" id="attack-button">Hit em </button>
      <button onclick="restart()" id="restart-button" hidden="">Restart </button>
      <h3 id = "game-message" style="color:red;"></h3>
<!-- BATTLE END-->



<!-- SQUARE START-->


        <div id ="container">

<div>
<pre>
👺<div id ="animate"><div id ="skill"></div></div>
|==
/\
</pre>
<div style="float:right;margin-top:-70px;">
<pre>
             😎<div id ="animate2"><div id ="skill2"></div></div>
            /|\
            /\
</pre>
      </div>
        </div>

        </div>

        <script>
        function mySkill(){
          var x=Math.floor((Math.random() * 2) + 1);
          if (x==1) {
            document.getElementById('skill').innerHTML = "💨✨";
            document.getElementById('skill2').innerHTML = "            💩";
          }
          else {
          document.getElementById('skill').innerHTML = "💨";
          document.getElementById('skill2').innerHTML = "            💫";
          }

        }



        function myMove() {
          var elem = document.getElementById("animate");
          var pos = 0;
          var id = setInterval(frame,10);
          function frame() {
            if (pos == 200) {
              clearInterval(id);
            } else {
              pos++;

              elem.style.left = pos + 'px';
            }
          }
        }
        </script>

        <script>
        function myMove2() {
          var elem = document.getElementById("animate2");
          var pos = 100;
          var id = setInterval(frame,10);
          function frame() {
            if (pos == 290) {
              clearInterval(id);
            } else {
              pos++;

              elem.style.right = pos + 'px';
            }
          }
        }
        </script>



<!-- SQUARE END-->






    </body>
    <script src ="play.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>

</html>
