<?php

use App\Models\tailwind;
?>

<body class="text-gray-800 antialiased">

    <main>
        <section class="absolute w-full h-full">
            <div class="absolute top-0 w-full h-full bg-gray-900"
                style="background-image: url(resources/img/register_bg_2.png); background-size: 100%; background-repeat: no-repeat;">

            </div>

            <div class="container mx-auto px-4 h-full">

                <div class="flex content-center items-center justify-center h-full">
                    <div class="w-full lg:w-4/12 px-4">

                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                            <div class="rounded-t mb-0 px-6 py-6">

                                <div class="text-center mb-3">
                                    <h6 class="text-gray-600 text-sm font-bold">
                                        Sign Up with
                                    </h6>
                                </div>

                                <div class="btn-wrapper text-center">
                                    <button
                                        class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                                        type="button" style="transition: all 0.15s ease 0s;">
                                        <img alt="..." class="w-5 mr-1"
                                            src="resources/img/facebook.svg">Facebook</button><button
                                        class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                                        type="button" style="transition: all 0.15s ease 0s;">
                                        <img alt="..." class="w-5 mr-1" src="./resources/img/google.svg">Google
                                    </button>
                                </div>
                                <hr class="mt-6 border-b-1 border-gray-400">
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <?php
                                if (isset($_SESSION['success_message'])) {
                                    tailwind::toast("success", $_SESSION['success_message']);
                                    unset($_SESSION['success_message']);
                                } else 
            if (isset($_SESSION['error_message'])) {
                                    tailwind::toast("error", $_SESSION['error_message']);
                                    unset($_SESSION['error_message']);
                                }
                                ?>
                                <div class="text-gray-500 text-center mb-3 font-bold">
                                    <small>Or sign up with credentials</small>
                                </div>
                                <form action="/signup" method="post">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="grid-username">username</label><input type="text" name="username"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="username" style="transition: all 0.15s ease 0s;">
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="grid-password">Email</label><input type="email" name="email"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Email" style="transition: all 0.15s ease 0s;">
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="grid-password">Password</label><input type="password" name="password"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Password" style="transition: all 0.15s ease 0s;">
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="grid1-password">Re Password</label><input type="password"
                                            name="repassword"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Password" style="transition: all 0.15s ease 0s;">
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center cursor-pointer"><input
                                                id="customCheckLogin" type="checkbox"
                                                class="form-checkbox border-0 rounded text-gray-800 ml-1 w-5 h-5"
                                                style="transition: all 0.15s ease 0s;"><span
                                                class="ml-2 text-sm font-semibold text-gray-700">Remember
                                                me</span></label>
                                    </div>
                                    <div class="text-center mt-6">
                                        <button name="signup"
                                            class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                            type="submit" style="transition: all 0.15s ease 0s;">
                                            Sign up
                                        </button>
                                    </div>
                                    <div class="flex flex-wrap mt-6">

                                        <div class="w-1/2 text-right">
                                            <a href="/login" class="text-primary-900"><small>Already Have
                                                    Accouht?</small></a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
    </main>

    <script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
    </script>

</body>

</html>