<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>


<?php include_once './parts/header.php';   ?>

    
        
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">
    <img src="images/6.jpg"  width="350" height="200"  >    
    <h1 class="display-4 fw-normal">أربح مع علي</h1>
    <p class="lead fw-normal"> متبقي على فتح التسجيل</p>
    <h3 id="countdown"></h3>
    <p class="lead fw-normal"> للسحب على  نسخة مجانية من برنامج</p>
    
    </div>


    <div class="cotainer">
    <h4>للدخول في السحب اتبع التالي :</h4>    
    <ul class="list-group list-group-flush">
        <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور أعلاه</li>
        <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبه </li>
        <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل  حيث سنقوم بتسجيل اسمك وايميلك</li>
        <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البانات بشكل عشوائي</li>
        <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامنابا</li>
    </ul>
    </div>
    </div>

  
    

    <div class="container"> 
    <div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

  <form  action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
  <h4>الرجاء إدخال معلوماتك</h4>  

  <div class="mb-3">
    <label for="firstName" class="form-label">الأسم الأول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>" >
    <div  class="form-text "> </div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الأسم الأخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
    <div  class="form-text"></div>
  </div>
  

  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email ?>">
    <div  class="emailHelp"></div>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
    </div>

   
   

<div class="loader-con">
<div id="loader">
    <canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>


<div class ="d-grid gap-2 col-6 mx-auto my-5">
    <button type="button" id="winner" class="btn btn-primary" >
    اختيار الرابح 
    </button>
</div>



<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
            
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']). ' ' . htmlspecialchars($user['lastName']). '<br> '  ?></h1>
            <?php endforeach; ?>
      </div>
      
    </div>
  </div>
</div>


<?php echo htmlspecialchars($user['email']) ?></P>


<?php include_once './parts/footer.php'; ?>