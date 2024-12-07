<x-app-layout>


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>






    <div class="flex h-screen items-center justify-center bg-gray-50">
        <x-sidebar class="custom-sidebar-class" />
         </aside>







        <!-- Main Content -->
        <div class="w-3/4 bg-white shadow-lg h-[90vh] flex flex-col">
            <div class="flex-1 flex flex-col">
                <!-- Title -->
                <div class="p-4 bg-gray-50">
                    <h2 class="text-xl font-semibold text-gray-700"data-aos="fade-up" data-aos-duration="2000">Audit
                        Trail</h2>
                </div>

                <!-- Tabs -->
                <div class="p-4 bg-gray-50" data-aos="fade-up" data-aos-duration="2000">
                    <div class="flex space-x-6 border-b">
                        <button class="py-2 px-4 font-medium text-gray-700 border-b-2 border-blue-600">All</button>
                        <button
                            class="py-2 px-4 font-medium text-gray-700 hover:border-b-2 hover:border-gray-300">User</button>
                        <button
                            class="py-2 px-4 font-medium text-gray-700 hover:border-b-2 hover:border-gray-300">Budget
                            Allocation</button>
                        <button
                            class="py-2 px-4 font-medium text-gray-700 hover:border-b-2 hover:border-gray-300">Expenses</button>
                        <button class="py-2 px-4 font-medium text-gray-700 hover:border-b-2 hover:border-gray-300">
                            Actual Budget Used</button>
                        <button
                            class="py-2 px-4 font-medium text-gray-700 hover:border-b-2 hover:border-gray-300">Transaction
                            Type</button>
                    </div>
                </div>

                <!-- Table -->
                <div class="p-4">
                    <table class="table-auto w-full bg-white shadow-md rounded-md"data-aos="fade-up"
                        data-aos-duration="2000">
                        <thead class="bg-gray-200">

                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr class="hover:bg-gray-100">
                                    <!-- Organizer -->
                                    <td class="px-4 py-2">{{ $event->organizer }}</td>
                                    <!-- Event Name -->
                                    <td class="px-4 py-2">{{ $event->eventName }}</td>
                                    <!-- Budget -->
                                    <td class="px-4 py-2 text-green-500">₱{{ number_format($event->budget, 2) }}</td>
                                    <!-- Expenses -->
                                    <!-- Expenses (Sum of Expenses for Each Event) -->
                                    <td class="px-4 py-2 text-red-500">
                                        ₱{{ number_format($event->expenses->sum('expense_amount'), 2) }}
                                    </td>
                                    <!-- Payment Method -->
                                    <td class="px-4 py-2">Null</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</x-app-layout>
