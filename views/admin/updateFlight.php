<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/showFlight.css" />
  </head>
  <body>
    <section id="navbar">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
          <!-- Brand -->
          <a class="navbar-brand" href="/Air-Ticket-Reservation-System-master/index.php">Bangladesh Airlines</a>

          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="admin.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
          <!-- Dropdown -->
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbardrop"
                  data-toggle="dropdown"
                >
                  Hi,Admin
                </a>
                <div class="dropdown-menu">
                  
                  <a class="dropdown-item" href="changepassword.php"
                    >Change Password</a
                  >
                 
                  <a class="dropdown-item" href="/Air-Ticket-Reservation-System-master/user/Login.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <section id="admin-menu">
      <div class="split left">
        <div class="centered">
          <h4 style="color: beige;">Menu</h4>
          <ul class="fa-ul">
            <li>
              <a href="addFlight.html" style="color: #4caf50;"
                ><i class="fa fa-user-plus" style="font-size:30px"></i> Add
                Flight</a
              >
            </li>
            <li>
              <a href="updateFlight.html" style="color: #4caf50;"
                ><i class="fa fa-refresh" style="font-size:30px "></i> Update
                Flight</a
              >
            </li>
            <li>
              <a href="showFlight.html" style="color: #4caf50;"
                ><i class="fa fa-group" style="font-size:30px"></i> Show
                Flight</a
              >
            </li>
            <li>
              <a href="removeFlight.html" style="color: #4caf50;"
                ><i class="fa fa-close" style="font-size:30px"></i> Remove
                Flight</a
              >
            </li>
            <li>
              <a href="showcustomer.html" style="color: #4caf50;"
                ><i class="fa fa-eye" style="font-size:30px"></i> Show
                Customer</a
              >
            </li>
            <li>
              <a href="" style="color: #4caf50;"
                ><i class="fa fa-paper-plane-o" style="font-size:30px"></i> Show
                Bookflight</a
              >
            </li>
            <li>
              <a href="" style="color: #4caf50;"
                ><i class="fa fa-bell-o" style="font-size:30px"></i> Show Send
                Notice</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="split-right">
        <div>
          <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
            <form action="" class="login-form">
              <span class="login-form-title">Update Flight</span>
              <input class="input" type="text" placeholder="Flight Id" />
              <input class="searchb" type="button" value="Search" />
              <br />
              <br />
              <table class="search-table" style="width: 100%">
                <thead class="search-table">
                  <tr>
                    <th class="search-table">Flight ID</th>
                    <th class="search-table">Departing Time</th>
                    <th class="search-table">Departure</th>
                    <th class="search-table">Arrival</th>
                    <th class="search-table">Total Seat</th>
                    <th class="search-table">Seat Available</th>
                    <th class="search-table">Fare</th>
                    <th class="search-table">Choose</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="search-table">F100</td>
                      <td class="search-table">9:00AM</td>
                      <td class="search-table">Dhaka</td>
                      <td class="search-table">Cox's Bazar</td>
                      <td class="search-table">50</td>
                      <td class="search-table">50</td>
                      <td class="search-table">2500</td>
                    <td class="search-table">
                      <input type="submit" class="deleteb" value="Update" />
                    </td>
                  </tr>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
