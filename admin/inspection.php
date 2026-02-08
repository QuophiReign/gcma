<!DOCTYPE html>
<html lang="en">
<body class="bg-white font-sans">

<?php include '../include/nav.php'; ?>


<!-- Main Content -->
<main class="flex-1 p-4 md:p-8">
    <!-- Header -->
    <div class="mb-6">
      <h1 class="text-2xl font-bold">Inspection & Reporting</h1>
      <p class="text-gray-600 mt-1">Conduct inspections and generate official reports</p>
    </div>

    <!-- Inspection Form -->
    <div class="bg-white p-6 rounded-xl shadow mb-8">
      <h2 class="text-lg font-semibold mb-4">Inspection Form</h2>

      <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <input type="text" placeholder="Inspection Title" class="border rounded-lg px-3 py-2" required />
        <input type="date" class="border rounded-lg px-3 py-2" required />

        <input type="text" placeholder="Inspector Name" class="border rounded-lg px-3 py-2" required />
        <select class="border rounded-lg px-3 py-2" required>
          <option value="">Inspection Type</option>
          <option>Road Inspection</option>
          <option>Building Inspection</option>
          <option>Drainage Inspection</option>
        </select>

        <input type="text" placeholder="Location" class="border rounded-lg px-3 py-2 md:col-span-2" required />

        <select class="border rounded-lg px-3 py-2">
          <option>Overall Condition</option>
          <option>Good</option>
          <option>Fair</option>
          <option>Poor</option>
        </select>

        <select class="border rounded-lg px-3 py-2">
          <option>Risk Level</option>
          <option>Low</option>
          <option>Medium</option>
          <option>High</option>
        </select>

        <textarea placeholder="Inspection Findings" class="border rounded-lg px-3 py-2 md:col-span-2" rows="4"></textarea>
        <textarea placeholder="Recommendations" class="border rounded-lg px-3 py-2 md:col-span-2" rows="3"></textarea>
      </form>
    </div>

    <!-- Photo Upload Section -->
    <div class="bg-white p-6 rounded-xl shadow mb-8">
      <h2 class="text-lg font-semibold mb-4">Inspection Photos</h2>

      <label class="block border-2 border-dashed rounded-lg p-6 text-center cursor-pointer hover:bg-gray-50">
        <input id="photoInput" type="file" multiple accept="image/*" class="hidden" onchange="previewImages(event)" />
        <p class="text-gray-600">Click to upload or drag & drop photos</p>
        <p class="text-xs text-gray-400 mt-1">JPG, PNG (max 5MB each)</p>
      </label>

      <!-- Preview Placeholder -->
      <div id="previewContainer" class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4"></div>
        <div class="h-24 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400 text-xs">Preview</div>
      </div>
    </div>

    <!-- Report Actions -->
    <div class="bg-white p-6 rounded-xl shadow">
      <h2 class="text-lg font-semibold mb-4">Digital Signature</h2>
      <canvas id="signaturePad" class="border rounded-lg w-full h-40"></canvas>
      <button onclick="clearSignature()" class="mt-2 text-sm text-red-600 hover:underline">Clear Signature</button>
    </div>

    <div class="bg-white p-6 rounded-xl shadow mt-8">
      <h2 class="text-lg font-semibold mb-4">Report Actions</h2>

      <div class="flex flex-col sm:flex-row gap-4">
        <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
          Save Inspection
        </button>
        <button class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
          Generate PDF Report
        </button>
        <button class="border px-6 py-3 rounded-lg hover:bg-gray-50">
          Preview Report
        </button>
      </div>

      <p class="text-sm text-gray-500 mt-4">
        PDF reports include inspection details, photos, findings, and official signatures.
      </p>
    </div>

  </div>

</main>

  <script>
    // Image preview
    function previewImages(event) {
      const container = document.getElementById('previewContainer');
      container.innerHTML = '';
      [...event.target.files].forEach(file => {
        const reader = new FileReader();
        reader.onload = e => {
          const img = document.createElement('img');
          img.src = e.target.result;
          img.className = 'h-24 w-full object-cover rounded-lg';
          container.appendChild(img);
        };
        reader.readAsDataURL(file);
      });
    }

    // Signature pad
    const canvas = document.getElementById('signaturePad');
    const ctx = canvas.getContext('2d');
    let drawing = false;

    canvas.addEventListener('mousedown', () => drawing = true);
    canvas.addEventListener('mouseup', () => drawing = false);
    canvas.addEventListener('mousemove', draw);

    function draw(e) {
      if (!drawing) return;
      ctx.lineWidth = 2;
      ctx.lineCap = 'round';
      ctx.strokeStyle = '#000';
      ctx.lineTo(e.offsetX, e.offsetY);
      ctx.stroke();
      ctx.beginPath();
      ctx.moveTo(e.offsetX, e.offsetY);
    }

    function clearSignature() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
    }

    // GPS location
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(pos => {
        const locationField = document.createElement('input');
        locationField.type = 'hidden';
        locationField.value = pos.coords.latitude + ',' + pos.coords.longitude;
        document.querySelector('form').appendChild(locationField);
      });
    }
  </script>
</body>
</html>
