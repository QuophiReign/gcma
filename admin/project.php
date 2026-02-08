<!DOCTYPE html>
<html lang="en">
<head>
  
  <script src="https://cdn.tailwindcss.com">    function validateForm() {
      const inputs = document.querySelectorAll('#projectForm input, #projectForm select');
      let valid = true;
      inputs.forEach(el => {
        if (!el.value) {
          el.classList.add('border-red-500');
          valid = false;
        } else {
          el.classList.remove('border-red-500');
        }
      });

      const dates = document.querySelectorAll('#projectForm input[type="date"]');
      if (dates.length === 2 && dates[0].value && dates[1].value) {
        if (dates[0].value > dates[1].value) {
          alert('End date cannot be earlier than start date');
          valid = false;
        }
      }
      return valid;
    }

    function openDeleteModal() {
      document.getElementById('deleteModal').classList.remove('hidden');
      document.getElementById('deleteModal').classList.add('flex');
    }

    function closeDeleteModal() {
      document.getElementById('deleteModal').classList.add('hidden');
      document.getElementById('deleteModal').classList.remove('flex');
    }
  </script>

  <!-- Delete Confirmation Modal -->
  <div id="deleteModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-sm">
      <h3 class="text-lg font-semibold mb-3">Confirm Delete</h3>
      <p class="text-gray-600 mb-6">Are you sure you want to delete this project? This action cannot be undone.</p>
      <div class="flex justify-end gap-3">
        <button onclick="closeDeleteModal()" class="px-4 py-2 border rounded-lg">Cancel</button>
        <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Delete</button>
      </div>
    </div>
  </div>

</body>
</head>
<body class="bg-white font-sans">

<?php include '../include/nav.php'; ?>


<!-- Main Content -->
<main class="flex-1 p-4 md:p-8">

    <!-- Page Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
      <h1 class="text-2xl font-bold">Project Management</h1>
      <button onclick="openAddModal()" class="mt-3 md:mt-0 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">+ Add Project</button>
    </div>

    <!-- Filters -->
    <div class="bg-white p-4 rounded-xl shadow mb-6">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <input type="text" placeholder="Search project" class="border rounded-lg px-3 py-2 w-full" />
        <select class="border rounded-lg px-3 py-2">
          <option>Status</option>
          <option>Completed</option>
          <option>Ongoing</option>
          <option>Delayed</option>
        </select>
        <select class="border rounded-lg px-3 py-2">
          <option>Category</option>
          <option>Roads</option>
          <option>Drainage</option>
          <option>Buildings</option>
        </select>
        <button class="bg-gray-700 text-white rounded-lg px-4 py-2 hover:bg-gray-800">
          Apply Filters
        </button>
      </div>
    </div>

    <!-- Project List -->
    <div class="bg-white rounded-xl shadow overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-gray-50 text-gray-600">
          <tr>
            <th class="text-left px-4 py-3">Project Name</th>
            <th class="text-left px-4 py-3">Category</th>
            <th class="text-left px-4 py-3">Start Date</th>
            <th class="text-left px-4 py-3">End Date</th>
            <th class="text-left px-4 py-3">Status</th>
            <th class="text-left px-4 py-3">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t">
            <td class="px-4 py-3">Road Rehabilitation Phase 1</td>
            <td class="px-4 py-3">Roads</td>
            <td class="px-4 py-3">01/01/2025</td>
            <td class="px-4 py-3">30/06/2025</td>
            <td class="px-4 py-3">
              <span class="px-3 py-1 rounded-full text-xs bg-green-100 text-green-700">Completed</span>
            </td>
            <td class="px-4 py-3 space-x-2">
              <button onclick="openEditModal()" class="text-blue-600 hover:underline">Edit</button>
              <button onclick="openDeleteModal()" class="text-red-600 hover:underline">Delete</button>
            </td>
          </tr>
          <tr class="border-t">
            <td class="px-4 py-3">Drainage Improvement</td>
            <td class="px-4 py-3">Drainage</td>
            <td class="px-4 py-3">15/02/2025</td>
            <td class="px-4 py-3">15/09/2025</td>
            <td class="px-4 py-3">
              <span class="px-3 py-1 rounded-full text-xs bg-blue-100 text-blue-700">Ongoing</span>
            </td>
            <td class="px-4 py-3 space-x-2">
              <button onclick="openEditModal()" class="text-blue-600 hover:underline">Edit</button>
              <button onclick="openDeleteModal()" class="text-red-600 hover:underline">Delete</button>
            </td>
          </tr>
          <tr class="border-t">
            <td class="px-4 py-3">Streetlight Installation</td>
            <td class="px-4 py-3">Electrical</td>
            <td class="px-4 py-3">10/03/2025</td>
            <td class="px-4 py-3">10/08/2025</td>
            <td class="px-4 py-3">
              <span class="px-3 py-1 rounded-full text-xs bg-red-100 text-red-700">Delayed</span>
            </td>
            <td class="px-4 py-3 space-x-2">
              <button onclick="openEditModal()" class="text-blue-600 hover:underline">Edit</button>
              <button onclick="openDeleteModal()" class="text-red-600 hover:underline">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Add / Edit Project Form -->
    <!-- Add / Edit Project Modal -->
    <div id="projectModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
      <div class="bg-white w-full max-w-2xl rounded-xl shadow-lg p-6">
        <div class="flex justify-between items-center mb-4">
          <h2 id="modalTitle" class="text-lg font-semibold">Add Project</h2>
          <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">✕</button>
        </div>
        <form id="projectForm" class="grid grid-cols-1 md:grid-cols-2 gap-4" onsubmit="return validateForm()">
          <input type="text" placeholder="Project Name" class="border rounded-lg px-3 py-2" />
          <select class="border rounded-lg px-3 py-2">
            <option>Category</option>
            <option>Roads</option>
            <option>Drainage</option>
            <option>Buildings</option>
          </select>
          <input type="date" class="border rounded-lg px-3 py-2" />
          <input type="date" class="border rounded-lg px-3 py-2" />
          <select class="border rounded-lg px-3 py-2">
            <option>Status</option>
            <option>Completed</option>
            <option>Ongoing</option>
            <option>Delayed</option>
          </select>
          <textarea placeholder="Project Description" class="border rounded-lg px-3 py-2 md:col-span-2"></textarea>
          <div class="md:col-span-2 flex justify-end gap-3">
            <button type="button" onclick="closeModal()" class="px-4 py-2 border rounded-lg">Cancel</button>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Save Project</button>
          </div>
        </form>
      </div>
    </div>

  </div>
  </main>

  <script>
    const modal = document.getElementById('projectModal');
    const modalTitle = document.getElementById('modalTitle');

    function openAddModal() {
      modalTitle.textContent = 'Add Project';
      modal.classList.remove('hidden');
      modal.classList.add('flex');
    }

    function openEditModal() {
      modalTitle.textContent = 'Edit Project';
      modal.classList.remove('hidden');
      modal.classList.add('flex');
    }

    function closeModal() {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    }
  </script>

</body>

</body>
</html>
