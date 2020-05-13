<?php include 'header.php' ?>
<?php  include 'sidebar.php'?>
<?php include '../config/connection.php' ?>
        <div class="right-container">
            <!-- <div class="main-card-cont">
                <div class="row">
                    <div class="col-md-4">
                        <div class="function-card">
                            <div class="function-card-left">
                                <div class="function-img-cont">
                                    <img src="img/eye.png" alt="">
                                </div>
                            </div>
                            <div class="function-card-right">
                                <div class="function-card-content">
                                    <h4>Upload</h4>
                                    <p><span>153275</span> notices uploaded</p>     
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="function-card">
                            <div class="function-card-left">
                                <div class="function-img-cont">
                                    <img src="img/eye.png" alt="">
                                </div>
                            </div>
                            <div class="function-card-right">
                                <div class="function-card-content">
                                    <h4>Upload</h4>
                                    <p><span>153275</span> notices uploaded</p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="function-card">
                            <div class="function-card-left">
                                <div class="function-img-cont">
                                    <img src="img/eye.png" alt="">
                                </div>
                            </div>
                            <div class="function-card-right">
                                <div class="function-card-content">
                                    <h4>Upload</h4>
                                    <p><span>153275</span> notices uploaded</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="info-table-main">        
                <h3 class="table-header">Notices</h3>
                <table class="main-table"> 
                    <tr>
                      <th>Notice Title</th>
                      <th>Date</th>
                      <th>State</th>
                      <th>Filename</th>  
                      <th>Year</th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                    <?php
                    $query = "SELECT * from notice_tb where ad_id ='$adminId'";
                    $result = mysqli_query($con,$query);
                    $count = mysqli_num_rows($result);

                    if($count > 0){
                        while($count != 0 ){
                            $row = mysqli_fetch_assoc($result);
                            $title = $row['nt_title'];
                            $date = $row['nt_date'];
                            $state = $row['nt_noticeState'];
                            $filename  = $row['nt_filename'];
                            $year = $row['nt_year'];
                            $course = $row['nt_course'];
                            $id = $row ['nt_id'];
                            $path = $row['nt_docPath'];
                                     
                    
                    ?>

                    <tr>
                        <td>
                            <?php echo $title; ?>
                        </td>
                        <td>
                        <?php echo $date; ?>
                        </td>
                        <td>
                        <?php echo $state; ?>
                        </td>
                        <td>
                        <?php echo $filename; ?>
                        </td>
                        <td>
                            <?php echo $year; ?>
                        </td>
                        
                        <td>
                           <a href="<?php echo $path;  ?>"><button class="btn btn-primary" name="btnView" type="submit">View</button></a> 
                        </td>
                        
                        <td><button class="btn btn-danger" value="<?php echo $id; ?>">Delete</button></td>
                        <td>
                            <form action="../module/download.php" method="POST">
                                <input type="hidden" value="<?php echo $id; ?>" name="id">
                                <button class="btn btn-primary" type="submit" name="btnDownload">Download</button>
                            </form>
                            
                            </td>
                    </tr>
                    <?php
                           $count--; }
                          
                        }
                        else{

                            echo "No records to show";
                        }
                    ?>
                  </table>
            </div>
            
        </div>
        </div> <!-- Main container closing -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="js/all.js"></script>
<script src="js/main.js"></script>
</html>