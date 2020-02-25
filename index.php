<?php include_once 'config/init.php'; ?>

<?php

$job = new Job;

$template = new Template('template/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
    $template->jobs = $job->GetByCategory($category);
    $template->title = 'Job in ' . $job->getCategory($category)->name;
}else{
    $template->title = 'Latest Job';
    $template->jobs =  $job->getAllJobs();
}

$template->categories = $job->getCategories();

echo $template;

?>