<?php include ('inc/header.php'); ?>

<div class="container-fluid">
    <div class="col-md-6 offset-2">
        <h2 class="mt-5 mb-4">Edit Job</h2>
            <form action="edit.php?id=<?php echo $job->id; ?>" method="post">
                <div class="form-group">
                    <label for="company">Company Name</label>
                    <input type="text" class="form-control" name="company" id="company" value="<?php echo $job->company; ?>">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="0">Select Category</option>
                        <?php foreach($categories as $category): ?>
                            <?php if($job->category_id == $category->id) : ?>
                                <option value="<?php echo $category->id; ?>" selected><?php echo $category->name ?></option>
                            <?php else: ?>
                                <option value="<?php echo $category->id; ?>"><?php echo $category->name ?></option> 
                                <?php  ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="job_title">Job Title</label>
                    <input type="text" class="form-control" name="job_title" id="job_title" value="<?php echo $job->job_title; ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="6" class="form-control" value="<?php echo $job->description; ?>"><?php echo $job->description; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="text" class="form-control" name="salary" id="salary" value="<?php echo $job->salary; ?>">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" id="location" value="<?php echo $job->location; ?>">
                </div>
                <div class="form-group">
                    <label for="contact_user">Contact User</label>
                    <input type="text" class="form-control" name="contact_user" id="contact_user" value="<?php echo $job->contact_user; ?>">
                </div>
                <div class="form-group">
                    <label for="contact_email">Contact User</label>
                    <input type="text" class="form-control" name="contact_email" id="contact_email" value="<?php echo $job->contact_email; ?>">
                </div>
                <input type="submit" value="Update" name="submit" class="btn btn-primary">
            </form>
    </div>
</div>

<?php include ('inc/footer.php'); ?>