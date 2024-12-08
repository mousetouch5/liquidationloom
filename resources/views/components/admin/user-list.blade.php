<meta name="csrf-token" content="{{ csrf_token() }}">

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="modal-header">
            <h2>Pending User Approvals</h2>
        </div>
        <div class="modal-body">
            <p>Here you can see all the pending user approvals that need to be processed. You can approve or reject them
                accordingly.</p>
            <!-- Table to display pending user data -->
            <table id="pendingUsersTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>ID Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be populated via AJAX -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    // Open the modal
    function openModal() {
        document.getElementById("myModal").style.display = "block";
        loadPendingUsers(); // Load data when the modal opens

        // Set an interval to refresh the data every 1 second
    }

    // Close the modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    // Close the modal if clicked outside of the modal content
    window.onclick = function(event) {
        if (event.target == document.getElementById("myModal")) {
            closeModal();
        }
    }

    // Function to load pending users data via AJAX
    function loadPendingUsers() {
        fetch('/pending-approvals') // Ensure this URL matches your route
            .then(response => response.json())
            .then(data => {
                const tableBody = document.querySelector('#pendingUsersTable tbody');
                tableBody.innerHTML = ''; // Clear any previous data

                data.forEach(user => {
                    const row = document.createElement('tr');
                    row.setAttribute('id', `user-row-${user.id}`); // Set row ID for easy reference
                    row.innerHTML = `
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>
                     ${user.id_picture_path 
                      ? `<img src="${user.id_picture_path}" alt="ID Photo" class="id-photo" style="width: 50px; height: 50px; object-fit: cover;">`
                     : 'No ID Photo'}
                    </td>

                        <td>
                            <button onclick="approveUser(${user.id})">Approve</button>
                            <button onclick="rejectUser(${user.id})">Reject</button>
                        </td>
                    `;
                    tableBody.appendChild(row);
                });
            })
            .catch(error => console.error('Error fetching pending users:', error));
    }

    // Function to approve a user
    function approveUser(userId) {
        fetch(`/approve-user/${userId}`, {
                method: 'POST', // POST request for approving the user
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    id: userId
                }) // Send user ID to backend
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Remove the approved user row from the table
                    const row = document.getElementById(`user-row-${userId}`);
                    if (row) row.remove();
                    alert(data.message);
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error approving user:', error));
    }

    // Function to reject a user
    function rejectUser(userId) {
        fetch(`/reject-user/${userId}`, {
                method: 'POST', // POST request for rejecting the user
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    id: userId
                }) // Send user ID to backend
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Remove the rejected user row from the table
                    const row = document.getElementById(`user-row-${userId}`);
                    if (row) row.remove();
                    alert(data.message);
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error rejecting user:', error));
    }
</script>
