<h2>JOBS APPLY</h2>


<?php foreach ($jobs as $job): ?>
    <div class="row">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $job->title ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $job->name ?></h6>
                <p class="card-text"><?= $job->description ?></p>
                <a href="/job/view/<?= $job->id ?>" class="card-link">View</a>
            </div>
        </div>
    </div>
    <hr>
<?php endforeach; ?>


