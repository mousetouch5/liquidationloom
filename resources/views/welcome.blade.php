<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquidation Loom</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.4/dist/sweetalert2.min.css" rel="stylesheet">

        <!-- SweetAlert2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.4/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen flex relative">
    <!-- Background Overlay Image -->
    
    <!-- Left Section -->
    <div class="w-[900px] bg-white flex flex-col items-center justify-center text-center relative z-10">
       
       
        <img src="{{ asset('logo/homeiconpage-removebg-preview.png') }}" 
        alt="Background Overlay" 
        class="absolute top-[1%] right-[30%] h-full opacity-30 z-0 object-cover">
        <img src="{{ asset('logo/home1iconpage.png') }}" alt="Logo" class="w-48 mb-16">
        <h1 class="text-5xl font-extrabold mb-4">Liquidation Loom</h1>
        <p class="text-gray-600">Your one-stop solution for efficient barangay financial management and transparency.</p>
    </div>
   

    <!-- Right Section -->
    <div class="flex-1 bg-blue-100 h-auto flex flex-col items-center justify-center text-center relative z-10 ">
        <h3 class="text-2xl font-extrabold mb-6" id="accountRoleHeading">CHOOSE ACCOUNT ROLE <br> TO CREATE</h3>
        <div class="flex space-x-4 mb-6">
          <!-- Official Button with Icon -->
          
<!-- Official Icon Above the Button -->
<div class="flex flex-col items-center mb-4">
    <i id="icon" class="fas fa-user-shield text-3xl mb-2"></i>
    <button id="officialButton" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition mx-auto block" onclick="my_modal_4.showModal()">
        Official
    </button>
</div>

<!-- Resident Icon Above the Button -->
<div class="flex flex-col items-center mb-4">
    <i id="icon1" class="fas fa-user-circle text-3xl mb-2"></i>
    <button id="residentButton" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition mx-auto block" onclick="my_modal_3.showModal()">
        Resident
    </button>
</div>





                <!-- Hidden Login Form -->
                        <div id="loginForm" class="hidden mt-4 w-full max-w-lg">
                            <h3 id="accountRoleHeading" class="text-5xl font-bold mb-6">Login</h3>
                            <form id="loginFormAction" action="/login" method="POST" class="space-y-4">
                                <div class="flex flex-col">
                                    <label for="email" class="block text-sm font-semibold text-left">Email</label>
                                    <input type="text" id="email" name="first_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter your first name" required>
                                </div>
                        
                                <div class="flex flex-col">
                                    <label for="password" class="block text-sm font-semibold text-left">Password</label>
                                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" required>
                                </div>
                        
                                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition mt-4 w-full">Login</button>
                            </form>
                        </div>


           

                        <dialog id="my_modal_3" class="modal">
                            <div class="modal-box w-full max-w-4xl">
                                <form id="signup_form" action="/your-signup-endpoint" method="POST" class="grid grid-cols-1 gap-6 p-6">
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" onclick="my_modal_3.close()">✕</button>
                            <!-- Form Fields -->
                        <div class="space-y-4">
                            <!-- Row 1 -->
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-semibold">First Name</label>
                                    <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>
                                
                                <div>
                                    <label for="middle_name" class="block text-sm font-semibold">Middle Name</label>
                                    <input type="text" id="middle_name" name="middle_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                </div>
                                
                                <div>
                                    <label for="last_name" class="block text-sm font-semibold">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>
                            </div>

                            <!-- Row 2 -->
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <label for="birthdate" class="block text-sm font-semibold">Birthdate</label>
                                    <input type="date" id="birthdate" name="birthdate" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-semibold">Email Address</label>
                                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>

                                <div>
                                    <label for="brgy_id" class="block text-sm font-semibold">Barangay ID</label>
                                    <input type="text" id="brgy_id" name="brgy_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>
                            </div>


                            <div class="grid grid-cols-1 gap-6">
                                <div>
                                    <label for="password" class="block text-sm font-semibold">Password</label>
                                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>

                                <div>
                                    <label for="confirm_password" class="block text-sm font-semibold">Confirm Password</label>
                                    <input type="password" id="confirm_password" name="confirm_password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>
                            </div>



                            <!-- Row 3 -->
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <label for="lot_number" class="block text-sm font-semibold">Lot Number</label>
                                    <input type="text" id="lot_number" name="lot_number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>

                                <div>
                                    <label for="block_number" class="block text-sm font-semibold">Block Number</label>
                                    <input type="text" id="block_number" name="block_number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>

                                <div>
                                    <label for="purok" class="block text-sm font-semibold">Purok</label>
                                    <input type="text" id="purok" name="purok" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>
                            </div>

                            <!-- Row 4 -->
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <label for="brgy_city_zipcode" class="block text-sm font-semibold">Barangay, City, Zip Code</label>
                                    <input type="text" id="brgy_city_zipcode" name="brgy_city_zipcode" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>
                                <div>
                                    <label for="brgy_city_zipcode" class="block text-sm font-semibold">City</label>
                                    <input type="text" id="brgy_city_zipcode" name="brgy_city_zipcode" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>

                                <div>
                                    <label for="brgy_city_zipcode" class="block text-sm font-semibold">Zip Code</label>
                                    <input type="text" id="brgy_city_zipcode" name="brgy_city_zipcode" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>


                                <div></div> <!-- Empty space for alignment -->
                            </div>

                        
                            
                           

                                            <!-- Modal Footer -->
                              <!-- Modal Footer -->
                            <div class="flex justify-center mt-4 ">
                                <button type="submit" id="signUpButton" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 w-80">Sign Up</button>
                            </div>


                                </form>
                            </div>
                        </dialog>


                        <!-- modal 4 offical button modal -->
                        

                        <dialog id="my_modal_4" class="modal">
                            <div class="modal-box w-full max-w-4xl">
                                <form id="signup_form" action="/your-signup-endpoint" method="POST" class="grid grid-cols-1 gap-6 p-6">
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" onclick="my_modal_4.close()">✕</button>
                            <!-- Form Fields -->
                        <div class="space-y-4">
                            <!-- Row 1 -->
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-semibold">First Name</label>
                                    <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>
                                
                                <div>
                                    <label for="middle_name" class="block text-sm font-semibold">Middle Name</label>
                                    <input type="text" id="middle_name" name="middle_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                </div>
                                
                                <div>
                                    <label for="last_name" class="block text-sm font-semibold">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>
                            </div>

                            <!-- Row 2 -->
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <label for="birthdate" class="block text-sm font-semibold">Birthdate</label>
                                    <input type="date" id="birthdate" name="birthdate" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-semibold">Email Address</label>
                                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>

                                <div>
                                    <label for="brgy_id" class="block text-sm font-semibold">Barangay ID</label>
                                    <input type="text" id="brgy_id" name="brgy_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>
                            </div>


                            <div class="grid grid-cols-1 gap-6">
                                <div>
                                    <label for="password" class="block text-sm font-semibold">Password</label>
                                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>

                                <div>
                                    <label for="confirm_password" class="block text-sm font-semibold">Confirm Password</label>
                                    <input type="password" id="confirm_password" name="confirm_password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>
                            </div>



                            <!-- Row 3 -->
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <label for="lot_number" class="block text-sm font-semibold">Lot Number</label>
                                    <input type="text" id="lot_number" name="lot_number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>

                                <div>
                                    <label for="block_number" class="block text-sm font-semibold">Block Number</label>
                                    <input type="text" id="block_number" name="block_number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>

                                <div>
                                    <label for="purok" class="block text-sm font-semibold">Purok</label>
                                    <input type="text" id="purok" name="purok" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>
                            </div>

                            <!-- Row 4 -->
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <label for="brgy_city_zipcode" class="block text-sm font-semibold">Barangay, City, Zip Code</label>
                                    <input type="text" id="brgy_city_zipcode" name="brgy_city_zipcode" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>
                                <div>
                                    <label for="brgy_city_zipcode" class="block text-sm font-semibold">City</label>
                                    <input type="text" id="brgy_city_zipcode" name="brgy_city_zipcode" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>

                                <div>
                                    <label for="brgy_city_zipcode" class="block text-sm font-semibold">Zip Code</label>
                                    <input type="text" id="brgy_city_zipcode" name="brgy_city_zipcode" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" >
                                </div>


                                <div></div> <!-- Empty space for alignment -->
                            </div>

                        
                            
                            <!-- Row 6: Choose File (ID Verification) -->
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <label for="Proof of id Verification " class="block text-sm font-semibold">Choose File</label>
                                    <input type="file" id="choose_file" name="choose_file" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="choose_file" class="block text-sm font-semibold">Choose File</label>
                                    <input type="file" id="choose_file" name="choose_file" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                </div>

                                <div></div> <!-- Empty space for alignment -->
                            </div>
                        </div>

                                            <!-- Modal Footer -->
                              <!-- Modal Footer -->
                            <div class="flex justify-center mt-4 ">
                                <button type="submit" id="signUpButton" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 w-80">Sign Up</button>
                            </div>


                                </form>
                            </div>
                        </dialog>




        </div>
        <p class="text-gray-600 text-sm">
            Already have an account? 
            <a href="javascript:void(0);" id="loginLink" class="text-blue-500 hover:underline">Login Here</a>.
        </p>
    </div>
