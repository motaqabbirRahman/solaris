<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!--link to css-->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    <link rel="stylesheet" href="{{asset('admin/styles.css')}}">  
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
          <h1><span class="las la-book"></span>Solaris</h1>
        </div>
        <!--Side Bar -->
        <div class="sidebar-menu">
           <ul>
            <li>
                <a href="#" class="active"><span class="las la-igloo">
                    <span>Dashboard</span>
                </a>
                
            </li>
             <li>
                <a href="" class="las la-users">
                    <span>Customers</span>
                </a>
                
            </li>
             <li>
                <a href="" class="las la-shipping-fast">
                    <span>Orders</span>
                </a>
                
            </li>
             <li>
                <a href="" class="las la-receipt">
                    <span>Inventory</span>
                </a>
                
            </li>
             <li>
                <a href="" class="las la-user-circle">
                    <span>Accountes</span>
                </a>
                
            </li>
           </ul>
        </div>
    </div>
    <!--  -->
    <div class="main-content">
        <header>
            <h1>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h1>
            <div class="search-wrapper">
                <span class="las la-search">
                  <input type="serach" placeholder="Search...">
                </span>
            </div>
            <div class="user-wrapper">
               <img src="../img/admin.jpg" width="30px" height="30px" alt="">
                <div>
                    <h4>Penguin Publisher</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <h1>3</h1>
                    <span>Customers</span>
                </div>
            </div>
        </main>
    </div>
    
</body>
</html>