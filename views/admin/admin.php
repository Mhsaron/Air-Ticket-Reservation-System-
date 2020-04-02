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
    <link rel="stylesheet" href="css/admin.css" />
  </head>
  <body>
    <section id="navbar">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
          <!-- Brand -->
          <a class="navbar-brand" href="/Air-Ticket-Reservation-System-master/index.php"
            >Bangladesh Airlines</a
          >

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
                  <a class="dropdown-item" href="/Air-Ticket-Reservation-System-master/user/Login.php"
                    >Logout</a
                  >
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <section id="settings">
      <div class="">
        <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
          <form action="Login.php" class="login-form">
            <span class="login-form-title">Account Settings</span>
            <input class="login-input" type="text" placeholder="First Name" />
            <br />
            <input
              class="login-input"
              type="text"
              name=""
              id=""
              placeholder="Last Name"
            />
            <br />
            <input
              class="login-input"
              type="email"
              name=""
              id=""
              placeholder="Email Address"
            />
            <br />
            <input class="login-input" type="text" placeholder="Phone Number" />
            <br />
            <button class="login-form-btn">Update</button>
          </form>
        </div>
      </div>
    </section>
    <section id="admin-menu">
      <div class="split left">
        <div class="centered">
          <h4 style="color: beige;">Menu</h4>
          <ul class="fa-ul">
            <li>
              <a href="addFlight.php" style="color: #4caf50;"
                ><i class="fa fa-user-plus" style="font-size:30px"></i> Add
                Flight</a
              >
            </li>
            <li>
              <a href="updateFlight.php" style="color: #4caf50;"
                ><i class="fa fa-refresh" style="font-size:30px "></i> Update
                Flight</a
              >
            </li>
            <li>
              <a href="showFlight.php" style="color: #4caf50;"
                ><i class="fa fa-group" style="font-size:30px"></i> Show
                Flight</a
              >
            </li>
            <li>
              <a href="removeFlight.php" style="color: #4caf50;"
                ><i class="fa fa-close" style="font-size:30px"></i> Remove
                Flight</a
              >
            </li>
            <li>
              <a href="showcustomer.php" style="color: #4caf50;"
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
              <a href="notice.php" style="color: #4caf50;"
                ><i class="fa fa-bell-o" style="font-size:30px"></i> Send
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
              <span class="login-form-title">Add Flight</span>
              <input class="login-input" type="text" placeholder="Flight Id" />
              <br />
              <input
                class="login-input"
                type="text"
                placeholder="Departing Time"
              />
              <br />
              <span>From</span><br />
              <select name="" id="" class="login-input">
                <option value="">---</option>
                <option value="">DHAKA</option>
                <option value="">CHITTAGONG</option>
                <option value="">COX'S BAZAR</option>
                <option value="">RAJSHAHI</option>
              </select>
              <br />
              <span>To</span> <br />
              <select name="" id="" class="login-input">
                <option value="">---</option>
                <option value="">DHAKA</option>
                <option value="">CHITTAGONG</option>
                <option value="">COX'S BAZAR</option>
                <option value="">RAJSHAHI</option>
              </select>
              <br />
              <span>Date</span><br />
              <input class="login-input" type="date" /><br />

              <input class="login-input" type="text" placeholder="Total Seat" />
              <br />
              <input class="login-input" type="text" placeholder="Fare" />
              <br />
              <button class="login-form-btn">Add Flight</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
