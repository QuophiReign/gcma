<!DOCTYPE html>
<html lang="en">
<head>
  
  <script src="https://cdn.tailwindcss.com">    function togglePeriodOptions() {
      const period = document.getElementById('periodSelect').value;
      document.getElementById('monthSelect').classList.toggle('hidden', period !== 'monthly');
      document.getElementById('quarterSelect').classList.toggle('hidden', period !== 'quarterly');
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-white font-sans">

<?php include '../include/nav.php'; ?>


<!-- Main Content -->
<main class="flex-1 p-4 md:p-8">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
      <div>
        <h1 class="text-2xl font-bold">Reports & Analytics</h1>
        <p class="text-gray-600">Monthly & quarterly performance reports</p>
      </div>
      <div class="flex gap-3">
        <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Export PDF</button>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Export Excel</button>
      </div>
    </div>

    <!-- Filters -->
    <div class="bg-white p-4 rounded-xl shadow mb-6 grid grid-cols-1 md:grid-cols-3 gap-4">
      <select id="periodSelect" onchange="togglePeriodOptions()" class="border rounded-lg px-3 py-2">
        <option value="monthly">Monthly</option>
        <option value="quarterly">Quarterly</option>
      </select>
      <select id="monthSelect" class="border rounded-lg px-3 py-2">
        <option value="">Select Month</option>
        <option>January</option><option>February</option><option>March</option>
        <option>April</option><option>May</option><option>June</option>
        <option>July</option><option>August</option><option>September</option>
        <option>October</option><option>November</option><option>December</option>
      </select>
      <select id="quarterSelect" class="border rounded-lg px-3 py-2 hidden">
        <option value="">Select Quarter</option>
        <option>Q1 (Jan–Mar)</option>
        <option>Q2 (Apr–Jun)</option>
        <option>Q3 (Jul–Sep)</option>
        <option>Q4 (Oct–Dec)</option>
      </select>
      <select class="border rounded-lg px-3 py-2">
        <option>All Departments</option>
        <option>Roads</option>
        <option>Drainage</option>
        <option>Buildings</option>
      </select>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      <div class="bg-white p-5 rounded-xl shadow">
        <p class="text-sm text-gray-500">Total Projects</p>
        <h2 class="text-2xl font-bold mt-1">128</h2>
      </div>
      <div class="bg-white p-5 rounded-xl shadow">
        <p class="text-sm text-gray-500">Completed</p>
        <h2 class="text-2xl font-bold mt-1">89</h2>
      </div>
      <div class="bg-white p-5 rounded-xl shadow">
        <p class="text-sm text-gray-500">Pending Complaints</p>
        <h2 class="text-2xl font-bold mt-1">34</h2>
      </div>
      <div class="bg-white p-5 rounded-xl shadow">
        <p class="text-sm text-gray-500">Inspections</p>
        <h2 class="text-2xl font-bold mt-1">56</h2>
      </div>
    </div>

    <!-- Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="font-semibold mb-4">Projects by Status</h3>
        <canvas id="projectChart"></canvas>
      </div>
      <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="font-semibold mb-4">Complaints Overview</h3>
        <canvas id="complaintChart"></canvas>
      </div>
    </div>

  </div>

  </main>

  <script>
    new Chart(document.getElementById('projectChart'), {
      type: 'bar',
      data: {
        labels: ['Completed', 'Ongoing', 'Delayed'],
        datasets: [{ data: [89, 27, 12] }]
      }
    });

    new Chart(document.getElementById('complaintChart'), {
      type: 'doughnut',
      data: {
        labels: ['Resolved', 'In Progress', 'Pending'],
        datasets: [{ data: [65, 21, 34] }]
      }
    });
  </script>

</body>
</html>
