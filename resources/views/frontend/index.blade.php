<html lang="en">
<head>
  <title>Internship Program</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="{{ url('public/frontend/css/style.css') }}">
</head>
<body>


  <div class="sidebar">
    <div class="sidebar-brand">
      <h1><span class="lab la-accusoft"></span>Internship</h1>
    </div>
    <div class="sidebar-menu">
      <ul>
        <li><a href=""><span class="las la-igloo"></span>
          <span>Dashboard</span></a>
        </li>
        <li><a href=""><span class="las la-pen-nib"></span>
          <span>New Daily Entry</span></a>
        </li>
        <li><a href=""><span class="las la-list"></span>
          <span>View Daily Entries</span></a>
        </li>
        <li><a href=""><span class="lar la-edit"></span>
          <span>Write Weekly Report</span></a>
        </li>
        <li><a href=""><span class="las la-clipboard-list"></span>
          <span>View Weekly Reports</span></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-content">
    <header>
      <h1>
        <label for="">
          <span class="las la-bars"></span>
        </label>
        Dashboard
      </div>
    </h1>
    <div class="search-wrapper">
      <span class="las la-search"></span>
      <input type="search" placeholder="Search here">
    </div>
    <div class="user-wrapper">
      <img src="{{ asset('public/frontend/img/img.png') }}" width="30px" height=30px alt="">
      <div>
        <h4>John Doe</h4>
        <small>Student Account</small>
      </div>
    </div>
  </header>

  <main>

    <div class="cards">
      <div class="card-single">
        <div>
          <h1>54</h1>
          <span>Customers</span>
        </div>
        <div>
          <span class="las la-users"></span>
        </div>
      </div>

      <div class="card-single">
        <div>
          <h1>79</h1>
          <span>Projects</span>
        </div>
        <div>
          <span class="las la-clipboard"></span>
        </div>
      </div>
    </div>
    <div class="card-single">
        <div>
          <h1>124</h1>
          <span>Orders</span>
        </div>
        <div>
          <span class="las la-shopping-bag"></span>
        </div>
      </div>
      <div class="card-single">
        <div>
          <h1>$6k</h1>
          <span>Income</span>
        </div>
        <div>
          <span class="lab la-google-wallet"></span>
        </div>
      </div>

  </main>
</div>

</body>
</html>
