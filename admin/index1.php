
<!DOCTYPE html>
<html>
<head>
  <!-- Include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="themes/onewaytaxi.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
  <!-- Include jQuery Mobile stylesheets -->
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <!-- Include the jQuery library -->
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <!-- Include the jQuery Mobile library -->
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>



<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>Welcome To Admin of One-way Taxi</h1>
    <div data-role="navbar" data-iconpos="left">
      <ul>
        <li><a href="#" data-icon="home">Home</a></li>
        <li><a href="#" data-icon="arrow-r">Add</a></li>
        <li><a href="#" data-icon="search">Edit</a></li>
 	<li><a href="#" data-icon="search">Suspend</a></li>
	 <li><a href="#" data-icon="search">Add Funds</a></li>
      </ul>
    </div>
  </div>

  <div data-role="main" class="ui-content">
  <table data-role="table" class="ui-responsive">
      <thead>
        <tr>
          <th>CustomerID</th>
          <th>CustomerName</th>
          <th>ContactName</th>
          <th>Address</th>
          <th>City</th>
          <th>PostalCode</th>
          <th>Country</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Alfreds Futterkiste</td>
          <td>Maria Anders</td>
          <td>Obere Str. 57</td>
          <td>Berlin</td>
          <td>12209</td>
          <td>Germany</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Antonio Moreno Taquería</td>
          <td>Antonio Moreno</td>
          <td>Mataderos 2312</td>
          <td>México D.F.</td>
          <td>05023</td>
          <td>Mexico</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Around the Horn</td>
          <td>Thomas Hardy</td>
          <td>120 Hanover Sq.</td>
          <td>London</td>
          <td>WA1 1DP</td>
          <td>UK</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Berglunds snabbköp</td>
          <td>Christina Berglund</td>
          <td>Berguvsvägen 8</td>
          <td>Luleå</td>
          <td>S-958 22</td>
          <td>Sweden</td>
        </tr>
      </tbody>
    </table>    




  </div>

  <div data-role="footer">
    <h1>One Way Taxi</h1>
  </div>
</div> 

 



</body>
</html>
