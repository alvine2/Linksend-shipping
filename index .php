<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="icon" href="/images/logo.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <title>Tracking Page</title>
  <style>
    /* Your existing styles here */
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    .tracking-form {
      display: flex;
    }

    .tracking-input {
      flex: 1;
      padding: 10px;
    }

    .tracking-button {
      padding: 12px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      cursor: pointer;
      border: none;
      outline: none;
      border-radius: 20px;
      font-size: 0.96rem;
      font-weight: bolder;
      cursor: pointer;
      transition: transform 0.2s ease;
      text-decoration: none;
    }

    .tracking-results {
      margin-top: 20px;
      padding: 10px;
      background-color: #f4f4f4;
    }


    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      box-sizing: border-box;
      /* Ensures padding doesn't affect container width */
    }

    .tracking-form {
      display: flex;
      margin-bottom: 20px;
      /* Add space between tracking input and track button */
    }

    .tracking-input {
      flex: 1;
      padding: 10px;
    }

    .tracking-button {
      padding: 10px 30px;
      background-color: #007bff;
      color: #fff;
      border: none;
      cursor: pointer;
      border: none;
      outline: none;
      margin-inline-start: 1rem;
      border-radius: 20px;
      font-size: 0.96rem;
      font-weight: bolder;
      cursor: pointer;
      transition: transform 0.2s ease;
      text-decoration: none;
    }

    .tracking-button:hover,
    .btn:hover {
      transform: scale(1.05);
      color: black;
    }

    .status {
      font-weight: bold;
      display: inline-block;
      padding: 5px 10px;
      border-radius: 5px;
    }

    .status-delivered {
      color: #009900;
      /* Green color for delivered */
      background-color: #ccffcc;
      /* Light green background for delivered */
    }

    .status-pending {
      color: #ff3300;
      /* Red color for pending */
      background-color: #ffcccc;
      /* Light red background for pending */
    }

    .icon {
      font-size: 20px;
      vertical-align: middle;
      margin-left: 10px;
    }

    .tick {
      color: #009900;
      /* Green color for tick */
    }

    .cross {
      color: #ff3300;
      /* Red color for cross */
    }

    .tracking-button:active,
    .btn:active {
      transform: scale(0.95);
    }

    .tracking-results {
      margin-top: 20px;
      padding: 10px;
      background-color: #f4f4f4;
      color: black;
      min-height: 400px;
      /* Minimum height for the tracking results container */
    }

    .event-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}

.event-name {
  flex: 2;
  padding-left: 20px;
  position: relative;
  border-left: 1px solid #ccc;
}
    /* CSS for the form */
.tracking-form {
  display: flex;
  flex-direction: column; /* Stack elements vertically on small screens */
  align-items: center; /* Center the form horizontally */
  margin-top: 20px; /* Add space at the top */
  background-color: #f4f4f4; /* Grey background color */
  padding: 20px; /* Add padding to the form */
  border-radius: 10px; /* Rounded corners for the form */
}

.tracking-input {
  flex: 1;
  width: 100%; /* Make input fields full width on small screens */
  padding: 10px;
  background-color: #fff; /* White background for input */
  border: 1px solid #ccc; /* Grey border */
  border-radius: 5px; /* Rounded corners for input */
  margin-bottom: 10px; /* Add spacing between input fields */
}

.tracking-button {
  padding: 10px 30px;
  background-color: #007bff;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 10px; /* Rounded corners for button */
  font-size: 0.96rem;
  font-weight: bolder;
  transition: transform 0.2s ease;
  text-decoration: none;
}

.tracking-button:hover {
  transform: scale(1.05);
  color: black;
}

/* Media query for responsiveness */
@media (min-width: 768px) {
  /* Apply these styles for screens with a minimum width of 768px */
  .tracking-form {
    flex-direction: row; /* Align elements horizontally */
    justify-content: space-between; /* Add space between input and button */
  }

  .tracking-input {
    width: auto; /* Reset input width to its default */
    margin-bottom: 0; /* Remove margin between input fields */
    margin-right: 10px; /* Add spacing between input and button */
  }
}


