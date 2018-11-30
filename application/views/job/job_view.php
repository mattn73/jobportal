<?php $date = new DateTime(); ?>
<?php if (isset($error) || !(($date) <= (new DateTime($job->close_date)))) : ?>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="font-weight-normal">Invalid ID for Job</h1>
            <p class="lead font-weight-normal">The Pages you are looking may have been move or have been delete</p>
            <br/>
            <a href="/" class="btn btn-lg btn-outline-primary text-uppercase">BACK TO HOMEPAGES</a>
        </div>
    </div>

<?php else: ?>
    <div class="row">


        <div class="card custom-card" >
            <div class="row">

                <aside class="col-sm-7">
                    <article class="card-body p-5">
                        <h3 class="title mb-3"><?= $job->title ?></h3>


                        <dl class="item-property">
                            <dt>Description</dt>
                            <dd><p><?= $job->description ?> </p></dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Company</dt>
                            <dd><?= $job->name ?></dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>Address</dt>
                            <dd><?= $job->address ?></dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>Email</dt>
                            <dd><?= $job->email ?></dd>
                        </dl>

                        <dl class="param param-feature">
                            <dt>Closing Date</dt>
                            <dd><?= $job->close_date ?></dd>
                        </dl>  <!-- item-property-hor .// -->

                        <hr>


                        <?php if (isset($is_logged_in) && $is_logged_in): ?>

                            <a href="/job/apply/<?= $job->id ?>" class="btn btn-lg btn-primary text-uppercase"> Apply </a>

                        <?php else : ?>

                            <a href="/login" class="btn btn-lg btn-outline-primary text-uppercase">Login to Apply </a>

                        <?php endif; ?>

                    </article> <!-- card-body.// -->
                </aside> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- card.// -->


    </div>

<?php endif; ?>