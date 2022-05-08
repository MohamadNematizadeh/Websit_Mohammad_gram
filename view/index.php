<?php include "header.php"; ?>

<div class="container">
    <div class="d-flex justify-content-evenly">
        

        <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
            <div class="card shadow border-0 rounded-3">

            
                <div class="card-body">
                    <form method="post" action="">
                        <div class="mb-3">
                            <label class="form-label">نام کاربری</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">گذرواژه</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-check mb-3 text-right">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck1">مرا به خاطر بسپار</label>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">ورود</button>
                        </div>

                    </form>
                    <a href="#" >
                        <p class="text-center">
                    گذرواژه خود را فراموش کردی؟
                        </p>
                    </a>
                    <hr>
<!-- Button trigger modal -->
<div class="w-100 text-center mt-2">
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    ثبت نام
</button>
                        </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <div>
                            <h5 class="modal-title" id="exampleModalLabel">نام نویسی</h5>
                            <p class="text-secondary">سریع و ایمن</p>
                        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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
  <div class="col mt-2">
    <input name="email" type="email" class="form-control" placeholder="ایمیل خود را وارد کنید" aria-label="">
  </div>
</div>
<div class="row g-3 mt-1">
  <div class="col ">
    <input  name="account-name" type="text" class="form-control" placeholder="نام کاربری" aria-label="First name" >
  </div>
  <div class="col">
    <input name="mobile-number" type="text" class="form-control " id="inputPassword4" placeholder=" ---------989+">

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

