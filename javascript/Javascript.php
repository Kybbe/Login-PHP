<head>

</head>

<html>
    
    <style>
    
        #Sneaky {display: none};
    
    </style>
    
    <body>
            <button id="Alert" onClick="Meddelande()">Click Me</button>
        
            <img src="emon.jpg" id="Hover" width="200px" height="300px" onmouseover="Expand(this)" onmouseout="Minimize(this)">
        
            <button id="HideImg" onclick="HideShowImg()">Vill du se en fin bild? KLICKA</button>
        
            <img id="Sneaky" src="emon.jpg" width="200px" height="300px">
        
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
                
            </script>
    </body>
        
        
</html>