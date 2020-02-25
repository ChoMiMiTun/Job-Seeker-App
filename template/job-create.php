<?php include ('inc/header.php'); ?>

<div class="container-fluid">
    <div class="col-md-6 offset-2">
        <h2 class="mt-5 mb-4">Create Job</h2>
            <form action="create.php" method="post">
                <div class="form-group">
                    <label for="company">Company Name</label>
                    <input type="text" class="form-control" name="company" id="company" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="0">Select Category</option>
                        <?php foreach($categories as $category): ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name ?></option>   
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="job_title">Job Title</label>
                    <input type="text" class="form-control" name="job_title" id="job_title" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="6" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="text" class="form-control" name="salary" id="salary" required>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" id="location" required>
                </div>
                <div class="form-group">
                    <label for="contact_user">Contact User</label>
                    <input type="text" class="form-control" name="contact_user" id="contact_user" required>
                </div>
                <div class="form-group">
                    <label for="contact_email">Contact User</label>
                    <input type="text" class="form-control" name="contact_email" id="contact_email" required>
                </div>
                <input type="submit" value="submit" name="submit" class="btn btn-primary">
            </form>
    </div>
</div>

<?php include ('inc/footer.php'); ?>