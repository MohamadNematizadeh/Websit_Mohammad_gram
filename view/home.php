
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
                            <label for="exampleFormControlTextarea1" class="form-label">انتشار پست</label>
                           
                            <div class="d-flex justify-content-evenly">      
 <textarea class="form-control" name="captions" id="exampleFormControlTextarea1" rows="3"></textarea>

</div>

                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    
                   <button class="btn btn-primary" type="submit" form="newpostform"> انشار پست جدید </button>
                   <button type="button" class="btn btn-light mt-3"><span class="pq6dq46d kb5gq1qc pfnyh3mw oi9244e8"><svg fill="currentColor" viewBox="0 0 24 24" width="1em" height="1em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 fxtw5amg rgmg9uty b73ngqbp"><g fill-rule="evenodd" transform="translate(-444 -156)"><g><path d="M113.029 2.514c-.363-.088-.746.014-1.048.234l-2.57 1.88a.999.999 0 0 0-.411.807v8.13a1 1 0 0 0 .41.808l2.602 1.901c.219.16.477.242.737.242.253 0 .508-.077.732-.235.34-.239.519-.65.519-1.065V3.735a1.25 1.25 0 0 0-.971-1.22m-20.15 6.563c.1-.146 2.475-3.578 5.87-3.578 3.396 0 5.771 3.432 5.87 3.578a.749.749 0 0 1 0 .844c-.099.146-2.474 3.578-5.87 3.578-3.395 0-5.77-3.432-5.87-3.578a.749.749 0 0 1 0-.844zM103.75 19a3.754 3.754 0 0 0 3.75-3.75V3.75A3.754 3.754 0 0 0 103.75 0h-10A3.754 3.754 0 0 0 90 3.75v11.5A3.754 3.754 0 0 0 93.75 19h10z" transform="translate(354 158.5)"></path><path d="M98.75 12c1.379 0 2.5-1.121 2.5-2.5S100.129 7 98.75 7a2.503 2.503 0 0 0-2.5 2.5c0 1.379 1.121 2.5 2.5 2.5" transform="translate(354 158.5)"></path></g></g></svg>ویدیو</span>
</button>
<button type="button" class="btn btn-light mt-3"><span class="pq6dq46d kb5gq1qc pfnyh3mw oi9244e8"><span class="pq6dq46d kb5gq1qc pfnyh3mw oi9244e8"><svg fill="currentColor" viewBox="0 0 24 24" width="1em" height="1em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 j58f7537 rgmg9uty b73ngqbp"><g fill-rule="evenodd" transform="translate(-444 -156)"><g><path d="m96.968 22.425-.648.057a2.692 2.692 0 0 1-1.978-.625 2.69 2.69 0 0 1-.96-1.84L92.01 4.32a2.702 2.702 0 0 1 .79-2.156c.47-.472 1.111-.731 1.774-.79l2.58-.225a.498.498 0 0 1 .507.675 4.189 4.189 0 0 0-.251 1.11L96.017 18.85a4.206 4.206 0 0 0 .977 3.091s.459.364-.026.485m8.524-16.327a1.75 1.75 0 1 1-3.485.305 1.75 1.75 0 0 1 3.485-.305m5.85 3.011a.797.797 0 0 0-1.129-.093l-3.733 3.195a.545.545 0 0 0-.062.765l.837.993a.75.75 0 1 1-1.147.966l-2.502-2.981a.797.797 0 0 0-1.096-.12L99 14.5l-.5 4.25c-.06.674.326 2.19 1 2.25l11.916 1.166c.325.026 1-.039 1.25-.25.252-.21.89-.842.917-1.166l.833-8.084-3.073-3.557z" transform="translate(352 156.5)"></path><path fill-rule="nonzero" d="m111.61 22.963-11.604-1.015a2.77 2.77 0 0 1-2.512-2.995L98.88 3.09A2.77 2.77 0 0 1 101.876.58l11.603 1.015a2.77 2.77 0 0 1 2.513 2.994l-1.388 15.862a2.77 2.77 0 0 1-2.994 2.513zm.13-1.494.082.004a1.27 1.27 0 0 0 1.287-1.154l1.388-15.862a1.27 1.27 0 0 0-1.148-1.37l-11.604-1.014a1.27 1.27 0 0 0-1.37 1.15l-1.387 15.86a1.27 1.27 0 0 0 1.149 1.37l11.603 1.016z" transform="translate(352 156.5)"></path></g></g></svg> عکس</span>
</button>
                </div>
            </div>
        </div>

<!-- left side -->
        

                </div>

            </div>
        </div>

    </div>

<!-- show posts -->
<?php foreach ($posts_array as $post): ?>
  <div class="d-flex justify-content-evenly mt-4">      
        <div class="col-6">
            <div class="card ">
                <div class="card-header">
                    <div class="row" >
                        <div class="col-1 " >

                            <img class="rounded-pill" src="<?php echo $post["image"]; ?>" width="75" height="75" class="img-fluid"  alt="...">

                        </div>
                        <div class="col-12">
                            <p><?php echo $post["first_name"];?> </p>
                               <small> <?php echo time2str($post["time"]);?>
                               </small> </p>
                               <button type="button" class="btn btn-outline-primary">دنباله می کنم</button>

                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <h5>
                    <?php echo $post["caption"]; ?>
</h5>
                    <img  src="<?php echo $post["imaged"]; ?>" class="img-fluid"  alt="...">
                </div>
                <div class="card-footer">
                <button class="wpO6b" type="button"><div class="QBdPU B58H7"><svg aria-label="Like" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path></svg></div><div class="QBdPU rrUvL"><span class=""><svg aria-label="Like" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path></svg></span></div></button>
                    <button type="button" class=" btn btn-outline-primary " data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $post["id_post"];?>" aria-expanded="false" aria-controls="collapseExample">
                        <i class="far fa-comment"></i> 
                    </button>
                    <button type="button" class="btn btn-outline-danger">
                    <i class="far fa-thumbs-up "></i><span class="badge bg-secondary"><?php echo $post["likes"]["count"];?></span>

                    </button>
                    <div class="collapse" id="collapse<?php echo $post["id_post"];?>">

                    <div class="list-group">
                    <div class="card card-header mt-2">
                      
                            <textarea class="form-control" name="bio"  placeholder="کامنت خود را بنویسید" rows="1"></textarea>
                            <div class="col-12">
                          <button type="submit" class="btn btn-primary mt-3"> <i class="far fa-comment"></i> ثبت پیام</button>
                          </div>
                          </div>
                          <?php foreach ($post["comments"] as $comment): ?>
                            <ol class="list-group list-group-">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold"><?php echo $comment["first_name"];?></div>
      <?php echo $comment["text"];?>
    </div>
    <span class="badge bg-primary rounded-pill"><?php echo time2str($comment["time"]);?></span>
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
