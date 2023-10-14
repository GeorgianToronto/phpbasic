<?php include_once 'db.php';?>
<?php require("includes\myheader.php");?>
    <main class="container">
      <section class="form-row row justify-content-center">
        <h1>List of enrolled students</h1>
	    <div class="row">
		    <table class="table">
        <?php
          // Define your SQL query to retrieve records
          $sqlr = 'SELECT * FROM enrolled';
          // Execute the query
          $result = mysqli_query($conn, $sqlr);
        ?>
        <!-- table headings -->
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Course Hours</th>
        </tr>
        <!-- displaying records -->
        <?php
          foreach($result as $key => $res){
            echo "<tr>";
            echo "<td>".$res['fname']."</td>";
            echo "<td>".$res['lname']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['phone']."</td>";
            echo "<td>".$res['coursehours']."</td>";
            echo "</tr>";
          }
        ?>
		</table>
	 </div>
   </div>
	</form>
       </div>
	</section>
    </main>
<?php require("includes\myfooter.php");?>
  </body>
</html>