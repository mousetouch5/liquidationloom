<x-app-layout>


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>



    <div class="flex h-full min-h-screen">
        <!-- Sidebar -->
        <x-sidebar class="custom-sidebar-class" />
         </aside>
        <!-- end side bar -->






        <!-- Grid event section -->
        <div class="flex flex-col lg:flex-row lg:space-x-6 w-full">
            <!-- Content Section -->
            <main class="flex-1 px-8 py-6 space-y-6 bg-gray-50">
                <!-- Title -->
                <div class="p-4 bg-gray-50">
                    <h2 class="text-xl font-semibold text-gray-700" data-aos="fade-up" data-aos-duration="2000">
                        Transaction</h2>
                </div>
                <!-- Expenses Table Section -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden w-full mt-5" data-aos="fade-up"
                    data-aos-duration="2000">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 text-left text-sm font-semibold">
                                <th class="py-3 px-4">Event/Project</th>
                                <th class="py-3 px-4">Date</th>
                                <th class="py-3 px-4">Budget</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr class="odd:bg-gray-50">
                                    <td class="py-3 px-4">{{ $event->eventName }}</td>
                                    <td class="px-3 py-4">{{ \Carbon\Carbon::parse($event->eventDate)->format('F Y') }}
                                    <td class="py-3 px-4 text-green-500">{{ $event->budget }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!-- Add a new row for inputs and file verification icon -->
                        <tfoot class="mt-5">
                            <tr class="odd:bg-gray-50">
                                <td class="py-3 px-4">
                                    <label for="eventProject"
                                        class="block text-sm font-medium text-gray-700">Event/Project</label>
                                    <select id="eventProject" class="w-full p-2 border border-gray-300 rounded-lg">
                                        <option value="community_outreach">Community Outreach</option>
                                        <option value="lunch">Lunch</option>
                                        <option value="afternoon_snacks">Afternoon Snacks</option>
                                        <option value="performance_cost">Performance Cost</option>
                                        <option value="gift_for_youth">Gift for Youth</option>
                                        <option value="prizes_for_games">Prizes for Games</option>
                                        <option value="emergency_funds">Emergency Funds</option>
                                    </select>
                                </td>
                                <td class="py-3 px-4">
                                    <label for="eventDate"
                                        class="block text-sm font-medium text-gray-700">Date</label>
                                    <input type="date" id="eventDate"
                                        class="w-full p-2 border border-gray-300 rounded-lg">
                                </td>
                                <td class="py-3 px-4">
                                    <label for="budgetAmount"
                                        class="block text-sm font-medium text-gray-700">Budget</label>
                                    <input type="number" id="budgetAmount" step="0.01"
                                        class="w-full p-2 border border-gray-300 rounded-lg" placeholder="₱0.00">
                                </td>
                            </tr>



                            <!-- Row for the buttons -->
                            <tr>
                                <td colspan="3" class="py-3 px-4 text-center flex justify-center space-x-4">
                                    <!-- Verify Button -->
                                    <button
                                        class="flex items-center justify-center bg-cyan-500 text-white rounded-lg p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                                            <path
                                                d="M7.293 4.293a1 1 0 0 1 1.414 0L12 7.586l3.293-3.293a1 1 0 0 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0L8 6.707l-2.707 2.707a1 1 0 0 1-1.414-1.414l3-3z" />
                                            <path
                                                d="M14 4.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8.5a1 1 0 0 1 .707.293l2.5 2.5A1 1 0 0 1 14 4.5z" />
                                        </svg>
                                        <span class="ml-2">Verify File</span>
                                    </button>

                                    <!-- Submit Button -->
                                    <button type="submit" class="bg-cyan-500 text-white rounded-lg p-2">
                                        Submit
                                    </button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </main>
        </div>




        <!-- Right-Side Content Section -->
        <aside class="lg:w-1/3 w-full mt-5 lg:mt-0" data-aos="fade-left" data-aos-duration="2000">
            <div class="bg-white shadow-lg rounded-lg p-6 relative">
                <div class="bg-white shadow-md rounded-lg w-80 p-4">
                    <!-- Community Outreach Budget -->
                    <div class="bg-cyan-500 text-white rounded-lg p-4 text-center mb-4">

                        <!--calendar-->

                        <button id="openModal"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 focus:outline-none absolute left-12 top-11">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 18.125C0 19.1602 0.959821 20 2.14286 20H17.8571C19.0402 20 20 19.1602 20 18.125V7.5H0V18.125ZM14.2857 10.4688C14.2857 10.2109 14.5268 10 14.8214 10H16.6071C16.9018 10 17.1429 10.2109 17.1429 10.4688V12.0312C17.1429 12.2891 16.9018 12.5 16.6071 12.5H14.8214C14.5268 12.5 14.2857 12.2891 14.2857 12.0312V10.4688ZM14.2857 15.4688C14.2857 15.2109 14.5268 15 14.8214 15H16.6071C16.9018 15 17.1429 15.2109 17.1429 15.4688V17.0312C17.1429 17.2891 16.9018 17.5 16.6071 17.5H14.8214C14.5268 17.5 14.2857 17.2891 14.2857 17.0312V15.4688ZM8.57143 10.4688C8.57143 10.2109 8.8125 10 9.10714 10H10.8929C11.1875 10 11.4286 10.2109 11.4286 10.4688V12.0312C11.4286 12.2891 11.1875 12.5 10.8929 12.5H9.10714C8.8125 12.5 8.57143 12.2891 8.57143 12.0312V10.4688ZM8.57143 15.4688C8.57143 15.2109 8.8125 15 9.10714 15H10.8929C11.1875 15 11.4286 15.2109 11.4286 15.4688V17.0312C11.4286 17.2891 11.1875 17.5 10.8929 17.5H9.10714C8.8125 17.5 8.57143 17.2891 8.57143 17.0312V15.4688ZM2.85714 10.4688C2.85714 10.2109 3.09821 10 3.39286 10H5.17857C5.47321 10 5.71429 10.2109 5.71429 10.4688V12.0312C5.71429 12.2891 5.47321 12.5 5.17857 12.5H3.39286C3.09821 12.5 2.85714 12.2891 2.85714 12.0312V10.4688ZM2.85714 15.4688C2.85714 15.2109 3.09821 15 3.39286 15H5.17857C5.47321 15 5.71429 15.2109 5.71429 15.4688V17.0312C5.71429 17.2891 5.47321 17.5 5.17857 17.5H3.39286C3.09821 17.5 2.85714 17.2891 2.85714 17.0312V15.4688ZM17.8571 2.5H15.7143V0.625C15.7143 0.28125 15.3929 0 15 0H13.5714C13.1786 0 12.8571 0.28125 12.8571 0.625V2.5H7.14286V0.625C7.14286 0.28125 6.82143 0 6.42857 0H5C4.60714 0 4.28571 0.28125 4.28571 0.625V2.5H2.14286C0.959821 2.5 0 3.33984 0 4.375V6.25H20V4.375C20 3.33984 19.0402 2.5 17.8571 2.5Z"
                                    fill="#FDFDFD" />
                            </svg>

                        </button>


                        <h2 class="text-sm font-semibold">Community Outreach</h2>
                        <p class="text-xs">Total Budget</p>
                        <p class="text-2xl font-bold">₱{{ number_format($totalBudget, 2) }}</p>

                        <p class="text-xs">Total Budget Used</p>
                        <p class="text-2xl font-bold">${{ number_format($bb, 2) }}</p>

                        <p class="text-xs">Total Remaining Budget</p>
                        <p class="text-2xl font-bold">₱{{ number_format($horse_shit, 2) }}</p>
                    </div>


                    <!-- Barangay Officials -->
                    <div class="bg-white shadow-lg rounded-lg p-6 mt-5" data-aos="fade-left"
                        data-aos-duration="2000">
                        <h4 class="text-lg font-semibold">Barangay Officials</h4>
                        <ul class="mt-4 space-y-4">
                            <li class="flex items-center space-x-4">
                                <img src="https://via.placeholder.com/40" alt="Official"
                                    class="w-10 h-10 rounded-full">
                                <div>
                                    <p class="text-sm font-semibold">Maria Catarina Agoncillo</p>
                                    <p class="text-xs text-gray-500">Barangay Captain</p>
                                </div>
                            </li>
                            <li class="flex items-center space-x-4">
                                <img src="https://via.placeholder.com/40" alt="Official"
                                    class="w-10 h-10 rounded-full">
                                <div>
                                    <p class="text-sm font-semibold">Joshua Cabatuan</p>
                                    <p class="text-xs text-gray-500">Barangay Secretary</p>
                                </div>
                            </li>
                            <li class="flex items-center space-x-4">
                                <img src="https://via.placeholder.com/40" alt="Official"
                                    class="w-10 h-10 rounded-full">
                                <div>
                                    <p class="text-sm font-semibold">Juan Dela Cruz</p>
                                    <p class="text-xs text-gray-500">Barangay Treasurer</p>
                                </div>
                            </li>
                        </ul>
                    </div>
        </aside>
    </div>
    </div>




</x-app-layout>
