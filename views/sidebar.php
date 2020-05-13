<body>
      <div class="navbar navbar-expand-sm navbar-custom">
       
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                   <h6 class="welcome">  Welcome <span><?php echo $_SESSION['adminDetail'];  ?></span> <i class="far fa-user-circle"></i></h6> 
                </li> 
            </ul> 
     </div>
     <div class="main-panel-cont" id="beforeScroll">
        <div class="left-container">
            <ol class="left-item-cont text-center">
                 <li class="header-wrapper">  
                    <h3 class="navbar-header">Admin Panel</h3>
                </li>
                <li class="hover-style">
                    <i class="fas fa-home icon"></i>
                    <div class="align-cont">
                        <a href="index.php" class="item-inner">Dashboard</a>
                    </div></li>
                <li class="hover-style">
                    <i class="fas fa-file-alt icon"></i>
                    <div class="align-cont">
                        <a href="add_notice.php" class="item-inner">Add notice</a>
                    </div>
                </li>
                <li class="hover-style">
                    <i class="fas fa-sign-out-alt icon"></i>
                    <div class="align-cont">
                        <a href="../module/logout.php" class="item-inner">Logout</a>
                    </div>
                </li>
            </ol>
        </div>
   