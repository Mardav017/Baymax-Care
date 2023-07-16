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
<form  action="Drsignupback.php" method="POST">
    <section class="absolute bg-sky-100 text-[#0d264f]" style="background-size:90%; width:100%;">
        <nav class="flex justify-between mt-0 mb-4 m-7 pt-5 p-2">
            <div class="flex">
                <img class=" h-16 w-16" src="Image/baymax.png" alt="logo">
                <!-- <h1 class="py-4 mx-3 text-xl font-bold">BayMax Care</h1> -->
                <a href="../index.php"<h1 class="py-4 mx-3 text-xl font-bold">BayMax Care</h1></a>
            </div>
    
            <div class="my-4 mr-5">
            <!-- <a class="ml-96" href="http://localhost/Project/Drlogin/Drlogin.php">Log In</a> -->
            </div>
    
            <div>
            <button class='border rounded-xl p-2 bg-[#0d264f]'><a href="../Drlogin/Drlogin.php" class="text-[#fff]">Login</a></button>
        
            </div>
        </nav>

        

        <div class="py-2">
        
            <div class="text-[#0d264f] rounded-lg bg-white shadow-2xl fixed mt-0 pl-60 pt-2" style="height:71%; width:60%; left: 20%;">
                <h1 class="text-3xl font-bold mb-2">Create Doctor Account</h1>
            
                <form class="pl-16">
                    <input class="rounded-lg w-2/3 my-1 border bg-[#f3f4ef90] px-2 py-1" type="text" name="fname" placeholder="Full Name">
                    <input class="rounded-lg w-2/3 my-1 border bg-[#f3f4ef90] px-2 py-1" type="number" name="phone" placeholder="Phone Number">
                    <input class="rounded-lg w-2/3 border bg-[#f3f4ef90] px-2 py-1 my-1" type="email" name="mail" placeholder="Email Address">
                    <input class="text-neutral-400 rounded-lg w-2/3 border bg-[#f3f4ef90] px-2 py-1 my-1" type="date" name="date"><br>
                    <input class="rounded-lg w-2/3 border bg-[#f3f4ef90] px-2 py-1 my-1" type="password" name="pswd" placeholder="Password">
                    <input class="rounded-lg w-2/3 border bg-[#f3f4ef90] px-2 py-1 my-1" type="password" name="cpswd" placeholder="Confirm Password"><br>
    
                    <input type="submit" class="cursor-pointer text-white font-semibold bg-[#0d264f] hover:bg-[#4f2474] rounded-lg border w-20 h-10 my-3 mx-32" value="Sign Up" name="signup">
                </form>
                
                
                
                
    
            </div>
    
    
            <div class="text-white rounded-lg bg-[#0d264f] fixed shadow-2xl" style="height: 450px; width: 240px; left: 15%; top: 18%; background-image: url(Image/Signup1.jpg); background-size: contain; box-shadow: inset;">
                
            </div>
    
            
            
    
      
        </div>
        
    
        
        </section>
</form>    
</body>
</html>


