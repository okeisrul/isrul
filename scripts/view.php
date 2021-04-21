<?php
    $title = 'View Records'; 

    require_once 'includes/header.php'; 
    // require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    // Get attendee by id
    if(isset($_GET['id'])){
        $is = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
    } else{
        echo"<h1 class='text-danger'>Please check details and try agaian</h1>";
    }
   
?>
  <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_result['firstname'] .' '. $_result['lastname']?></h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_result['specialty'] ?>
            </h6>
            <p class="card-text">
                Date of Birth: <?php echo $_result['dob'] ?> 
            </p>
            <p class="card-text">
                Email address: <?php echo $_result['email'] ?> 
            </p>
            <p class="card-text">
                Contact number: <?php echo $_result['phone'] ?> 
            </p>
        </div>


<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>