.event-name::before {
  content: "";
  position: absolute;
  top: -10px; /* Add space between the triangle and the line */
  left: -10px; /* Adjust the position of the triangle horizontally */
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 10px 10px 10px; /* Make the triangle face downwards */
  border-color: transparent transparent #ccc transparent;
}

.event-details {
  font-weight: bold;
  flex: 1;
}

/* New class for a green circle with a white tick */
.green-check {
  flex: 2;
  padding-left: 20px;
  position: relative;
  border-left: 1px solid #ccc;
  position: relative;
}

.green-check::before {
  content: "\2713"; /* Unicode character for a checkmark */
  position: absolute;
  top: -10px; /* Vertically center the checkmark */
  left: 0px; /* Horizontally center the checkmark */
  transform: translate(-50%, -50%); /* Center it precisely */
  width: 30px;
  height: 30px;
  background-color: #4CAF50; /* Green circle color */
  color: white; /* White color for the checkmark */
  border-radius: 50%; /* Make it a circle */
  text-align: center;
  line-height: 30px; /* Vertically center the checkmark */
}

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .right-address {
      text-align: right;
    }

    .left-address {
      text-align: left;
    }

    .h4,
    p {
      color: #000000;
    }
  </style>
</head>

<body>
  <div id="headerContainer"></div>
  <div class="container">
    <div class="card">
      <div class="card-body;card text-center">

        <h1 class="card-title">Track Your Package</h1>


      </div>
    </div>

    <form class="tracking-form" method="post" action="">
      <input class="tracking-input" type="text" name="trackingNumber" placeholder="Enter tracking number">
      <button class="tracking-button" type="submit">Track Package</button>
    </form>
    <div class="tracking-results" id="trackingInfo">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $trackingNumber = $_POST["trackingNumber"];


        $apiKey = 'MzgwXbTNmtfwjwO9EDsoMcL0h2k5X9Co';

        $queryParams = http_build_query(
          array(
            'trackingNumber' => $trackingNumber,
          )
        );

        $headers = array(
          'Accept: application/json',
          'DHL-API-Key: ' . $apiKey,
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api-eu.dhl.com/track/shipments?" . $queryParams);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err = curl_error($ch);
        curl_close($ch);

        $trackingInfo = json_decode($response, true);

        if ($err || $response == null) {
          echo "<h3>UNABLE TO LOAD DETAILS CHECK YOUR NETWORK CONNECTIVITY</h3>";
        } else {
          echo "<h2>Tracking Information</h2>";
          if (isset($trackingInfo["shipments"]) && is_array($trackingInfo["shipments"])) {
            foreach ($trackingInfo["shipments"] as $shipment) {
              $shipmentStatus = $shipment["status"]["status"];
              $shipmentStatus = strtolower($shipment["status"]["status"]);
              $isDelivered = ($shipmentStatus === 'delivered');
              $statusClass = $isDelivered ? 'status-delivered' : 'status-pending';
              $statusIcon = $isDelivered ? '<span class="icon tick">✔</span>' : '<span class="icon cross">✘</span>';

              echo "<h3 class='heading'>Shipment Status: <span class='status $statusClass'>$shipmentStatus $statusIcon</span></h3>";
              echo "<p >Shipment ID: " . $shipment['id'] . "</p>";
              echo "<p>Service: " . $shipment['service'] . "</p>";


              echo "<div style='display: flex; align-items: center; justify-content: space-between;'>";

              // Check for errors in the 'origin' data
              if (isset($shipment['origin']['address']['addressLocality'])) {
                  echo "<div style='flex: 1; display: flex; flex-direction: column; align-items: center;'>";
                  echo "<h4 style='margin: 0;'>Origin</h4>";
                  echo "<p style='margin: 0;'>Address: " . $shipment['origin']['address']['addressLocality'] . "</p>";
                  echo "</div>";
              } else {
                  echo "<div style='flex: 1; display: flex; flex-direction: column; align-items: center;'>";
                  echo "<h4 style='margin: 0;'>Origin</h4>";
                  echo "<p style='margin: 0;'>Origin address information is missing</p>";
                  echo "</div>";
              }
              
              echo "<div style='flex: 0; border-top: 1px dotted green; width: 50px;'></div>";
              
              // Check for errors in the 'destination' data
              if (isset($shipment['destination']['address']['addressLocality'])) {
                  echo "<div style='flex: 1; display: flex; flex-direction: column; align-items: center;'>";
                  echo "<h4 style='margin: 0;'>Destination</h4>";
                  echo "<p style='margin: 0;'>Address: " . $shipment['destination']['address']['addressLocality'] . "</p>";
                  echo "</div>";
              } else {
                  echo "<div style='flex: 1; display: flex; flex-direction: column; align-items: center;'>";
                  echo "<h4 style='margin: 0;'>Destination</h4>";
                  echo "<p style='margin: 0;'>Destination address  is missing</p>";
                  echo "</div>";
              }
              
              echo "</div>";
              

                 if (isset($shipment['status']['location']['address']['addressLocality'])) {
                  echo "<p>Location: " . $shipment['status']['location']['address']['addressLocality'] . "</p>";
              } else {
                  echo "<p>Location information is missing</p>";
              }
              
              if (isset($shipment['status']['description'])) {
                  echo "<p>Status Description: " . $shipment['status']['description'] . "</p>";
              } else {
                  echo "<p> Status is missing</p>";
              }
              
              echo "<div style='display: flex; justify-content: space-between;'>";
              echo "<h4 class='heading'>Details</h4>";
              
              if (isset($shipment['details']['proofOfDelivery']['timestamp'])) {
                  echo "<p style='margin: 0;'>Proof of Delivery Time: " . $shipment['details']['proofOfDelivery']['timestamp'] . "</p>";
              } else {
                  echo "<p>No Proof of Delivery yet</p>";
              }
              
              if (isset($shipment['details']['proofOfDelivery']['documentUrl'])) {
                  echo "<a class='btn btn-danger' href='" . $shipment['details']['proofOfDelivery']['documentUrl'] . "' role='button'>Print Proof PDF</a>";
              } else {
                  echo "<p>No Proof PDF document yet</p>";
              }
              
              echo "</div>";
              echo"<p>
          
          <button class='btn btn-success'type='button' data-bs-toggle='collapse' data-bs-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>
            More Details Here
          </button>
        </p>
            
        ";
              echo "<div class='collapse' id='collapseExample'>";
              echo " <div class='card card-body'>";
              echo "<h4 class='heading'>Events</h4>";
              foreach ($shipment['events'] as $event) {
                if($event['description']=="Delivered"){
                echo '<div class="event-item ">';
                echo '<div class="event-details">. ' . $event['timestamp'] . ' - ' . $event['location']['address']['addressLocality'] . '</div>';
                echo '<div class="green-check">' . $event['description'] . '</div>';

                echo '</div>';
                }else{
                  echo '<div class="event-item">';
                  echo '<div class="event-details">. ' . $event['timestamp'] . ' - ' . $event['location']['address']['addressLocality'] . '</div>';
                  echo '<div class="event-name">' . $event['description'] . '</div>';
  
                  echo '</div>';
                  echo "<hr>";


                }
               
              }
              echo "<hr>";
              echo '</div>';
              echo '</div>';
            }
          }else{
         echo"<h4>Sorry, your tracking attempt was not successful. Please check your tracking number.</h4>";
          }
        }
      } else {
        echo "<h3>TRACKING DETAILS</h3>";
        echo "<h4>Enter a valid tracking number to view details</h4>";
      }
      ?>


    </div>
  </div>


  </div>
  <div id="footerContainer"></div>

  <script>

    //Fetch the header content using Fetch API
    fetch('header.html')
      .then(response => response.text())
      .then(headerContent => {
        // Insert the fetched header content into the headerContainer div
        document.getElementById('headerContainer').innerHTML = headerContent;
      })
      .catch(error => {
        console.error('Error fetching header:', error);
      });

    // Fetch the footer content using Fetch API
    fetch('footer.html')
      .then(response => response.text())
      .then(footerContent => {
        // Insert the fetched footer content into the footerContainer div
        document.getElementById('footerContainer').innerHTML = footerContent;
      })
      .catch(error => {
        console.error('Error fetching footer:', error);
      });


  </script>
</body>

</html>