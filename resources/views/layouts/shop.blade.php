<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ecom</title>
    <link rel="stylesheet" href="/css/styleauth.css">
 <style>
 *{
    padding: 0;
    margin: 0;
}
.container{
    width: 100%;
    height: 100vh;
    font-family: sans-serif;
    background-color: rgb(187,187,245);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
}


 </style>
</head>
<body>
<div class="container">
       
                    <h2>cart</h2>
                 
    
          @yield('content')


    </div>

  
    <script>
        var card= document.getElementById("card");
        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }
       
    </script>

</body>
</html>