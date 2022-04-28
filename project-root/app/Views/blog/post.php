<section>
    <div class ="container">
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h1>Title: <?= $post['title'] ?></h1>
                        <hr>
                        <h4>Tag: <?= $post['tag'] ?></h4>
                        <hr>
                        <p><?= $post['description'] ?></p>
                        <img class="img-fluid" src="../upload/<?=$post['image']?>" alt="../upload/CI4.png" />
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
