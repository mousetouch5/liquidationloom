<div class="bg-white shadow-lg rounded-lg p-6 relative">
    <!-- added 'relative' to allow absolute positioning of the emoji -->
    <h4 class="text-lg font-semibold">Community Outreach</h4>
    <canvas id="pieChart" class="mt-4 h-32"></canvas> <!-- Pie chart -->

    <!-- Like and Unlike Section -->
    <div class="mt-4 space-y-2">
        <!-- Like Section -->
        <div class="flex items-center justify-center space-x-2">
            <button class="text-2xl text-blue-500 hover:text-blue-700 focus:outline-none">
                👍
            </button>
            <span id="likePercentage" class="text-sm font-semibold text-gray-700">0%</span>
        </div>
        <!-- Unlike Section -->
        <div class="flex items-center justify-center space-x-2">
            <button class="text-2xl text-blue-500 hover:text-blue-700 focus:outline-none">
                👎
            </button>
            <span id="unlikePercentage" class="text-sm font-semibold text-gray-700">0%</span>
        </div>
    </div>
</div>


<script>
    // Fetch survey data from the server
    fetch('/survey-data') // Replace '/survey-data' with your actual API endpoint
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch survey data');
            }
            return response.json(); // Parse JSON response
        })
        .then(data => {
            // Calculate total likes and unlikes
            let totalLikes = 0;
            let totalUnlikes = 0;

            data.forEach(item => {
                const totalResponses = item.likes_percentage + item.unlikes_percentage;
                totalLikes += (item.likes_percentage / 100) * totalResponses;
                totalUnlikes += (item.unlikes_percentage / 100) * totalResponses;
            });

            const grandTotal = totalLikes + totalUnlikes;

            // Calculate percentages
            const likesPercentage = grandTotal > 0 ? ((totalLikes / grandTotal) * 100).toFixed(2) : 0;
            const unlikesPercentage = grandTotal > 0 ? ((totalUnlikes / grandTotal) * 100).toFixed(2) : 0;

            // Update the DOM with calculated percentages
            document.querySelector('#likePercentage').textContent = `${likesPercentage}%`;
            document.querySelector('#unlikePercentage').textContent = `${unlikesPercentage}%`;
        })
        .catch(error => {
            console.error('Error:', error.message);
            alert('Failed to load survey data. Please try again later.');
        });
</script>
