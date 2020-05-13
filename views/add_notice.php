<?php include 'header.php' ?>
<?php  include 'sidebar.php'?>
<div class="right-container">
	<div class="add-file-wrapper">
                <h3 class="add-file-header">Add notice</h3>
               <form action="../module/add_file.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Title">Enter the title of the notice</label><br>
                        <input type="text" class="form-control" name="title" required >
                    </div>
                    <div class="form-group">
                        <label for="Title">Enter description</label><br>
                        <textarea type="text" class="form-control" rows="2" col="200" name="description" required ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Title">Notice Type</label><br>
                        <select name="state" required class="form-control" id="noticeType">
                            <option selected disabled hidden></option>
                            <option value="general">General</option>
                            <option value="specific">Specific</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Title">Year</label><br>
                        <select name="year" required class="form-control">
                            <option selected disabled hidden></option>
                            <option id="fy" value="fy">FY</option>
                            <option id="sy" value="sy">SY</option>
                            <option id="ty" value="ty">TY</option>
                            <option id="all" value="all">ALL</option>
                        </select>
                    </div>
                    <div class="form-group">
                    
                        <label for="password">Enter the file</label>
                        <input type="file" name="file" required>
                        <input type="hidden" name="courseName" value="<?php echo $_SESSION['adminCourse']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnUpload">Upload</button>
               </form>
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