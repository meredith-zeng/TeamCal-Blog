<div class ="container">
  <h1>Create new post </h1>
    <?php if($_POST):?>
        <?= \Config\Services::validation()->listErrors(); ?>
    <?php endif; ?>
    <div class="container col-md-10 col-lg-11 col-xl-6">
      <form class="" action="/blog/create" enctype="multipart/form-data" method ="post">
        <div class="form-group">
          <label for="title"><strong>Title:</strong></label>
          <input type="text" class="form-control" name="title" id="title" value="">
            <span class="help-block">length between</span>
        </div>
        <div class ="form-group">
          <label for ="description"><strong>Description:</strong></label>
          <textarea class="form-control" name="description" id="description"></textarea>
            <span>length between</span>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput"><strong>Image:</strong></label>
          <input type="file" name="image" class="form-control" id="image" style="height:45px;">
            <span>file restrict</span>
        </div>
        <div class="form-group">
        <label for="formGroupExampleInput"><strong>Tag:</strong></label>
            <input type="text" class="form-control" name="tag" id="tag" value="">
            <span class="help-block">length between</span>
      </div>
        <div class ="form-group text-center">
          <button type="submit" class ="btn btn-primary" style="font-size:120%;">Post</button>
        </div>
      </form>
    </div>
</div>