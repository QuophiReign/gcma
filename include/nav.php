<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GCMA-Work Department</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<div class="md:hidden flex items-center justify-between bg-gray-800 text-white p-4">
    <span class="font-semibold">Works Dept System</span>
    <button onclick="document.getElementById('sidebar').classList.toggle('hidden')" class="text-sm px-3 py-1 border border-white/30 rounded">Menu</button>
  </div>

  <div class="flex min-h-screen flex-col md:flex-row">

    <!-- Sidebar -->
    <aside id="sidebar" class="hidden md:block w-64 bg-orange-600 text-white shadow-lg">
      <div class="p-6 flex flex-row items-center gap-3 text-lg font-semibold border-b border-white/10">
        <img src="../images/gcmalogo.png" alt="GCMA Logo" class="w-10 h-10">
        Works Department System
      </div>
      <nav class="mt-6 space-y-1">
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/10" href="../admin/dashboard.php">Dashboard</a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/10" href="../admin/project.php">Projects</a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/10" href="../admin/maintenance.php">Maintenance</a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/10" href="../admin/assets.php">Assets</a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/10" href="../admin/complain.php">Complaints</a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/10" href="../admin/document.php">Documents</a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/10" href="../admin/inspection.php">Inspection</a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/10" href="../admin/report.php">Reports</a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/10" href="../admin/setting.php">Settings</a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-red-500/20" href="../index.php">Logout</a>
      </nav>
    </aside>