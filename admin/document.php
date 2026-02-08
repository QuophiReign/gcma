<!DOCTYPE html>
<html lang="en">
<body class="bg-white font-sans">

<?php include '../include/nav.php'; ?>

  <!-- Main Content -->
  <main class="flex-1 p-4 md:p-8">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
      <div>
        <h1 class="text-2xl font-bold">Document Management</h1>
        <p class="text-gray-600">Upload, organize, and search official documents</p>
      </div>
      <button onclick="openUploadModal()" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">Upload Document</button>
    </div>

    <!-- Search -->
    <div class="mb-6">
      <input id="searchInput" onkeyup="searchDocs()" type="text" placeholder="Search documents..." class="w-full md:w-1/3 border rounded-lg px-4 py-2" />
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

      <!-- Folder Sidebar -->
      <div class="bg-white rounded-xl shadow p-4">
        <h2 class="font-semibold mb-3">Folders</h2>
        <ul class="space-y-2 text-sm">
          <li class="cursor-pointer hover:text-blue-600">📁 All Documents</li>
          <li class="cursor-pointer hover:text-blue-600">📁 Projects</li>
          <li class="cursor-pointer hover:text-blue-600">📁 Inspections</li>
          <li class="cursor-pointer hover:text-blue-600">📁 Maintenance</li>
          <li class="cursor-pointer hover:text-blue-600">📁 Contracts</li>
        </ul>
      </div>

      <!-- Documents Table -->
      <div class="md:col-span-3 bg-white rounded-xl shadow overflow-x-auto">
        <table id="docTable" class="w-full text-sm">
          <thead class="bg-gray-50">
            <tr>
              <th class="text-left px-4 py-3">Document Name</th>
              <th class="text-left px-4 py-3">Folder</th>
              <th class="text-left px-4 py-3">Uploaded By</th>
              <th class="text-left px-4 py-3">Date</th>
              <th class="text-right px-4 py-3">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t">
              <td class="px-4 py-3">Road Inspection Report.pdf</td>
              <td class="px-4 py-3">Inspections</td>
              <td class="px-4 py-3">Eng. Mensah</td>
              <td class="px-4 py-3">2025-01-12</td>
              <td class="px-4 py-3 text-right">
                <button class="text-blue-600 hover:underline">Download</button>
              </td>
            </tr>
            <tr class="border-t">
              <td class="px-4 py-3">Bridge Maintenance Plan.docx</td>
              <td class="px-4 py-3">Maintenance</td>
              <td class="px-4 py-3">Admin</td>
              <td class="px-4 py-3">2025-02-03</td>
              <td class="px-4 py-3 text-right">
                <button class="text-blue-600 hover:underline">Download</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <!-- Upload Modal -->
  <div id="uploadModal" class="fixed inset-0 hidden bg-black/50 flex items-center justify-center z-50">
    <div class="bg-white w-full max-w-md rounded-xl p-6">
      <h2 class="text-lg font-semibold mb-4">Upload Document</h2>
      <form class="space-y-4">
        <input type="text" placeholder="Document Name" class="w-full border rounded-lg px-3 py-2" required />
        <select class="w-full border rounded-lg px-3 py-2" required>
          <option value="">Select Folder</option>
          <option>Projects</option>
          <option>Inspections</option>
          <option>Maintenance</option>
          <option>Contracts</option>
        </select>
        <input type="file" class="w-full" required />
        <div class="flex justify-end gap-3">
          <button type="button" onclick="closeUploadModal()" class="px-4 py-2 border rounded-lg">Cancel</button>
          <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">Upload</button>
        </div>
      </form>
    </div>
  </div>
</main>

  <script>
    function openUploadModal() {
      document.getElementById('uploadModal').classList.remove('hidden');
    }
    function closeUploadModal() {
      document.getElementById('uploadModal').classList.add('hidden');
    }

    function searchDocs() {
      const filter = document.getElementById('searchInput').value.toLowerCase();
      const rows = document.querySelectorAll('#docTable tbody tr');
      rows.forEach(row => {
        row.style.display = row.innerText.toLowerCase().includes(filter) ? '' : 'none';
      });
    }
  </script>

</body>
</html>
