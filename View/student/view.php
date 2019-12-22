<div class="row mb-3">
    <div class="col-md-12">
        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add New</a>
        <!-- index.php?action=add -->
        <!-- The Modal of Add-->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="index.php?action=form_data" method="post" enctype="multipart/form-data">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h2 class="text-center text-success font-weight-bold">WEB Register</h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body"  style="background-color: #C0C0C0;">
                            <div class="form-group">
                                <label for="name"><strong>Firstname</strong></label>
                                <input type="text" name="firstname" id="firstname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Lastname</strong></label>
                                <input type="text" name="lastname" id="lastname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="class">Class:</label>
                                <select name="class" id="class" class="form-control">
                                    <option value="">Choose Class</option>
                                    <option value="2021-A">2021-A</option>
                                    <option value="2021-B">2021-B</option>
                                    <option value="2021-B">2021-C</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sex"><strong>Gender</strong></label><br>
                                <input type="radio" name="sex" value="Male">Male <br>
                                <input type="radio" name="sex" value="Female">Female
                            </div>
                            <div class="form-group">
                                <label for="email"><strong>Email</strong></label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email"><strong>Reason</strong></label>
                                <textarea name="reason" id="reason" cols="10" rows="5" class="form-control"></textarea>  
                            </div>
                            <div class="form-group">
                                <label for="class">Major:</label>
                                <select name="major" id="major" class="form-control">
                                    <option value="web">web</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="file"><strong>Profile</strong></label><br>
                                <input type="file" name="profile" id="file">
                            </div>   
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="index.php?action=view" class="btn btn-outline-danger" >Go Back</a>
                            <input type="submit" name="create" value="Submit" class="btn btn-outline-primary float-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- The End Modal of Add-->

<!-- View data of student in table -->
<table class="table table-bordered " style="color: white;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Class</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Major</th>
            <th>Reason</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php
        if(isset($data['student_data'])){
            foreach($data['student_data'] as $rows){
    ?>
    <tbody>
        <tr>
            <td><?php echo $rows ['id']?></td>
            <td><?php echo $rows ['first_name']." ". $rows ['last_name']?></td>
            <td><?php echo $rows ['class']?></td>
            <td><?php echo $rows ['gender']?></td>
            <td><?php echo $rows ['email']?></td>
            <td><?php echo $rows ['marjor']?></td>
            <td><?php echo $rows ['reason']?></td>
            
            
            <td>               
                <a href="index.php?action=detail&id=<?php echo $rows['id'];?>" ><i class="material-icons text-success">remove_red_eye</i></a>  
                <a href="index.php?action=edit&id=<?php echo $rows['id'];?>"><i class="material-icons text-primary">edit</i></a>
                <a href="index.php?action=delete&id=<?php echo $rows['id'];?>"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to delete?');">delete</i></a>
            </td>
        </tr>
    </tbody>
    <?php
            }
        }
    ?>
</table>