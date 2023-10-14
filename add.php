<!--Including header-->
<?php require("includes\myheader.php");?>
    <main class="container">
      <section class="form-row row justify-content-center">
        <form class="form-horizontal col-md-6 col-md-offset-3" method="post" action="db.php">
          <h1>Welcome to the course enrollment</h1><br>
          <div class="form-group">
            <label for="fnameid" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
              <input type="text" name="fname" class="form-control" id="fnameid">
            </div>
          </div>
          <div class="form-group">
            <label for="lname" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
              <input type="text" name="lname" class="form-control" id="lnameid">
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="emailid">
            </div>
          </div>
          <div class="form-group">
          <label for="phone" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
            <input type="tel" name="phone" class="form-control" id="phone" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" placeholder="123 456 7890">
            </div>
          </div>
          <div class="form-group">
          <label for="coursehourid" class="col-sm-2 control-label">Course Hours</label>
            <div class="col-sm-10">
            <select name="coursehours" class="form-control" id="coursehourid">
            <option>Select Course Hours</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="25">25</option>
            </select>
            </div>
          </div>
          <br><br>
            <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Submit">
            <input type="reset" class="btn btn-dark reset"  value="Clear">
	       </form>
</section>
    </main>
<!--Including footer-->
<?php require("includes\myfooter.php");?>
  </body>
</html>