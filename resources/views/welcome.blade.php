<html><head><base href="https://websimcreation.com/api/utilisation">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>API Documentation - Dispro</title>
<style>
  body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }
  h1 {
    color: #2c3e50;
    border-bottom: 2px solid #3498db;
    padding-bottom: 10px;
  }
  h2 {
    color: #2980b9;
  }
  .endpoint {
    background-color: #f9f9f9;
    border-left: 4px solid #3498db;
    padding: 10px;
    margin-bottom: 20px;
  }
  .method {
    font-weight: bold;
    color: #e74c3c;
  }
  .path {
    color: #27ae60;
  }
  .description {
    margin-top: 10px;
  }
</style>
</head>
<body>
  <h1>API Documentation - Dispro</h1>
  
  <p>Welcome to the Dispro API documentation. This API allows you to manage cars, users, counts, and maintenances for the Dispro company. Below you'll find the available endpoints and their descriptions.</p>

  <h2>Cars</h2>
  
  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/cars</span>
    <div class="description">Retrieve a list of all cars.</div>
  </div>

  <div class="endpoint">
    <span class="method">POST</span> <span class="path">/api/cars</span>
    <div class="description">Create a new car entry.</div>
  </div>

  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/cars/{id}</span>
    <div class="description">Retrieve details of a specific car.</div>
  </div>

  <div class="endpoint">
    <span class="method">PUT/PATCH</span> <span class="path">/api/cars/{id}</span>
    <div class="description">Update details of a specific car.</div>
  </div>

  <div class="endpoint">
    <span class="method">DELETE</span> <span class="path">/api/cars/{id}</span>
    <div class="description">Delete a specific car from the system.</div>
  </div>

  <h2>Users</h2>
  
  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/users</span>
    <div class="description">Retrieve a list of all users.</div>
  </div>

  <div class="endpoint">
    <span class="method">POST</span> <span class="path">/api/users</span>
    <div class="description">Create a new user account.</div>
  </div>

  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/users/{id}</span>
    <div class="description">Retrieve details of a specific user.</div>
  </div>

  <div class="endpoint">
    <span class="method">PUT/PATCH</span> <span class="path">/api/users/{id}</span>
    <div class="description">Update details of a specific user.</div>
  </div>

  <div class="endpoint">
    <span class="method">DELETE</span> <span class="path">/api/users/{id}</span>
    <div class="description">Delete a specific user from the system.</div>
  </div>

  <h2>Counts</h2>
  
  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/counts</span>
    <div class="description">Retrieve a list of all counts (e.g., mileage records).</div>
  </div>

  <div class="endpoint">
    <span class="method">POST</span> <span class="path">/api/counts</span>
    <div class="description">Create a new count entry.</div>
  </div>

  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/counts/{id}</span>
    <div class="description">Retrieve details of a specific count.</div>
  </div>

  <div class="endpoint">
    <span class="method">PUT/PATCH</span> <span class="path">/api/counts/{id}</span>
    <div class="description">Update details of a specific count.</div>
  </div>

  <div class="endpoint">
    <span class="method">DELETE</span> <span class="path">/api/counts/{id}</span>
    <div class="description">Delete a specific count from the system.</div>
  </div>

  <h2>Maintenances</h2>
  
  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/maintenances</span>
    <div class="description">Retrieve a list of all maintenance records.</div>
  </div>

  <div class="endpoint">
    <span class="method">POST</span> <span class="path">/api/maintenances</span>
    <div class="description">Create a new maintenance record.</div>
  </div>

  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/maintenances/{id}</span>
    <div class="description">Retrieve details of a specific maintenance record.</div>
  </div>

  <div class="endpoint">
    <span class="method">PUT/PATCH</span> <span class="path">/api/maintenances/{id}</span>
    <div class="description">Update details of a specific maintenance record.</div>
  </div>

  <div class="endpoint">
    <span class="method">DELETE</span> <span class="path">/api/maintenances/{id}</span>
    <div class="description">Delete a specific maintenance record from the system.</div>
  </div>

  <script>
    // You can add interactive elements or additional JavaScript functionality here
  </script>
</body></html>