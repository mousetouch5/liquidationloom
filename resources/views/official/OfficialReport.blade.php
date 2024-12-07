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


                <!-- Tabs -->
                <div class="p-4 bg-gray-50">
                    <div class="flex space-x-6 border-b">
                        <button class="py-2 px-4 font-medium text-gray-700 border-b-2 border-blue-600">All</button>
                        <button
                            class="py-2 px-4 font-medium text-gray-700 hover:border-b-2 hover:border-gray-300">Survey
                            Results</button>
                        <button
                            class="py-2 px-4 font-medium text-gray-700 hover:border-b-2 hover:border-gray-300">Budget</button>
                        <button
                            class="py-2 px-4 font-medium text-gray-700 hover:border-b-2 hover:border-gray-300">Expenses</button>
                        <button
                            class="py-2 px-4 font-medium text-gray-700 hover:border-b-2 hover:border-gray-300">Verification
                            Files</button>
                        <button
                            class="py-2 px-4 font-medium text-gray-700 hover:border-b-2 hover:border-gray-300">Archive</button>
                    </div>
                </div>

                <!-- Table -->
                <div class="p-4" data-aos="fade-up" data-aos-duration="2000">
                    <table class="table-auto w-full bg-white shadow-md rounded-md">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="px-4 py-2 text-left">Category</th>
                                <th class="px-4 py-2 text-left">Month</th>
                                <th class="px-4 py-2 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Rows -->
                            @foreach ($events as $event)
                                <tr class="hover:bg-gray-100" data-aos="fade-left" data-aos-duration="2000">
                                    <td class="px-4 py-2">{{ $event->eventType }}</td>
                                    <td class="px-4 py-2">{{ \Carbon\Carbon::parse($event->eventDate)->format('F Y') }}
                                    </td>
                                    <td class="px-4 py-2">
                                        <div class="flex space-x-2">
                                            <button
                                                class="material-icons text-gray-500 hover:text-blue-500 cursor-pointer download-btn"
                                                title="Download" data-event-id="{{ $event->id }}">download
                                            </button>
                                            <button
                                                class="material-icons text-gray-500 hover:text-green-500 cursor-pointer print-btn"
                                                title="Print" data-event-id="{{ $event->id }}">print
                                            </button>
                                            <button
                                                class="material-icons text-gray-500 hover:text-red-500 cursor-pointer"
                                                title="Delete">delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <script>
                // Attach event listener to download buttons
                document.querySelectorAll('.download-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const eventId = this.getAttribute('data-event-id');
                        // Redirect to the backend route to generate the PDF
                        window.location.href = `/generate-liquidation-report/${eventId}`;
                    });
                });

                document.querySelectorAll('.print-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const eventId = this.getAttribute('data-event-id');
                        window.location.href = `/print-event/${eventId}`;
                    });
                });
            </script>


        </div>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</x-app-layout>
