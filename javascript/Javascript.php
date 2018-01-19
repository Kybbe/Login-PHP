<head>

</head>

<html>
    
    <body>
            <button id="Alert" onClick="Meddelande()">Click Me</button>
        
            <img src="emon.jpg" id="Hover" width="200px" height="300px" onmouseover="Expand(this)" onmouseout="Minimize(this)">
        
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
                
            </script>
    </body>
        
        
</html>