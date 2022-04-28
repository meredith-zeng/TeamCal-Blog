<section>
    <div class="container col-md-7 col-lg-8 col-xl-5">
    <section class='blog-section'>
      <div class="container">
        <?php if ($table): ?>
            <?php $i = 1 + (6 * ($currentPage - 1)); ?>
            <?php foreach ($table as $p): ?>
              <div class="card mb-4">
                <div class="card-body">
                  <h2 class="card-post-title"><?= $p['title']; ?></h2>
                  <p class="card-post-subtitle"><?= $p['description']; ?></>
                  <a href="/blog/<?= $p['id'] ?>" class="stretched-link">Continue &raquo;</a>
                </div>
                   <div class="card-footer">
                     <?= $p['tag']; ?>
                  </div>
              </div>
              <?php endforeach; ?>
          <?= $pager->links('post', 'pagination'); ?>
        <?php else: ?>
          <p class="text-center"> No posts have been found. Be the first one to post your blog!</p>
        <?php endif; ?>
      </div>
    </section>
    </div>
</section>
