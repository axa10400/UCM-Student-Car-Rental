<?php 
$pageTitle = "Booking View";
include('includes/header.php'); 

require 'auth-user.php'; 

// database connection file include


// insert qry 
if(isset($_POST['submit']))
{
    $feedback = $_POST['feedback'];
    $id=$_GET['booking-id'];
 

    if(empty($id)){
        echo "<script>alert('Please Enter all details.All feild are mandtory');</script>";
    }
    else{
       
      
         //insert qry
        $query = mysqli_query($conn,"Update bookings set Feedback = '$feedback' where id = '$id' ");
        if($query)
        {
        echo "<script>alert('Feedback store successfully');</script>";
        echo "<script>window.location.href='my-bookings.php'</script>"; 
        } else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>"; 
        echo "<script>window.location.href='my-bookings.php'</script>";   
        }
    }
}
?>


<div class="banner py-4">
    <div class="container">
        <h4 class="banner-heading mb-3">Booking Experience Feedback</h4>
    </div>
</div>



<div class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <form method="post">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Feedback</label>
                    <textarea class="form-control" name="feedback" placeholder="Give feedback on your booking" rows="3" required minlength="3"></textarea>
                </div>
                <button name="submit" class="btn btn-warning btn-md">Give Feedback</button>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
