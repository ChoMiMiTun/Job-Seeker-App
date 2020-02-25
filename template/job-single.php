<?php include ('inc/header.php'); ?>

<div class="row">
    <div class="container mt-3">
        <div class="col-md-12">
            <h3 class="page-header mt-3"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h3>
            <small class="text-danger"><b>Post by: </b><?php echo $job->contact_user ?> <b>on</b> <?php echo $job->created_at; ?></small>
            <p class="lead"><?php echo $job->description; ?></p>

            <ul class="list-group mb-3" style="list-style-type:none;">
                <li class=""><strong>Company : </strong><?php echo $job->company ?></li>
                <li class=""><strong>Salary : </strong><?php echo $job->salary ?></li>
                <li class=""><strong>Contact Email : </strong><?php echo $job->contact_email ?></li>
            </ul>
            <a href="index.php" class="btn btn-outline-primary float-right">Go Back</a>

            <br><br>

            <div class="well">
                <a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-primary">Edit</a>

                <form style="display:inline;" action="job.php" method="post">
                    <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
                    <input type="submit" class="btn btn-danger" value="delete">
                </form>
            </div>
        </div>
    </div>
</div>


<?php include ('inc/footer.php'); ?>