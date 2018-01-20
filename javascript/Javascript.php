<html>
    
    <head>
        
        <link href="Javascript.css" rel="stylesheet" type="text/css">
        
    </head>
    
    <body>
        
        <div id="HideableFirst">
            <div id="AlertDiv" >
            <h2>Alert</h2>
            <button id="Alert" onclick="Meddelande()">Click Me</button>
            </div>
        
            <div id="HoverDiv">
            <h2>Hover</h2>
            <img src="emon.jpg" id="Hover" width="200px" height="300px" onmouseover="Expand(this)" onmouseout="Minimize(this)">
            </div>
        
            <div id="HideDiv">
            <h2>Hide Img</h2>
            <button id="HideImg" onclick="HideShowImg()">Vill du se en fin bild? KLICKA</button>
        
            <img id="Sneaky" src="emon.jpg" width="200px" height="300px">
            </div>
            
            <div id="BGCDiv">
            <h2>BackgroundColor</h2>
            <button id="BakgrundsFärg" onclick="BakgrundsfärgChange()">Klicka så ska jag visa dig vägen // bästa färgen</button>
            </div>
            
            <div id="RGBdiv" onclick="rgbdiv()" style="height:50px; width:50px; margin:10px; background-color:red;font-size:11px;"><p>Klicka för att se annan färg</p></div>
        
        </div>
            
            <div id="HT">
            <h2>Secret message</h2>
            <button id="HideAndText" onclick="HideAndTextFunc()">Göm allt och Display:a secret message!</button>
            <p id="HideText">Baob e fin</p>
            </div>
        
            <script>    
                
                function Meddelande() {
                    alert("DU SUGER BAJS")
                }
                
                function Expand(x){
                    x.style.height = "600px";
                    x.style.width = "500px";
                }
                
                function Minimize(x) {
                    x.style.height = "300px";
                    x.style.width = "200px";
                }
                
                function HideShowImg(){
                    var x = document.getElementById("Sneaky");
                    if(x.style.display === "none") {
                     x.style.display = "block"
                    }
                    else {x.style.display = "none"}
                }
                
                function BakgrundsfärgChange() {
                    r = Math.floor(Math.random()*255);
                    g = Math.floor(Math.random()*255);
                    b = Math.floor(Math.random()*255);
                document.body.style.backgroundColor = "rgb("+r+","+g+","+b+")";
                }
                
                function HideAndTextFunc() {
                    var x = document.getElementById("HideText");
                    var x2 = document.getElementById("Hideable First")
                    if(x.style.display === "none") {
                     x.style.display = "block";
                     x2.style.display = "none";
                    }
                    else {x.style.display = "none";
                         x2.style.display = "block";}
                }
                
                function rgbdiv() {
                     var x = document.getElementById("RGBdiv");
                    if(x.style.backgroundColor === "red") {
                        
                        x.style.backgroundColor = "green"}
                    
                    
                    else if(x.style.backgroundColor === "green") {
                        
                        x.style.backgroundColor = "blue" }
                    
                    else if(x.style.backgroundColor === "blue") {
                        
                        x.style.backgroundColor = "red" }
                        
                    }
                
            </script>
    </body>
        
        
</html>