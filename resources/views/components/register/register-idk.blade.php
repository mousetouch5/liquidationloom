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
                        <input type="text" id="first_name" name="first_name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="middle_name" class="block text-sm font-semibold">Middle Name</label>
                        <input type="text" id="middle_name" name="middle_name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="last_name" class="block text-sm font-semibold">Last Name</label>
                        <input type="text" id="last_name" name="last_name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="grid grid-cols-3 gap-6">
                    <div>
                        <label for="birthdate" class="block text-sm font-semibold">Birthdate</label>
                        <input type="date" id="birthdate" name="birthdate"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold">Email Address</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="brgy_id" class="block text-sm font-semibold">Barangay ID</label>
                        <input type="text" id="brgy_id" name="brgy_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>


                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="password" class="block text-sm font-semibold">Password</label>
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="confirm_password" class="block text-sm font-semibold">Confirm
                            Password</label>
                        <input type="password" id="confirm_password" name="confirm_password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>



                <!-- Row 3 -->
                <div class="grid grid-cols-3 gap-6">
                    <div>
                        <label for="lot_number" class="block text-sm font-semibold">Lot Number</label>
                        <input type="text" id="lot_number" name="lot_number"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="block_number" class="block text-sm font-semibold">Block Number</label>
                        <input type="text" id="block_number" name="block_number"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="purok" class="block text-sm font-semibold">Purok</label>
                        <input type="text" id="purok" name="purok"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <!-- Row 4 -->
                <div class="grid grid-cols-3 gap-6">
                    <div>
                        <label for="brgy_city_zipcode" class="block text-sm font-semibold">Barangay, City,
                            Zip Code</label>
                        <input type="text" id="brgy_city_zipcode" name="brgy_city_zipcode"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="brgy_city_zipcode" class="block text-sm font-semibold">City</label>
                        <input type="text" id="brgy_city_zipcode" name="brgy_city_zipcode"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="brgy_city_zipcode" class="block text-sm font-semibold">Zip
                            Code</label>
                        <input type="text" id="brgy_city_zipcode" name="brgy_city_zipcode"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>


                    <div></div> <!-- Empty space for alignment -->
                </div>



                <!-- Row 6: Choose File (ID Verification) -->
                <div class="grid grid-cols-3 gap-6">
                    <div>
                        <label for="Proof of id Verification " class="block text-sm font-semibold">Choose
                            File</label>
                        <input type="file" id="choose_file" name="choose_file"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="choose_file" class="block text-sm font-semibold">Choose File</label>
                        <input type="file" id="choose_file" name="choose_file"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div></div> <!-- Empty space for alignment -->
                </div>
            </div>

            <!-- Modal Footer -->
            <!-- Modal Footer -->
            <div class="flex justify-center mt-4 ">
                <button type="submit" id="signUpButton"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 w-80">Sign
                    Up</button>
            </div>


        </form>
    </div>
</dialog>
