<x-app-layout>


    <div class="flex h-full min-h-screen">
        <!-- Sidebar -->
        <x-sidebar class="custom-sidebar-class" />

            <!-- TailwindCSS -->
            <script src="https://cdn.tailwindcss.com"></script>
            <!-- FullCalendar CSS -->
            <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.css" rel="stylesheet">
        </head>
        <div class="bg-gray-100 flex justify-center items-center min-h-screen w-full ml-10">
        
            <div class="w-full max-w-4xl bg-white rounded-lg shadow p-4">
                <!-- Calendar Header -->
                <div class="text-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">2025</h2>
                </div>




                <!-- FullCalendar -->
                <div id="Liquidcalendar" class="p-4 bg-white rounded-lg shadow"></div>


                <!-- add button route to form -->
                <div class="flex justify-end mt-2">
                <button type="submit" class="bg-gray-700 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition">Add</button>
                </div>
            </div>
        
            

            <!-- FullCalendar JS -->
            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.js"></script>
        
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var calendarEl = document.getElementById('Liquidcalendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridMonth',
                        headerToolbar: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,timeGridDay'
                        },
                        events: [
                            {
                                title: 'Basketball Liga',
                                start: '2025-01-16',
                                color: '#3788d8',
                            }
                        ],
                        contentHeight: 500, // Adjust height for the calendar to match design
                        fixedWeekCount: false // Remove extra weeks at the end of the month
                    });
                    calendar.render();
                });
            </script>
      <div>
        

</x-app-layout>
