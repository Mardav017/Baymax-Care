
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="tailwindcss.css"></script>
</head>
<body class="bg-[#e0f2fe]">
    <form  action="Drloginback.php" method="POST">
    <section class="absolute bg-sky-100 text-[#0d264f]" style="background-size:90%; width:100%;">
        <nav class="flex justify-between mt-0 m-7 pt-5 p-2">
            <div class="flex">
                <img class=" h-16 w-16" src="Image/baymax.png" alt="logo">
                <!-- <h1 class="py-4 mx-3 text-xl font-bold">BayMax Care</h1> -->
                <a href="../index.php"<h1 class="py-4 mx-3 text-xl font-bold">BayMax Care</h1></a>
            </div>
    
            
    
            <div>
            <button class='border rounded-xl p-2 bg-[#0d264f]'><a href="../Drsignup/Drsignup.php" class="text-[#fff]">Signup</a></button>
        
            </div>
        </nav>

        <div class="py-5">
        
            <div class="text-[#4f2474] rounded-lg bg-white shadow-2xl fixed mt-0 pl-60 pt-16" style="height:67%; width:60%; left: 20%;">
                <h1 class="text-3xl font-bold mb-8">Dr. Login In</h1>
                <form class="pl-16">
                    <input class="rounded-lg w-2/3 border bg-[#f3f4ef90] px-2 py-1 my-1" type="email" name="mail" placeholder="Email Address"><br>
                    <input class="rounded-lg w-2/3 border bg-[#f3f4ef90] px-2 py-1 my-1" type="password" name="pswd" placeholder="Password"><br>
                    
                    <input class="ml-4" type="checkbox" name="remember" id=""> Remember Me<br>
                    
                    <input type="submit" class="cursor-pointer text-white font-semibold bg-[#0d264f] hover:bg-[#4f2474] rounded-lg border w-20 h-10 mt-4 mb-8 mx-28" value="log In" name="login"><br>
    
                    <!-- Don't have a account?<input type="submit" class="cursor-pointer text-white font-semibold bg-[#0d264f] hover:bg-[#4f2474] rounded-lg border w-36 h-10 my-2 ml-7" value="Create Account" name="createacc"> -->
                    
                </form>
                
                
                
                
    
            </div>
    
    
            <div class="text-white rounded-lg bg-[#93daf8] fixed shadow-2xl" style="height: 420px; width: 240px; left: 15%; top: 22%; background-image: url(Image/Drlogin.jpg); background-size: contain; box-shadow: inset;">
                
            </div>
    
            
            
    
      
        </div>
        
    
        
        </section>
</form>
    
</body>
</html>