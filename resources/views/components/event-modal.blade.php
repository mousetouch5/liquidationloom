 <!-- Main Modal -->
 <dialog id="my_modal_1" class="modal">
     <div class="modal-box">
         <h3 class="text-lg font-bold">Event Details</h3>
         <div class="space-y-4">
             <!-- Readonly Input Fields with Sample Data -->
             <div>
                 <label for="eventDate" class="block text-sm font-medium text-gray-700">Date</label>
                 <input type="date" id="eventDate" class="input input-bordered w-full" readonly>
             </div>
             <div>
                 <label for="eventTime" class="block text-sm font-medium text-gray-700">Time</label>
                 <input type="time" id="eventTime" class="input input-bordered w-full" readonly>
             </div>
             <div>
                 <label for="eventType" class="block text-sm font-medium text-gray-700">Type</label>
                 <input type="text" id="eventType" class="input input-bordered w-full" readonly>
             </div>
             <div>
                 <label for="eventDescription" class="block text-sm font-medium text-gray-700">Description</label>
                 <textarea id="eventDescription" class="textarea textarea-bordered w-full" readonly></textarea>
             </div>
             <div>
                 <label for="eventLocation" class="block text-sm font-medium text-gray-700">Location</label>
                 <input type="text" id="eventLocation" class="input input-bordered w-full" readonly>
             </div>
             <div>
                 <label for="eventOrganizer" class="block text-sm font-medium text-gray-700">Organizer</label>
                 <input type="text" id="eventOrganizer" class="input input-bordered w-full" readonly>
             </div>
             <button type="button" class="btn btn-primary w-full mt-4" onclick="openBudgetModal()">Budget
                 Breakdown</button>
             <!-- Image -->
             <div>
                 <img id="eventImage" src="" alt="Event Image" class="rounded-lg w-full h-40 object-cover">
             </div>


             <div class="mt-4">
                 <!-- Display Like and Unlike Counts -->
                 <h4 class="text-sm font-medium text-gray-700">
                     Survey Responses: <span id="surveyCount">0</span>
                 </h4>
                 <div class="flex space-x-4 mt-2">
                     <div>
                         <span id="likeCount" class="font-bold text-green-600">0</span> Likes
                     </div>
                     <div>
                         <span id="unlikeCount" class="font-bold text-red-600">0</span> Unlikes
                     </div>
                 </div>
             </div>



             <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>





         </div>

         <div class="modal-action">
             <form method="dialog">
                 <button class="btn">Close</button>
             </form>
         </div>
     </div>
 </dialog>
