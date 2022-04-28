<section>
    <?php
      $session = \Config\Services:: session();
      ?>
      <?php if(isset($session->success)): ?>
          <div class ="alert alert-success text-center alert-dismissible fade show mb-0" role ="0">
          <?= $session->success ?>
            <button type ="button" class="close" data-dismiss="alert" aria -label="Close">
              <span aria-hidden="true"> &times; </span>
            </button>
          </div>
    <?php endif; ?>

<div class="container col-md-7 col-lg-8 col-xl-5">
  <?php if ($news): ?>
   <?php for ($i = 1; $i < 6; $i++): ?>
      <div class="post-preview">
          <h2 class="post-title"><?= $news[$i]['title'] ?></h2>
          <p class="post-subtitle"><?= mb_substr($news[$i]['description'], 0, 110) ?></p>
              <p class="post-meta">
                  TAG
                  <a href="#!">:</a>
                  <strong class="d-inline-block mb-2"><?= $news[$i]['tag'] ?></strong>
                  <p><a href="/blog/<?= $news[$i]['id'] ?>" class="stretched-link">Read &raquo;</a></p>
              </p>

      </div>
      <hr class="my-4" />
   <?php endfor; ?>
</div>
 <?php else: ?>
   <p class="text-center"> No posts have been found. Be the first one to post your blog!</p>
 <?php endif; ?>
<hr>
</section>
