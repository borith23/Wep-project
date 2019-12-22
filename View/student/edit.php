<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-center text-white">
                    <h2>Student Information Form</h2>
                </div>
                <?php
                foreach ($data['student_data'] as $row) {
                ?>
                <form action="index.php?action=edit_data&id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">
                    <div class="card-body"  style="background-color: #C0C0C0;">
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" name="firstname" id="firstname" value="<?php echo $row['first_name']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lastnmae">Lastnmae</label>
                                <input type="text" name="lastname" id="lastname" value="<?php echo $row['last_name']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="class">Class:</label>
                                <select name="class" id="class" class="form-control">
                                    <option <?php if($row['class']==''){?> selected="selected" <?php } ?> value="">Choos Class</option>
                                    <option <?php if($row['class']=='2021-A'){?> selected="selected" <?php } ?> value="2021-A">2021-A</option>
                                    <option <?php if($row['class']=='2021-B'){?> selected="selected" <?php } ?> value="2021-B">2021-B</option>
                                    <option <?php if($row['class']=='2021-C'){?> selected="selected" <?php } ?> value="2021-C">2021-C</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender:</label><br>
                                <input type="radio" <?php if($row['gender']=='Male'){?> checked="checked" <?php } ?> name="sex" value="Male">Male <br>
                                <input type="radio" <?php if($row['gender']=='Female'){?> checked="checked" <?php } ?> name="sex" value="Female">Female
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="reason">Reason:</label>
                                <input type="text" name="reason" id="reason" value="<?php echo $row['reason']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="class">Class:</label>
                                <select name="major" id="major" class="form-control">
                                    <option <?php if($row['marjor'] == 'web'){?> selected="selected" <?php } ?>  value="web">web</option>
                                </select>
                    </div>
                    
                        <a href="index.php?action=view" class="btn btn-success">Go Back</a>
                        <input type="submit" name="create" value="Submit" class="btn btn-primary float-right">
                    
                </form>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>