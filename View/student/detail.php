<div class="container">
  <div class="row">

    <?php
    foreach ($data['student_data'] as $row) {
      ?>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="hovereffect">
          <img class="img-responsive" src="View/img/<?php echo $row['profile']; ?>" class="rounded-circle mb-5" width="200" height="250" alt="Profile">
          <div class="overlay">
            <h2>
              <a href="index.php?action=update_profile&id=<?php echo $row['id']; ?>" class="btn btn-outline-danger font-weight-bold font-size-italic">Change Profile</a>
            </h2>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
      <table class="table table-border"  style="color: white;">
        <tr>
          <th class="header-table">ID</th>
          <td class="content"><?php echo $row['id']; ?></td>
        </tr>
        <tr>
          <th class="header-table">FullName</th>
          <td class="content"><?php echo $row['first_name']." ".$row['last_name']; ?></td>
        </tr>
        <tr>
          <th class="header-table">Class</th>
          <td class="content"><?php echo $row['class']; ?></td>
        </tr>
        <tr>
          <th class="header-table">Gender</th>
          <td class="content"><?php echo $row['gender']; ?></td>
        </tr>
        <tr>
          <th class="header-table">Email</th>
          <td class="content"><?php echo $row['email']; ?></td>
        </tr>
        <tr>
          <th class="header-table">Reason</th>
          <td class="content"><?php echo $row['reason']; ?></td>
        </tr>
        <tr>
          <th class="header-table">Major</th>
          <td class="content"><?php echo $row['marjor']; ?></td>
        </tr>
      <?php
      }
      ?>
      </table>
      <a class="btn btn-success pull-left mb-5" href="index.php?action=view">Go Back</a><br>
  </div>
</div>