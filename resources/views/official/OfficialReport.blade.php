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
                    <h2 class="text-xl font-semibold text-gray-700">Reports</h2>
                </div>


                <!--print -->
                <div class="container">
                    <h2>Select Date Range to Print Events with Expenses</h2>
                    <div class="form-group">
                        <label for="startMonth">Start Month</label>
                        <input type="month" name="startMonth" id="startMonth" class="form-control"
                            value="{{ old('startMonth', now()->format('Y-m')) }}" required>
                        @error('startMonth')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="endMonth">End Month</label>
                        <input type="month" name="endMonth" id="endMonth" class="form-control"
                            value="{{ old('endMonth', now()->format('Y-m')) }}" required>
                        @error('endMonth')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button id="generateButton" class="btn btn-primary mt-3">Generate Report</button>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const generateButton = document.getElementById('generateButton');
                        const startMonthInput = document.getElementById('startMonth');
                        const endMonthInput = document.getElementById('endMonth');

                        // Attach click event listener to the button
                        generateButton.addEventListener('click', function() {
                            const startMonth = startMonthInput.value;
                            const endMonth = endMonthInput.value;

                            if (startMonth && endMonth) {
                                // Generate the URL dynamically
                                const url = `{{ route('events.print') }}?startMonth=${startMonth}&endMonth=${endMonth}`;
                                // Redirect to the generated URL
                                window.location.href = url;
                            } else {
                                alert('Please select both start and end months.');
                            }
                        });
                    });
                </script>





                <!-- New Table Section -->
                <div class="p-4" data-aos="fade-up" data-aos-duration="2000">

                    <!-- Table -->
                    <div class="bg-white shadow-md rounded-md overflow-hidden">
                        <table class="table-auto w-full">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="px-4 py-2 text-left">Event Name</th>
                                    <th class="px-4 py-2 text-left">Event Date</th>
                                    <th class="px-4 py-2 text-left">Budget</th>
                                    <th class="px-4 py-2 text-left">Total Spent</th>
                                    <th class="px-4 py-2 text-left">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Rows -->
                                @foreach ($events as $event)
                                    <tr class="hover:bg-gray-100" data-aos="fade-left" data-aos-duration="2000">
                                        <td class="px-4 py-2">{{ $event->eventName }}</td>
                                        <td class="px-4 py-2">
                                            {{ \Carbon\Carbon::parse($event->eventDate)->format('F Y') }}</td>
                                        <td class="px-4 py-2 text-green-500">{{ number_format($event->budget, 2) }}</td>

                                        <!-- Calculate and display total expenses for each event -->
                                        <td class="px-4 py-2 text-red-500">
                                            @php
                                                // Calculate total expenses for the event
                                                $totalExpense = $event->expenses->sum('expense_amount');
                                            @endphp
                                            {{ number_format($totalExpense, 2) }}
                                        </td>

                                        <td class="px-4 py-2">
                                            <button
                                                class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 print-btn"
                                                title="Print" data-event-id="{{ $event->id }}">
                                                Print
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>








                <!-- Scripts -->
                <script>
                    // Attach event listener to Print buttons
                    document.querySelectorAll('.print-btn').forEach(button => {
                        button.addEventListener('click', function() {
                            const eventId = this.getAttribute('data-event-id');
                            // Redirect to backend route for printing event
                            window.location.href = `/print-event/${eventId}`;
                        });
                    });
                </script>



            </div>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</x-app-layout>
