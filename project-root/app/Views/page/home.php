<section>

<div class="container col-md-7 col-lg-8 col-xl-5">
  <?php if ($news): ?>
   <?php for ($i = 1; $i < 6; $i++): ?>
      <div class="post-preview">
          <h1>Top  <?= $i ?></h1>
          <h3 class="post-title"><?= $news[$i]['title'] ?></h3>
          <p class="post-subtitle"><?= mb_substr($news[$i]['description'], 0, 90) ?> ...</p>
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
</section>
