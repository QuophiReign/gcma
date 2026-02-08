<!DOCTYPE html>
<html lang="en">

<body class="bg-white font-sans">

<?php include '../include/nav.php'; ?>

   <!-- Main Content -->
   <main class="flex-1 p-4 md:p-8">
  <div class="p-4 md:p-8">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
      <h1 class="text-2xl font-bold">Asset Register</h1>
      <button onclick="openAssetModal()" class="mt-3 md:mt-0 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
        + Add Asset
      </button>
    </div>

    <!-- Filters -->
    <div class="bg-white p-4 rounded-xl shadow mb-6">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <input type="text" placeholder="Search asset" class="border rounded-lg px-3 py-2" />
        <select class="border rounded-lg px-3 py-2">
          <option>Condition</option>
          <option>Good</option>
          <option>Fair</option>
          <option>Critical</option>
        </select>
        <select class="border rounded-lg px-3 py-2">
          <option>Asset Type</option>
          <option>Vehicle</option>
          <option>Equipment</option>
          <option>Infrastructure</option>
        </select>
        <button class="bg-gray-700 text-white rounded-lg px-4 py-2 hover:bg-gray-800">Apply Filters</button>
      </div>
    </div>

    <!-- Asset Listing -->
    <div class="bg-white rounded-xl shadow overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-gray-50 text-gray-600">
          <tr>
            <th class="text-left px-4 py-3">Asset Name</th>
            <th class="text-left px-4 py-3">Type</th>
            <th class="text-left px-4 py-3">Location</th>
            <th class="text-left px-4 py-3">Condition</th>
            <th class="text-left px-4 py-3">Last Service</th>
            <th class="text-left px-4 py-3">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t">
            <td class="px-4 py-3">Tipper Truck GT-245</td>
            <td class="px-4 py-3">Vehicle</td>
            <td class="px-4 py-3">Works Yard</td>
            <td class="px-4 py-3">
              <span class="px-3 py-1 rounded-full text-xs bg-green-100 text-green-700">Good</span>
            </td>
            <td class="px-4 py-3">05/11/2025</td>
            <td class="px-4 py-3">
              <button onclick="openHistoryModal()" class="text-blue-600 hover:underline">History</button>
            </td>
          </tr>

          <tr class="border-t">
            <td class="px-4 py-3">Streetlight Pole #34</td>
            <td class="px-4 py-3">Infrastructure</td>
            <td class="px-4 py-3">Kwame Ave</td>
            <td class="px-4 py-3">
              <span class="px-3 py-1 rounded-full text-xs bg-red-100 text-red-700">Critical</span>
            </td>
            <td class="px-4 py-3">20/09/2025</td>
            <td class="px-4 py-3">
              <button onclick="openHistoryModal()" class="text-blue-600 hover:underline">History</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Add Asset Modal -->
    <div id="assetModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
      <div class="bg-white w-full max-w-xl rounded-xl shadow-lg p-6">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-lg font-semibold">Add Asset</h2>
          <button onclick="closeAssetModal()" class="text-gray-500 hover:text-gray-700">✕</button>
        </div>
        <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" placeholder="Asset Name" class="border rounded-lg px-3 py-2" required />
          <select class="border rounded-lg px-3 py-2" required>
            <option value="">Asset Type</option>
            <option>Vehicle</option>
            <option>Equipment</option>
            <option>Infrastructure</option>
          </select>
          <input type="text" placeholder="Location" class="border rounded-lg px-3 py-2" />
          <select class="border rounded-lg px-3 py-2" required>
            <option value="">Condition</option>
            <option>Good</option>
            <option>Fair</option>
            <option>Critical</option>
          </select>
          <input type="date" class="border rounded-lg px-3 py-2" />
          <textarea placeholder="Notes" class="border rounded-lg px-3 py-2 md:col-span-2"></textarea>
          <div class="md:col-span-2 flex justify-end gap-3">
            <button type="button" onclick="closeAssetModal()" class="px-4 py-2 border rounded-lg">Cancel</button>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Save Asset</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Maintenance History Modal -->
    <div id="historyModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
      <div class="bg-white w-full max-w-lg rounded-xl shadow-lg p-6">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-lg font-semibold">Maintenance History</h2>
          <button onclick="closeHistoryModal()" class="text-gray-500 hover:text-gray-700">✕</button>
        </div>
        <ul class="space-y-3 text-sm">
          <li class="border-b pb-2">05/11/2025 – Routine servicing completed</li>
          <li class="border-b pb-2">12/07/2025 – Brake system repair</li>
          <li>20/03/2025 – Oil change</li>
        </ul>
      </div>
    </div>

  </div>
  </main>

  <script>
    function openAssetModal() {
      document.getElementById('assetModal').classList.remove('hidden');
      document.getElementById('assetModal').classList.add('flex');
    }
    function closeAssetModal() {
      document.getElementById('assetModal').classList.add('hidden');
      document.getElementById('assetModal').classList.remove('flex');
    }
    function openHistoryModal() {
      document.getElementById('historyModal').classList.remove('hidden');
      document.getElementById('historyModal').classList.add('flex');
    }
    function closeHistoryModal() {
      document.getElementById('historyModal').classList.add('hidden');
      document.getElementById('historyModal').classList.remove('flex');
    }
  </script>

</body>
</html>
