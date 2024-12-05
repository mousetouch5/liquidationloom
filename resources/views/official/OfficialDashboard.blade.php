<x-app-layout>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <div class="flex h-full min-h-screen">
        <x-sidebar class="custom-sidebar-class" />

        <!-- end side bar -->

        <!-- grid event section -->

        <div class="flex flex-col lg:flex-row lg:space-x-6">
            <!-- Content Section -->
            <main class="flex-1 px-8 py-6 space-y-6 bg-gray-50">
                <!-- Events Section -->
                <section>
                    <x-recent-events-header/>



                    
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


                               <div>
                                <h3 class="text-md font-semibold text-left">{{ $event->eventName }}</h3>
                                <p class="text-sm text-gray-500 text-left">
                                  
                                    {{ \Carbon\Carbon::parse($event->eventDate)->format('d M Y') }},
                                    {{ \Carbon\Carbon::parse($event->eventTime)->format('h:i A') }},
                                </p>
                            </div>
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

             








           

            </main>
            <!-- Right-Side Content Section -->
            <aside class="w-full lg:w-1/3 grid grid-cols-1 gap-6 mt-5" data-aos="fade-right"
                data-aos-duration="2000">
                <x-community-outreach/>
                <!-- Barangay Officials -->
                <x-barangay-officials />
            </aside>
            </div>


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
        <script>
            AOS.init();
        </script>
</x-app-layout>
