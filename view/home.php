
<?php
include "header.php";
include "navbar.php";

?>
<!-- put Post -->
<div class="d-flex justify-content-evenly mt-4">      
        <div class="col-6">
            <div class="card ">
            <div class="card shadow border-0 rounded-5">
                <div class="card-header">
                    چی توی ذهنته یک پست جدید بزار
                </div>
                <div class="card-body">
                    <form method="post" action="post" id="newpostform">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" name="captions" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </form>

                </div>
                <div class="card-footer text-muted">
                   <button class="btn btn-primary" type="submit" form="newpostform"> انشار پست جدید </button>
                </div>
            </div>
        </div>

<!-- left side -->
        

                </div>

            </div>
        </div>

    </div>

<!-- show posts -->
<?php foreach ($musics as $music): ?>
  <div class="d-flex justify-content-evenly mt-4">      
        <div class="col-6">
            <div class="card ">
                <div class="card-header">
                    <div class="row" >
                        <div class="col-1 " >

                            <img class="rounded-pill" src="<?php echo $music["image"]; ?>" width="75" height="75" class="img-fluid"  alt="...">

                        </div>
                        <div class="col-12">
                            <p><?php echo $music["first_name"];?> </p>
                               <small> <?php echo $music["time"];?>
                               </small> </p>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <h5>
                    <?php echo $music["caption"]; ?>
</h5>
                    <img  src="<?php echo $music["imaged"]; ?>" class="img-fluid"  alt="...">
                </div>
                <div class="card-footer">
                <button class="wpO6b" type="button"><div class="QBdPU B58H7"><svg aria-label="Like" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path></svg></div><div class="QBdPU rrUvL"><span class=""><svg aria-label="Like" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path></svg></span></div></button>
                    <button type="button" class=" btn btn-outline-primary " data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $music["id"];?>" aria-expanded="false" aria-controls="collapseExample">
                        <i class="far fa-comment"></i> 
                    </button>
                    <button type="button" class="btn btn-outline-danger">
                <i class="far fa-thumbs-up "></i>
                    </button>
                    <div class="collapse" id="collapse<?php echo $music["id"];?>">

                    <div class="list-group">
                    <div class="card card-header mt-2">
                      
                            <textarea class="form-control" name="bio"  placeholder="کامنت خود را بنویسید" rows="1"></textarea>
                            <div class="col-12">
                          <button type="submit" class="btn btn-primary mt-3"> <i class="far fa-comment"></i> ثبت پیام</button>
                          </div>
                          </div>
                          <?php Var_dunmp($comments=$db->query("SELECT * FROM posts LEFT JOIN comments ON Posts.id= comments.post_id WHERE post.id=$id "));
 foreach ($comments as $comment): ?>

                            <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center mt-2">
  <p><?php echo $comment["text"]; ?></p>  

  </li>                        
                          </div>



                    <?php endforeach; ?>

                    </div>

                </div>
            </div>
        </div>
        </div>

    </div>
    <?php endforeach;?>

</div>
<?php include "footer.php" ?>
