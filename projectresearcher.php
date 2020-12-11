<?php
include('adminheader.php');
?>


<div class="row">
	<div class="col-md-6"></div>
	<div class="col-md-6" style="color: blue;text-align: right; padding-left: 100px;font-size: 20px">
		
	</div>

</div>
<div class="container-fluid">
	
<div class="row">
	<div class="col-md-2 ml-3 mt-3" style="background-color: #0000a0; border-radius: 20px;text-align: left;">
		<?php include ('leftsidebar.php'); ?>
	</div>

	<div class="col-md-9 alert alert-primary ml-4 mt-4" style="border-radius: 20px">
		<h4>Search for your project topics with us by categories</h4>
		
		

        <?php
           $faculty=[];
           $conn = new mysqli('localhost', 'root', '', 'gsprojectdbm');
           $query="SELECT * FROM faculty";
           ($qr=$conn->query($query));

    if($qr->num_rows > 0){
        while($row=$qr->fetch_assoc()){
            $faculty[$row['faculty_id']]=$row['faculty_name'];
        }
    }
    ?>

            <form action="listofproject.php" method="post">
            	<div class="row form-inline">
            		<div class="col-md-4">
			<label for="faculty">Faculty</label>
       <select name="faculty_id" id="faculty_id" class="form-control">
                    <option value='' class="form-control">--Select--</option>
                        <?php if(!empty($faculty)){
                            foreach($faculty as $id=>$name){
                                echo "<option value='$id'>$name</option>";
                            }
                        } ?>
                    </select>
            </div>

                <div class="col-md-4 mt-4">
                    <select name="dept_id" id="dept_id" class="form-control">
                    <option value=''>--Select Faculty First--</option>
                    </select>
                </div>
            
            <div class="col-md-4 mt-4">      
          <input type="text" name="department" value="" class="form-control" autocomplete="off" list="department-list">
          <datalist id="department-list">
          	<option value=" computer Engineering"></option>
          	<option value="computer science"></option>

          </datalist>
                
            </div>
              </div>


              <div class="mt-5">
        <button type="search" name="submit" value="submit" class="btn btn-primary form-control">Search</button>
            </div>

          </form>
	</div>

</div>
</div>

<script src="js/jquery.js"></script>
    <script type="text/javascript">
        $("#faculty_id").change(function(){
            get_department();
        });    
        

        function get_department(){
            var faculty_id=$("#faculty_id").val();
            $.ajax({
                url:'info.php',
                type:'get',
                data:{"faculty_id":faculty_id},
                success:function(data){
                    // alert(data);
                  var department_obj=JSON.parse(data);
                  var department_string='';
                  $.each(department_obj,function(k,v){
                    department_string+="<option value='"+v.dept_id+"'>"+v.dept_name+"</option>";
                  })

                 //s $("#dept_id").html('');
                  $("#dept_id").html(department_string);
                 // alert(department_string);    
                },
                error:function(){
                    alert("Sorry o, Problem dey o");
                }
            });
        }
    </script>

<div class="row">
	<div class="col">
<?php include ('adminfooter.php'); ?>
</div>
</div>

</div>