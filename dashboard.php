<!-- FULL APP WITH PRICING DASHBOARD UI -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dynamic Pricing Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="flex justify-between items-center p-6 bg-white shadow">
  <h1 class="text-xl font-bold">Pricing Dashboard</h1>
  <a href="#" class="text-red-500">Logout</a>
</nav>

<!-- MAIN GRID -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">

  <!-- INPUT PANEL -->
  <div class="bg-white p-6 rounded-2xl shadow">
    <h2 class="font-bold text-lg mb-4">Input Data</h2>
    <input id="basePrice" type="number" placeholder="Base Price" class="w-full p-2 border rounded mb-3" />
    <input id="demand" type="number" placeholder="Demand (0-100)" class="w-full p-2 border rounded mb-3" />
    <input id="competitor" type="number" placeholder="Competitor Price" class="w-full p-2 border rounded mb-3" />
    <input id="stock" type="number" placeholder="Stock Level" class="w-full p-2 border rounded mb-3" />
    <button onclick="calculatePrice()" class="w-full bg-blue-500 text-white p-2 rounded">Calculate Price</button>
  </div>

  <!-- RECOMMENDATION PANEL -->
  <div class="bg-white p-6 rounded-2xl shadow">
    <h2 class="font-bold text-lg mb-4">Price Recommendation</h2>
    <p class="text-gray-600">Recommended Price:</p>
    <h3 id="result" class="text-3xl font-bold text-green-500 mt-2">--</h3>

    <div class="mt-4">
      <p class="text-sm text-gray-500">Factors considered:</p>
      <ul id="reason" class="text-sm text-gray-700 list-disc ml-4"></ul>
    </div>
  </div>

  <!-- CHART PANEL -->
  <div class="bg-white p-6 rounded-2xl shadow">
    <h2 class="font-bold text-lg mb-4">Demand vs Price</h2>
    <canvas id="chart"></canvas>
  </div>

</div>

<script>
function calculatePrice() {
  let base = parseFloat(document.getElementById('basePrice').value) || 0;
  let demand = parseFloat(document.getElementById('demand').value) || 0;
  let competitor = parseFloat(document.getElementById('competitor').value) || 0;
  let stock = parseFloat(document.getElementById('stock').value) || 0;

  let price = base;
  let reasons = [];

  if (demand > 70) {
    price *= 1.2;
    reasons.push("High demand increased price");
  }

  if (demand < 30) {
    price *= 0.85;
    reasons.push("Low demand decreased price");
  }

  if (competitor > 0 && price > competitor) {
    price = competitor - 1;
    reasons.push("Adjusted to stay competitive");
  }

  if (stock < 10) {
    price *= 1.1;
    reasons.push("Low stock increased price");
  }

  document.getElementById('result').innerText = "$" + price.toFixed(2);

  let reasonList = document.getElementById('reason');
  reasonList.innerHTML = "";
  reasons.forEach(r => {
    let li = document.createElement('li');
    li.innerText = r;
    reasonList.appendChild(li);
  });

  updateChart(demand, price);
}

let chart;
function updateChart(demand, price) {
  let ctx = document.getElementById('chart').getContext('2d');

  if (chart) chart.destroy();

  chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Low', 'Medium', 'High'],
      datasets: [{
        label: 'Price Trend',
        data: [price * 0.8, price, price * 1.2]
      }]
    }
  });
}
</script>

</body>
</html>