</body>
    <!-- script for offbutton residentbutton  hide -->



   
    <script>
        const accountRoleHeading = document.getElementById('accountRoleHeading');
        const officialButton = document.getElementById('officialButton');
        const residentButton = document.getElementById('residentButton');
        const loginForm = document.getElementById('loginForm');
        const icon = document.getElementById('icon');
        const icon1 = document.getElementById('icon1');
        const loginLink = document.getElementById('loginLink');
    
       
    
        // Add event listener to show the login form when "Login Here" link is clicked
        loginLink.addEventListener('click', function() {
            loginForm.classList.remove('hidden');  // Make the login form visible
            accountRoleHeading.classList.add('hidden');  // Hide the account role heading
            icon.classList.add('hidden');  // Hide the first icon
            icon1.classList.add('hidden');  // Hide the second icon
    
            // Hide both buttons when the login form is displayed
            officialButton.classList.add('hidden');
            residentButton.classList.add('hidden');
        });
    </script>

<!-- Script to control the modal -->
<script>
    const my_modal_3 = document.getElementById('my_modal_3');

    // Handling form submission (optional)
    document.getElementById('signup_form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission (for now)
       
        
        // Close modal after submission (optional)
        my_modal_3.close();
    });
</script>


                                <!-- sweet alert section --> 
                            <script>
                                // SweetAlert for Login Button
                                const loginFormAction = document.getElementById('loginFormAction');
                                loginFormAction.addEventListener('submit', function(event) {
                                    event.preventDefault(); // Prevent form submission to demonstrate SweetAlert
                                    
                                    // Example success alert
                                    Swal.fire({
                                        title: 'Login Successful',
                                        text: 'Welcome back!',
                                        icon: 'success',
                                        confirmButtonText: 'OK'
                                    });
                                    
                                    // You can also trigger other types of alerts based on validation or conditions
                                    // For example, if login fails:
                                    // Swal.fire({
                                    //     title: 'Error',
                                    //     text: 'Invalid credentials, please try again.',
                                    //     icon: 'error',
                                    //     confirmButtonText: 'Try Again'
                                    // });
                                });
                            </script>

                                



</html>