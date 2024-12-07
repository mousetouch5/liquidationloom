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


              
              <!-- New Table Section -->
<div class="p-4" data-aos="fade-up" data-aos-duration="2000">
    <!-- Add Button -->
    <div class="flex justify-end mb-4">
        <button 
            onclick="toggleAddModal()" 
            class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
            Add Event
        </button>
    </div>
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
                        <td class="px-4 py-2">{{ \Carbon\Carbon::parse($event->eventDate)->format('F Y') }}</td>
                        <td class="px-4 py-2 text-green-500">{{ $event->budget }}</td>
                        <td class="px-4 py-2 text-red-500">21412412</td>
                        <td class="px-4 py-2">
                            <button 
                                class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 print-btn"
                                title="Print" 
                                data-event-id="{{ $event->id }}">
                                Print
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Add Event Modal -->
<div id="addEventModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-1/2">
        <!-- Modal Header -->
        <div class="flex justify-between items-center bg-gray-200 px-4 py-2 rounded-t-lg">
            <h3 class="text-lg font-semibold text-gray-700">Add New Event</h3>
            <button onclick="toggleAddModal()" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>
        <!-- Modal Body -->
        <div class="p-6 space-y-4">
            <form id="addEventForm">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Event Name</label>
                    <input type="text" name="eventName" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Event Date</label>
                    <input type="date" name="eventDate" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Budget</label>
                    <input type="number" name="budget" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Total Spent</label>
                    <input type="number" name="totalSpent" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
            </form>
        </div>
        <!-- Modal Footer -->
        <div class="flex justify-end space-x-2 bg-gray-200 px-4 py-2 rounded-b-lg">
            <button onclick="toggleAddModal()" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Cancel</button>
            <button type="submit" form="addEventForm" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Save</button>
        </div>
    </div>
</div>

<!-- Scripts -->
<script>
    // Toggle Add Event Modal
    function toggleAddModal() {
        const modal = document.getElementById('addEventModal');
        modal.classList.toggle('hidden');
    }

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
