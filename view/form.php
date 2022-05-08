<?php   include "header.php";
       


?>
<div class="d-flex justify-content-around"><div class="card text-center col-md-6 mt-5">
  <div class="card-header">
  فرم ثبت نام
  </div>
 
  <div class="card-body ">
  <form action="../controller/di.php" method="post">
  <div class="row g-3">
  <div class="col ">
    <input  name="first-name" type="text" class="form-control" placeholder="نام" aria-label="First name" >
  </div>
  <div class="col">
    <input  name="last-name" type="text" class="form-control" placeholder="نام خانوادگی" aria-label="Last name">
  </div>
</div>
<div class="row">
  <div class="col mt-3">
    <input name="email" type="email" class="form-control" placeholder="ایمیل خود را وارد کنید" aria-label="">
  </div>
</div>

<div class="row g-3 mt-2">
  <div class="col ">
    <input name="password" type="password" class="form-control" placeholder="پسورد خود را وارد کنید" aria-label="First name">
  </div>
  <div class="col">
    <input name="-password" type="password" class="form-control" placeholder="پسورد خود را وارد کنید" aria-label="Last name">
  </div>
</div>


                        <div class="col-12 mt-4" >
                                <div class="input-group"  style="overflow:hidden" >
                                <span id="dtp1" class="input-group-text cursor-pointer" data-mds-dtp-guid="d6322030-c6e3-4324-a7b6-b280f644a32e" data-bs-original-title="" title="" data-mds-dtp-group="group1" data-from-date="true"> <i class="far fa-calendar-alt" style="color: #57606f;"></i> </span>
                                <input type="text" name="date-of-birth" data-name="dtp1-text" class="form-control" placeholder="تاریخ تولد">
    
                            </div>
                        </div>

        <button type="submit" class="btn btn-success mt-3">ذخیره</button>                        
  </div>
</div>
</form>
</div>







<?php include "footer.php"; ?>
