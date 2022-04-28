<section>

<div class="container col-md-7 col-lg-8 col-xl-5">
  <?php if ($topPosts): ?>
   <?php for ($i = 0; $i < 5; $i++): ?>
      <div class="post-preview">
          <h1>Top  <?= $i + 1?></h1>
          <h3 class="post-title"><?= $topPosts[$i]['title'] ?></h3>
          <p class="post-subtitle"><?= mb_substr($topPosts[$i]['description'], 0, 200) ?> ...</p>
              <p class="post-meta">
                  TAG
                  <a href="#!">:</a>
                  <strong class="d-inline-block mb-2"><?= $topPosts[$i]['tag'] ?></strong>
              </p>
          <a href="/blog/<?= $topPosts[$i]['id']?>">Read More >></a>
      </div>
      <hr class="my-4" />
   <?php endfor; ?>
</div>
 <?php else: ?>
   <p class="text-center"> No posts have been found. Be the first one to post your blog!</p>
 <?php endif; ?>
</section>
