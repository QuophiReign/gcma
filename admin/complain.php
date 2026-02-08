<!DOCTYPE html>
<html lang="en">
<body class="bg-white font-sans">

<?php include '../include/nav.php'; ?>

<!-- Main Content -->
<main class="flex-1 p-4 md:p-8">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
      <div>
        <h1 class="text-2xl font-bold">Complaint Management</h1>
        <p class="text-gray-600">Manage public complaints and assign them to the Works Department</p>
      </div>
      <button onclick="openComplaintModal()" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">Report New Complaint</button>
    </div>

    <!-- Status Filters -->
    <div class="flex flex-wrap gap-3 mb-6">
      <span class="px-4 py-2 bg-gray-200 rounded-full text-sm cursor-pointer">All</span>
      <span class="px-4 py-2 bg-yellow-100 text-yellow-800 rounded-full text-sm cursor-pointer">Pending</span>
      <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm cursor-pointer">In Progress</span>
      <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm cursor-pointer">Resolved</span>
    </div>

    <!-- Complaints Table -->
    <div class="bg-white rounded-xl shadow overflow-x-auto">
      <table class="w-full text-sm">
        <thead class="bg-gray-50">
          <tr>
            <th class="text-left px-4 py-3">Complaint</th>
            <th class="text-left px-4 py-3">Location</th>
            <th class="text-left px-4 py-3">Status</th>
            <th class="text-left px-4 py-3">Assigned To</th>
            <th class="text-left px-4 py-3">Date</th>
            <th class="text-right px-4 py-3">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t">
            <td class="px-4 py-3">Potholes on main road</td>
            <td class="px-4 py-3">Dansoman</td>
            <td class="px-4 py-3">
              <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Pending</span>
            </td>
            <td class="px-4 py-3">—</td>
            <td class="px-4 py-3">2025-02-10</td>
            <td class="px-4 py-3 text-right">
              <button onclick="openAssignModal()" class="text-blue-600 hover:underline">Assign</button>
            </td>
          </tr>
          <tr class="border-t">
            <td class="px-4 py-3">Blocked drainage</td>
            <td class="px-4 py-3">Mallam</td>
            <td class="px-4 py-3">
              <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">In Progress</span>
            </td>
            <td class="px-4 py-3">Roads Unit</td>
            <td class="px-4 py-3">2025-02-08</td>
            <td class="px-4 py-3 text-right">
              <button class="text-gray-400 cursor-not-allowed">Assigned</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

  <!-- Complaint Submission Modal -->
  <div id="complaintModal" class="fixed inset-0 hidden bg-black/50 flex items-center justify-center z-50">
    <div class="bg-white w-full max-w-lg rounded-xl p-6">
      <h2 class="text-lg font-semibold mb-4">Report a Complaint</h2>
      <form class="space-y-4">
        <input type="text" placeholder="Complaint Title" class="w-full border rounded-lg px-3 py-2" required />
        <textarea placeholder="Complaint Description" class="w-full border rounded-lg px-3 py-2" rows="3" required></textarea>
        <input type="text" placeholder="Location" class="w-full border rounded-lg px-3 py-2" required />
        <input type="file" class="w-full" />
        <div class="flex justify-end gap-3">
          <button type="button" onclick="closeComplaintModal()" class="px-4 py-2 border rounded-lg">Cancel</button>
          <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Assignment Modal -->
  <div id="assignModal" class="fixed inset-0 hidden bg-black/50 flex items-center justify-center z-50">
    <div class="bg-white w-full max-w-md rounded-xl p-6">
      <h2 class="text-lg font-semibold mb-4">Assign Complaint</h2>
      <form class="space-y-4">
        <select class="w-full border rounded-lg px-3 py-2" required>
          <option value="">Assign to Department</option>
          <option>Roads Unit</option>
          <option>Drainage Unit</option>
          <option>Building Unit</option>
        </select>
        <select class="w-full border rounded-lg px-3 py-2">
          <option>Set Status</option>
          <option>In Progress</option>
          <option>Resolved</option>
        </select>
        <div class="flex justify-end gap-3">
          <button type="button" onclick="closeAssignModal()" class="px-4 py-2 border rounded-lg">Cancel</button>
          <button class="bg-green-600 text-white px-4 py-2 rounded-lg">Assign</button>
        </div>
      </form>
    </div>
  </div>
</main>

  <script>
    function openComplaintModal() {
      document.getElementById('complaintModal').classList.remove('hidden');
    }
    function closeComplaintModal() {
      document.getElementById('complaintModal').classList.add('hidden');
    }
    function openAssignModal() {
      document.getElementById('assignModal').classList.remove('hidden');
    }
    function closeAssignModal() {
      document.getElementById('assignModal').classList.add('hidden');
    }
  </script>

</body>
</html>
