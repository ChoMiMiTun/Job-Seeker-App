<?php include_once ('inc/header.php'); ?>


    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container text-center">
          <h1 class="display-3" style="margin-bottom:40px;">Search Your Jobs</h1>
            <div class="row">
              <div class="col-md-12">
                <form method="GET" action="index.php">
                    <select name="category" id="category" class="form-control">
                        <option value="0">Select Category</option>
                        <?php foreach($categories as $category): ?>
                        <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                        <?php endforeach; ?>
                    </select>
                    <br>
                    <input type="submit" class="btn btn-success btn-lg" value="search &raquo;">
                </form>
              </div>
              <!-- <p><a class="btn btn-success btn-lg" href="#" role="button" value="search">Search &raquo;</a></p> -->
            </div>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <h3><?php echo $title ?><br><br></h3>
        <?php foreach($jobs as $job): ?>

        <div class="row">
          <div class="col-md-10">
            <h4><?php echo $job->job_title ?></h4>
            <p><?php echo substr($job->description, 0, 260) ?> .....</p>
          </div>
          <div class="col-md-2">
            <p><a class="btn btn-success" href="job.php?id=<?php echo $job->id; ?>" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <?php endforeach; ?>

        <hr>

      </div> <!-- /container -->

    </main>



<?php

include_once ('inc/footer.php');

?>
