<!DOCTYPE html>
<html lang="en">

<body class="bg-white font-sans">

<?php include '../include/nav.php'; ?>
 

    <!-- Main Content -->
    <main class="flex-1 p-4 md:p-8">

      <!-- Header -->
      <div class="flex justify-between items-center mb-8">
        <div>
          <h1 class="text-xl font-semibold">Ga Central Municipal Assembly</h1>
          <h2 class="text-3xl font-bold mt-2">Dashboard</h2>
          
        </div>
        <div class="flex items-center gap-4">
          <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
          <span class="font-medium">Engineer</span>
        </div>
      </div>

      <!-- Stats Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-orange-600 p-6 rounded-2xl shadow-2xl">
          <p class="text-white font-bold">Total Projects</p>
          <h3 class="text-3xl font-bold mt-2 text-white">24</h3>
        </div>
        <div class="bg-orange-600 p-6 rounded-2xl shadow-2xl">
          <p class="text-white font-bold">Pending Work</p>
          <h3 class="text-3xl font-bold mt-2 text-white">6</h3>
          <p class="text-sm text-white mt-1">High Priority</p>
        </div>
        <div class="bg-orange-600 p-6 rounded-2xl shadow-2xl">
          <p class="text-white font-bold">Assets Registered</p>
          <h3 class="text-3xl font-bold mt-2 text-white">158</h3>
          <p class="text-sm text-white mt-1">Open</p>
        </div>
        <div class="bg-orange-600 p-6 rounded-2xl shadow-2xl">
          <p class="text-white font-bold">Complaints</p>
          <h3 class="text-3xl font-bold mt-2 text-white">12</h3>
          <p class="text-sm text-white mt-1">Open</p>
        </div>
      </div>

      <!-- Charts Section -->
      <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl shadow-2xl">
          <h3 class="font-semibold mb-4 text-white">Project Status Overview</h3>
          <canvas id="projectStatusChart" height="200"></canvas>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-2xl">
          <h3 class="font-semibold mb-4 text-white">Complaints by Category</h3>
          <canvas id="complaintsChart" height="200"></canvas>
        </div>
      </div>
      </div>

      <!-- Recent Activities -->
      <div class="bg-orange-600 p-6 rounded-xl shadow-2xl">
        <h3 class="font-semibold mb-4 text-white">Recent Activities</h3>
        <table class="w-full text-sm text-white">
          <thead class="text-white">
            <tr class="border-b">
              <th class="text-left py-2">Date</th>
              <th class="text-left py-2">Action</th>
              <th class="text-left py-2">Status</th>
              <th class="text-left py-2">User</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="py-3">12/12/25</td>
              <td>Project Added</td>
              <td class="text-white">Done</td>
              <td>Admin</td>
            </tr>
            <tr>
              <td class="py-3">11/12/25</td>
              <td>Complaint Filed</td>
              <td class="text-white">Open</td>
              <td>Public</td>
            </tr>
          </tbody>
        </table>
      </div>

    </main>
  </div>

  <script>
    const projectCtx = document.getElementById('projectStatusChart');
    new Chart(projectCtx, {
      type: 'bar',
      data: {
        labels: ['Completed', 'Ongoing', 'Delayed'],
        datasets: [{
          label: 'Projects',
          data: [12, 8, 4],
          backgroundColor: ['#14b8a6', '#3b82f6', '#ef4444'],
          borderRadius: 8
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } }
      }
    });

    const complaintsCtx = document.getElementById('complaintsChart');
    new Chart(complaintsCtx, {
      type: 'doughnut',
      data: {
        labels: ['Roads', 'Drainage', 'Streetlights'],
        datasets: [{
          data: [5, 4, 3],
          backgroundColor: ['#3b82f6', '#fb923c', '#2dd4bf']
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { position: 'right' } }
      }
    });
  </script>
</body>
</html>
