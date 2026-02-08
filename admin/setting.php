<!DOCTYPE html>
<html lang="en">
<body class="bg-white font-sans">

<?php include '../include/nav.php'; ?>


<!-- Main Content -->
<main class="flex-1 p-4 md:p-8">

    <!-- Header -->
    <div class="mb-6">
      <h1 class="text-2xl font-bold">System Settings</h1>
      <p class="text-gray-600">Manage application preferences and configurations</p>
    </div>

    <!-- Settings Tabs -->
    <div class="bg-white rounded-xl shadow">
      <div class="border-b flex flex-wrap">
        <button class="px-6 py-3 font-medium text-blue-600 border-b-2 border-blue-600">General</button>
        <button class="px-6 py-3 text-gray-600 hover:text-blue-600">Organization</button>
        <button class="px-6 py-3 text-gray-600 hover:text-blue-600">Notifications</button>
        <button class="px-6 py-3 text-gray-600 hover:text-blue-600">Security</button>
      </div>

      <!-- General Settings -->
      <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

        <div>
          <label class="block text-sm font-medium mb-1">System Name</label>
          <input type="text" placeholder="Works Department Management System" class="w-full border rounded-lg px-3 py-2" />
        </div>

        <div>
          <label class="block text-sm font-medium mb-1">Default Language</label>
          <select class="w-full border rounded-lg px-3 py-2">
            <option>English</option>
            <option>French</option>
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium mb-1">Time Zone</label>
          <select class="w-full border rounded-lg px-3 py-2">
            <option>Africa/Accra</option>
            <option>UTC</option>
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium mb-1">Date Format</label>
          <select class="w-full border rounded-lg px-3 py-2">
            <option>DD/MM/YYYY</option>
            <option>MM/DD/YYYY</option>
          </select>
        </div>

      </div>

      <!-- Organization Settings -->
      <div class="border-t p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

        <div>
          <label class="block text-sm font-medium mb-1">Organization Name</label>
          <input type="text" placeholder="Ga Central Municipal Assembly" class="w-full border rounded-lg px-3 py-2" />
        </div>

        <div>
          <label class="block text-sm font-medium mb-1">Official Email</label>
          <input type="email" placeholder="info@gcma.gov.gh" class="w-full border rounded-lg px-3 py-2" />
        </div>

        <div>
          <label class="block text-sm font-medium mb-1">Phone Number</label>
          <input type="tel" placeholder="+233" class="w-full border rounded-lg px-3 py-2" />
        </div>

        <div>
          <label class="block text-sm font-medium mb-1">Office Address</label>
          <input type="text" placeholder="Accra, Ghana" class="w-full border rounded-lg px-3 py-2" />
        </div>

      </div>

      <!-- Notifications -->
      <div class="border-t p-6 space-y-4">
        <div class="flex items-center justify-between">
          <span>Email Notifications</span>
          <input type="checkbox" class="h-5 w-5" checked />
        </div>
        <div class="flex items-center justify-between">
          <span>SMS Notifications</span>
          <input type="checkbox" class="h-5 w-5" />
        </div>
        <div class="flex items-center justify-between">
          <span>System Alerts</span>
          <input type="checkbox" class="h-5 w-5" checked />
        </div>
      </div>

      <!-- Security -->
      <div class="border-t p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium mb-1">Password Expiry (days)</label>
          <input type="number" value="90" class="w-full border rounded-lg px-3 py-2" />
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Two-Factor Authentication</label>
          <select class="w-full border rounded-lg px-3 py-2">
            <option>Enabled</option>
            <option>Disabled</option>
          </select>
        </div>
      </div>

      <!-- Save Button -->
      <div class="border-t p-6 flex justify-end">
        <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Save Settings</button>
      </div>

    </div>

  </div>
</main>

</body>
</html>
