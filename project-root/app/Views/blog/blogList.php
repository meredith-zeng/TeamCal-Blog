<?php
$session = \Config\Services:: session();
?>
<?php if(isset($session->success)): ?>
    <div class ="container col-md-7 col-lg-8 col-xl-5 alert alert-success text-center alert-dismissible fade show mb-0" role ="0">
        <?= $session->success ?>
        <button type ="button" class="close" data-dismiss="alert" aria -label="Close">
            <span aria-hidden="true"> &times; </span>
        </button>
    </div>
<?php endif; ?>
<section>
    <div class="container col-md-7 col-lg-8 col-xl-5">
    <section class='blog-section'>
      <div class="container">
        <?php if ($table): ?>
            <?php foreach ($table as $p): ?>
              <div class="card mb-4">
                <div class="card-body">
                  <h2 class="card-post-title"><?= $p['title']; ?></h2>
                    <p class="card-post-subtitle"><?= mb_substr($p['description'], 0, 220) ?> ...</p>
                    <p>
                        <a href="/blog/<?= $p['id'] ?>" class="stretched-link">Read More >></a>
                    </p>
                </div>
                   <div class="card-footer">
                     TAG :
                       <strong class="d-inline-block mb-2"><?= $p['tag']; ?></strong>
                  </div>
              </div>
              <?php endforeach; ?>
        <div class="m-auto">
                <?= $pager->links('post', 'pagination'); ?>
        </div>
        <?php else: ?>
          <p class="text-center"> No posts have been found. Be the first one to post your blog!</p>
        <?php endif; ?>
      </div>
    </section>
    </div>
</section>
