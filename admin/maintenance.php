<!DOCTYPE html>
<html lang="en">
<body class="bg-white font-sans">

<?php include '../include/nav.php'; ?>


<!-- Main Content -->
<main class="flex-1 p-4 md:p-8">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
      <h1 class="text-2xl font-bold">Maintenance & Work Orders</h1>
      <button onclick="openTaskModal()" class="mt-3 md:mt-0 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
        + Create Work Order
      </button>
    </div>

    <!-- Filters -->
    <div class="bg-white p-4 rounded-xl shadow mb-6">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <select class="border rounded-lg px-3 py-2">
          <option>Priority</option>
          <option>High</option>
          <option>Medium</option>
          <option>Low</option>
        </select>
        <select class="border rounded-lg px-3 py-2">
          <option>Status</option>
          <option>Pending</option>
          <option>In Progress</option>
          <option>Completed</option>
        </select>
        <input type="text" placeholder="Assigned staff" class="border rounded-lg px-3 py-2" />
        <button class="bg-gray-700 text-white rounded-lg px-4 py-2 hover:bg-gray-800">Apply Filters</button>
      </div>
    </div>

    <!-- Work Orders Table -->
    <div class="bg-white rounded-xl shadow overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-gray-50 text-gray-600">
          <tr>
            <th class="text-left px-4 py-3">Task</th>
            <th class="text-left px-4 py-3">Assigned To</th>
            <th class="text-left px-4 py-3">Priority</th>
            <th class="text-left px-4 py-3">Status</th>
            <th class="text-left px-4 py-3">Progress</th>
            <th class="text-left px-4 py-3">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t">
            <td class="px-4 py-3">Fix streetlight at Kwame Ave</td>
            <td class="px-4 py-3">Technician A</td>
            <td class="px-4 py-3">
              <span class="px-3 py-1 text-xs rounded-full bg-red-100 text-red-700">High</span>
            </td>
            <td class="px-4 py-3">
              <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">In Progress</span>
            </td>
            <td class="px-4 py-3">
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-blue-600 h-2 rounded-full" style="width: 60%"></div>
              </div>
            </td>
            <td class="px-4 py-3 space-x-2">
              <button onclick="openTaskModal()" class="text-blue-600 hover:underline">Update</button>
            </td>
          </tr>

          <tr class="border-t">
            <td class="px-4 py-3">Repair drainage near market</td>
            <td class="px-4 py-3">Engineer B</td>
            <td class="px-4 py-3">
              <span class="px-3 py-1 text-xs rounded-full bg-orange-100 text-orange-700">Medium</span>
            </td>
            <td class="px-4 py-3">
              <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">Completed</span>
            </td>
            <td class="px-4 py-3">
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-green-600 h-2 rounded-full" style="width: 100%"></div>
              </div>
            </td>
            <td class="px-4 py-3">
              <span class="text-gray-400">—</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Work Order Modal -->
    <div id="taskModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
      <div class="bg-white w-full max-w-xl rounded-xl shadow-lg p-6">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-lg font-semibold">Create / Update Work Order</h2>
          <button onclick="closeTaskModal()" class="text-gray-500 hover:text-gray-700">✕</button>
        </div>
        <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" placeholder="Task Title" class="border rounded-lg px-3 py-2" required />
          <input type="text" placeholder="Assigned To" class="border rounded-lg px-3 py-2" required />
          <select class="border rounded-lg px-3 py-2" required>
            <option value="">Priority</option>
            <option>High</option>
            <option>Medium</option>
            <option>Low</option>
          </select>
          <select class="border rounded-lg px-3 py-2" required>
            <option value="">Status</option>
            <option>Pending</option>
            <option>In Progress</option>
            <option>Completed</option>
          </select>
          <input type="number" min="0" max="100" placeholder="Completion %" class="border rounded-lg px-3 py-2" />
          <textarea placeholder="Task Description" class="border rounded-lg px-3 py-2 md:col-span-2"></textarea>
          <div class="md:col-span-2 flex justify-end gap-3">
            <button type="button" onclick="closeTaskModal()" class="px-4 py-2 border rounded-lg">Cancel</button>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Save</button>
          </div>
        </form>
      </div>
    </div>

  </div>

</main>

  <script>
    function openTaskModal() {
      document.getElementById('taskModal').classList.remove('hidden');
      document.getElementById('taskModal').classList.add('flex');
    }
    function closeTaskModal() {
      document.getElementById('taskModal').classList.add('hidden');
      document.getElementById('taskModal').classList.remove('flex');
    }
  </script>

</body>
</html>
