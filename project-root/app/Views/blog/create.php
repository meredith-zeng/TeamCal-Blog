<div class ="container">
  <h1>Create new post </h1>
    <div class="container col-md-10 col-lg-11 col-xl-6">
      <form class="" action="/blog/create" enctype="multipart/form-data" method ="post">
        <div class="form-group">
          <label for="title"><strong>Title:</strong></label>
          <input type="text" class="form-control" name="title" id="title" value="" placeholder="length between 0 and 255">
        </div>

        <div class ="form-group">
          <label for ="description"><strong>Description:</strong></label>
          <textarea class="form-control" rows="6" name="description" id="description" placeholder="length between 0 and 500"></textarea>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput"><strong>Image:</strong></label>
          <input type="file" name="image" class="form-control" id="image" style="height:45px;">
          <span>file type: jpg, jpeg, gif, png</span>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput"><strong>Tag:</strong></label>
            <input type="text" class="form-control" name="tag" id="tag" value="" placeholder="length between 0 and 100">
        </div>

        <div class ="form-group text-center">
            <button type="submit" class ="btn btn-primary">Post</button>
        </div>
      </form>

            <?php if($_POST):?>
                <div class="alert alert-danger" role="alert">
                <?= \Config\Services::validation()->listErrors(); ?>
                </div>
            <?php endif; ?>

    </div>

</div>
