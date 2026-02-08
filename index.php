<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCMA | WORK DEPT</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-orange-600">
        <section class="container mx-auto flex items-center justify-center bg-white m-10 p-10 rounded-2xl shadow-2xl">
            <div class="flex flex-col md:flex-row w-full h-auto">

                <div class="w-full md:w-1/2 p-6 flex flex-col justify-center">
                    <div class="flex flex-row gap-8 items-center justify-center mb-6">
                        <img src="images/gcmalogo.png" alt="Work Department Logo" class="w-24 h-24">
                        <img src="images/coatofarms.png" alt="Work Department Coat of Arms" class="w-24 h-24">
                    </div>

                    <h1 class="text-center text-2xl font-bold uppercase mt-4">
                        Welcome to the Work Department
                    </h1>

                    <p class="text-center text-sm mt-4 text-orange-600 font-bold italic">
                        At GCMA Work Department, we are dedicated to providing top-notch services and solutions to meet
                        your needs.
                    </p>

                    <div class="flex items-center justify-center">
                        <button
                            class="bg-orange-600 text-white uppercase rounded-lg font-bold px-6 py-2 mt-8 cursor-pointer hover:bg-orange-700 transition duration-300">
                            Read More
                        </button>
                    </div>
                </div>

                <div class="w-full md:w-1/2 p-6 flex flex-col items-center justify-center">
                    <div
                        class="w-full h-full flex flex-col items-center justify-center rounded-lg overflow-hidden shadow-2xl">
                        <h1 class="text-center text-2xl font-bold text-orange-600 uppercase">User Login</h1>
                        <form action="login.php" method="POST"
                            class="w-full p-6 flex flex-col items-center justify-center">

                            <!-- User Type Dropdown -->
                            <select name="user_type" required class="w-full mb-4 p-3 border border-gray-300 rounded-lg bg-white
           focus:outline-none focus:ring-2 focus:ring-orange-600">
                                <option value="" disabled selected>Select User Type</option>
                                <option value="admin">Administrator</option>
                                <option value="engineer">Works Engineer</option>
                                <option value="technician">Technician</option>
                                <option value="officer">Planning Officer</option>
                            </select>


                            <input type="password" name="password" placeholder="Password" required class="w-full mb-4 p-3 border border-gray-300 rounded-lg
           focus:outline-none focus:ring-2 focus:ring-orange-600">


                            <label class="flex items-center w-full mb-4 text-sm text-gray-700">
                                <input type="checkbox" name="remember" class="mr-2">
                                Remember Me
                            </label>

                            <!-- Submit Button -->
                            <button type="button" onclick="window.location.href='admin/dashboard.php'" class="bg-orange-600 text-white text-center uppercase rounded-lg font-bold
           px-6 py-2 mt-2 cursor-pointer hover:bg-orange-700
           transition duration-300 w-full">
                                Login
                            </button>

                            <!-- 
                            <marquee direction="left">This text moves sideways</marquee>

                            <marquee direction="right">Move Right</marquee>
<marquee behavior="alternate">Bounce</marquee>
<marquee scrollamount="10">Faster</marquee> -->

                        </form>



                    </div>
                </div>

            </div>
        </section>
    </div>


</body>

</html>