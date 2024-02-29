<!doctype html>
<html>
    <?php include("config.php");
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
</head>

<body>
    <header class="px-8 py-8 absolute top-0 left-0 w-full z-40 border-b border-secondary/50">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-lg text-text-primary font-semibold">polymath.ai</h1>
            <ul class="flex items-center gap-3">
                <li>
                    <a href="/login.html" class="text-white text-sm md:text-lg">log In</a>
                </li>
                <li>
                    <a href="#"
                        class="text-pretty bg-secondary text-sm md:text-lg px-4 py-2 rounded-3xl shadow-secondary font-semibold">Contact</a>
                </li>
            </ul>
        </div>
    </header>

    <main class="px-8 py-4 pt-28 bg-primary relative z-0">

        <div class="absolute top-0 left-0 w-80 h-96 bg-secondary pointer-events-none rounded-full blur-[130px]">

        </div>
        <div class="absolute top-48 right-0 w-80 h-96 bg-secondary pointer-events-none rounded-full blur-[130px]">

        </div>


        <div class="min-h-[calc(100vh-10rem)] w-full">
            <div class="max-w-[40rem] glass-bg  p-4 pt-8 mx-auto relative z-10 mt-28 mb-28">
                <div class="flex justify-center items-center">
                    <h2 class="text-3xl text-white ">Sign Up</h2>
                </div>

                <form class="mt-10">
                    <div class="flex flex-col gap-2 my-10">
                        <input type="text" name="username" class="border-b-2 border-white bg-transparent py-2 px-2 outline-none text-white" placeholder="Enter Your Name" />
                    </div>
                    <div class="flex flex-col gap-2 my-10">
                        <input type="email" name="email"  class="border-b-2 border-white bg-transparent py-2 px-2 outline-none text-white" placeholder="Enter Your Email" />
                    </div>
                    <div class="flex flex-col gap-2 my-10">
                        <input type="password" name="password"  class="border-b-2 border-white bg-transparent py-2 px-2 outline-none text-white" placeholder="Enter Your Password" />
                    </div>
                    <div class="flex flex-col gap-2 my-10">
                        <input type="password"  name="confirm password"  class="border-b-2 border-white bg-transparent py-2 px-2 outline-none text-white" placeholder="Enter Your Confirm Password" />
                    </div>

                    <div class="flex justify-between items-center my-10">
                        <p class="text-white/90">Already have account ? <a href="/login.html" class="text-text-primary">Sign Up</a></p>
                    </div>

                    <div class="flex  gap-2 my-10 justify-center">
                    <button type="submit" name="submit" class="py-2 px-6 rounded-md border-2 border-white text-lg text-white">Sign Up</button>
                    </div>
                </form>
            </div>

        </div>

        <!-- footer -->
        <div class="container mx-auto">
            <div class="flex md:justify-between justify-start items-center flex-col md:flex-row pb-4 border-b border-secondary/50 gap-4">
                <h1 class="text-lg text-white font-semibold">polymath.ai</h1>
                <ul class="flex items-center gap-3">
                    <li>
                        <a href="#" class="text-white/70 text-xs md:text-sm">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="text-white/70 text-xs md:text-sm">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="text-white/70 text-xs md:text-sm">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="text-white/70 text-xs md:text-sm">About Us</a>
                    </li>
                </ul>

                <ul class="flex items-center gap-3">
                    <li>
                        <a href="#" class="text-white text-sm">
                            <img src="/images/i1.png"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white text-sm">
                            <img src="/images/i2.png"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white text-sm">
                            <img src="/images/i3.png"/>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="flex justify-center items-center">
                <p class="text-sm text-white/70 pt-4">
                    2024 Polymath.Ai All rights reserved.
                </p>
            </div>
        </div>


    </main>
</body>

</html>

<?php
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    $query = "INSERT INTO form1 (username, email, password, confirm_password) VALUES ('$username', '$email', '$password', '$confirmPassword')";

    $data = mysqli_query($connection, $query);

    if($data)
    {
        echo "Data Inserted into Database";
    }
    else
    {
        echo "Failed";
    }

    mysqli_close($connection);
}
?>