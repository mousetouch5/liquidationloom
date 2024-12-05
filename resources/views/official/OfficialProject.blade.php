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



        <!-- grid event section -->
        <div class="flex flex-col lg:flex-row lg:space-x-6">
            <!-- Content Section -->
            <main class="flex-1 px-8 py-6 space-y-6 bg-gray-50">
                <!-- Events Section -->
                <section>
                    <x-recent-events-header/>

                    <!-- button group -->











                    <!-- GRID SECTION OF EVENT CARDS -->
                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <!-- Event Card with modal function -->
                        @foreach ($events as $event)
                            <div id="eventCard_{{ $event->id }}"
                                class="bg-white shadow-lg rounded-lg p-4 event-card" data-category="recent"
                                data-aos="zoom-in" data-aos-duration="3000"
                                onclick="openEventModal('{{ $event->eventName }}',
                                 '{{ $event->expense_amount }}', 
                                 '{{ $event->expense_description }}', 
                                 '{{ $event->eventDate }}', '{{ $event->eventTime }}', 
                                 '{{ $event->eventType }}', '{{ $event->eventDescription }}', 
                                 '{{ $event->eventLocation }}', 
                                '{{ $event->organizer }}', 
                                '{{ asset('storage/' . $event->eventImage) }}','{{ $event->expense_amount }}',
                             {{ $event->expense_description }} )">
                               <img src="{{ asset('storage/' . $event->eventImage) }}" alt="Event"
                               class="rounded-lg w-full h-48 object-cover">
                                <h3 class="mt-4 text-md font-semibold">{{ $event->eventName }}</h3>
                                <p class="text-sm text-gray-500">
                                 
                                    {{ \Carbon\Carbon::parse($event->eventDate)->format('d M Y') }},
                                    {{ \Carbon\Carbon::parse($event->eventTime)->format('h:i A') }},

                                </p>
                            </div>
                        @endforeach

                        <x-event-modal/>   
                        <x-budget-breakdown-modal :event="$event" />

                    
                    <script>
                        // Global object to store the event data
                        let currentEventData = {};
                    
                        // Function to open Event Modal and populate data
                        function openEventModal(eventName, expenseAmount, expenseDescription, eventDate, eventTime, eventType,
                                                eventDescription, eventLocation, eventOrganizer, eventImage) {
                            // Store the event data in the global object
                            currentEventData = {
                                eventName: eventName,
                                expenseAmount: expenseAmount,
                                expenseDescription: expenseDescription,
                                eventDate: eventDate,
                                eventTime: eventTime,
                                eventType: eventType,
                                eventDescription: eventDescription,
                                eventLocation: eventLocation,
                                eventOrganizer: eventOrganizer,
                                eventImage: eventImage,
                            };
                    
                            // Populate Modal 1 fields with event data
                            document.getElementById('eventDate').value = eventDate;
                            document.getElementById('eventTime').value = eventTime;
                            document.getElementById('eventType').value = eventType;
                            document.getElementById('eventDescription').value = eventDescription;
                            document.getElementById('eventLocation').value = eventLocation;
                            document.getElementById('eventOrganizer').value = eventOrganizer;
                            document.getElementById('eventImage').src = eventImage;
                    
                            // Open Modal 1
                            document.getElementById('my_modal_1').showModal();
                        }
                    
                        // Function to open Budget Modal and populate data
                        function openBudgetModal() {
                            const eventData = currentEventData;
                    
                            // Populate Modal 2 fields with event data
                            document.getElementById('eventName').value = eventData.eventName;
                    
                            const expenseTableBody = document.getElementById('expenseTableBody');
                            expenseTableBody.innerHTML = ''; // Clear any previous rows
                    
                            // Insert new row for the current expense data
                            const row = document.createElement('tr');
                            row.innerHTML = `<td>${eventData.expenseDescription}</td><td>${eventData.expenseAmount}</td>`;
                            expenseTableBody.appendChild(row);
                    
                            // Populate budget summary data (example)
                            document.getElementById('totalBudget').value = eventData.expenseAmount; // Just an example
                            document.getElementById('additionalExpenses').value = 0; // You can update this if needed
                            document.getElementById('totalSpent').value = eventData.expenseAmount; // Example calculation
                    
                            // Open Modal 2
                            document.getElementById('budgetModal').showModal();
                        }
                    
                        // Close modals when clicking outside
                        document.addEventListener('DOMContentLoaded', function() {
                            const modal = document.getElementById('my_modal_1');
                            const budgetModal = document.getElementById('budgetModal');
                    
                            [modal, budgetModal].forEach(modalElement => {
                                modalElement.addEventListener('click', (e) => {
                                    if (e.target === modalElement) {
                                        modalElement.close();
                                    }
                                });
                            });
                        });
                    </script>
                    























                    <!-- Expenses Table -->
                    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Expenses</h2>
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 text-left text-sm font-semibold">
                                    <th class="py-3 px-4">Expenses</th>
                                    <th class="py-3 px-4">Date</th>
                                    <th class="py-3 px-4">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="py-2 text-gray-700">Toys</td>
                                    <td class="py-2 text-gray-700">5/5/2020</td>
                                    <td class="py-2 text-red-500">₱12,000.00</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-2 text-gray-700">Food Item</td>
                                    <td class="py-2 text-gray-700">₱5,000.00</td>
                                    <td class="py-2 text-red-500">5/5/2020</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-2 text-gray-700">Packaging Materials</td>
                                    <td class="py-2 text-gray-700">5/5/2020</td>
                                    <td class="py-2 text-red-500">₱4,000.00</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-2 text-gray-700">Logistics and Transportation</td>
                                    <td class="py-2 text-gray-700">5/5/2020</td>
                                    <td class="py-2 text-red-500">₱10,000.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="flex justify-between mt-4">
                            <span class="font-semibold text-lg text-red-500">Total: ₱19,000.00</span>
                        </div>
                    </div>

            </main>

            <!-- Right-Side Content Section -->
            <aside class="w-full lg:w-1/3 grid grid-cols-1 gap-6 mt-5" data-aos="fade-left" data-aos-duration="2000">
                <x-community-outreach/>
                <!-- Barangay Officials -->
                <x-barangay-officials />
            </aside>
        </div>



        <!-- function button for recent, incoming ongoing -->
        <style>
            /* Initially hide all events, we'll toggle visibility using JavaScript */
            .hidden {
                display: none;
            }

            /* Active button style */
            .bg-blue-100 {
                background-color: rgba(205, 243, 255, 1);
            }
        </style>



        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('pieChart').getContext('2d');
            var pieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [''],
                    datasets: [{
                        label: 'Community Outreach',
                        data: [40, 30, 30], // Example data points, adjust as needed
                        backgroundColor: ['#4CD7F6', '#CDF3FF'],
                        borderColor: '#ffffff',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                                }
                            }
                        }
                    }
                } // Close the options object
            }); // Close the Chart initialization
        </script>

</x-app-layout>
