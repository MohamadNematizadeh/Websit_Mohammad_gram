<?php include "navbar.php"; ?>
<?php include "model/database.php"; 

$musics = $db->query("SELECT * FROM posts");

?>

<div class="container">
    <!-- new post section -->
    <div class="d-flex justify-content-evenly mt-4">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card shadow border-0 rounded-3">
                <div class="card-header py-3">
                    افزودن پست جدید
                </div>
                <div class="card-body">
                    <form method="post" action="add_post" id="new-post-form">
                        <div class="mb-3">
                            <label class="exampleFormControlTexterea1" class="form-label">عنوان</label>
                            <textarea name="text" rows="3" type="text" class="form-control mt-2" id="exampleFormControlTexterea1"></textarea>
                        </div>
                    </form>
                </div>
                <div class="card-footer py-3  d-grid gap-2">
                    <button class="btn btn-primary text-white float-end" type="submit" form="new-post-form">
                        انتشار پست
                    </button>
                    
                </div>
            </div>
        </div>
    </div>

</nav>
  </div>

</div>
</div>
</div>

<div class="d-flex justify-content-evenly mt-4">
<?php foreach ($musics as $music): ?>
<div class="card text-center">
  <div class="card-header">
  پست پیشنهادی  </div>
  <div class="card-body">
  <form class="container-fluid">
    <div class="input-group">
          <img src="view\img\Spring-Nagsh.ir-7-1.jpg" width="75" height="75" class="bd-placeholder-img rounded-circle">
</span>
<p><?php echo $music["user_id"]; ?></p>
    </div>
  </form>
</nav>
  </div>
  <p><?php echo $music["caption"]; ?></p>
  <img src="view\img\d.png" class="img-thumbnail" alt="...">

  <div class="card-footer">
  <a href="#" class="btn btn-light"><div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 hpfvmrgz ph5uu5jm b3onmgus iuny7tx3 ipjc6fyt"><span class=" pq6dq46d"><i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/4WioxOHE-hT.png');background-position:0 -272px;background-size:auto;width:18px;height:18px;background-repeat:no-repeat;display:inline-block"></i></span> <p>لایک</p></div>
</p></span></a>
<a href="#" class="btn btn-light"><div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 hpfvmrgz ph5uu5jm b3onmgus iuny7tx3 ipjc6fyt"><i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/4WioxOHE-hT.png');background-position:0 -234px;background-size:auto;width:18px;height:18px;background-repeat:no-repeat;display:inline-block"></i><p>کامنت</p></div></a>
<a href="#" class="btn btn-light"><div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 hpfvmrgz ph5uu5jm b3onmgus iuny7tx3 ipjc6fyt"><i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/4WioxOHE-hT.png');background-position:0 -291px;background-size:auto;width:18px;height:18px;background-repeat:no-repeat;display:inline-block"></i> <p>اشتراک گذاری
</p></div></a>
  </div>
  <?php endforeach ?>
</div>
</div>


</div>


<?php include "footer.php"; ?>