
      <?php include 'includes/header.php'; ?>       




	  <?php include 'connection.php'; ?>

 

        <div id="annon_head" style="padding-left:32px;">
          <h2><b>Registration Form</b></h2>
          <hr>
        </div>
		
		
	
	
	
	
	
	
	
  <div class="row">
  
    
	         
			
	<div class="col-md-12">
					
							

		<div class="container" >
			
			<div class="row" >
				
				<div class="col-md-12" style="min-width: 420px;padding-left:10%;padding-right:10%;">
					<div class="panel panel-default"style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thick; ">
						<div class="panel-heading"style="border-radius: 1.5em 1.5em 0em 0em;border-width: thick;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2 style="color:teal;"><b>NEW REGISTRATION</h2></b><hr style="border-width: thick;border-color:#3C7570;"></div>
						</div>
						<div class="panel-body">
						
						
					
						
						<!--------------------form header-------------------------------------------------------->
							
							
  
  <form action="new_form.php" method="post">
  
  
  <!----------------------------------------------1st line--------------------------------------------------------------------------------->
  <br>
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="name"  style="float:right;">Name:</label></div>
    <div class="col-md-9"><input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required ></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="roll"  style="float:right;">Roll No.:</label></div>
    <div class="col-md-9"><input type="text" name="roll" class="form-control" id="roll" placeholder="Enter your roll no." required ></div>
  </div>
  </div>
  
  
  
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="email"  style="float:right;">Email id:</label></div>
    <div class="col-md-9"><input type="email" name="email" class="form-control" id="email" placeholder="Enter your email id" required ></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="category"  style="float:right;">Category:</label></div>
    <div class="col-md-9"><select class="form-control " name="category" id="category">
	    <option>------Select category------</option>
		<option value="General">General</option>
        <option value="OBC">OBC</option>
        <option value="SC">SC</option>
        <option value="ST">ST</option>
      </select>
	</div>
  </div>
  </div>
  
  
  
  
 
	 
	 
 
  
  
  
  <!----------------------------------------------end of 1st line----------------------------------------------------------------------------------->
  
  
  
  
  
  <!------------------------------------------2nd line--------------------------------------------------------------------------->
     
	 
	 
	 
	 
	 
	 
	<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="course" style="float:right;">Course:</label></div>
    <div class="col-md-9"><select class="form-control " name="course" id="course" style="width:100%;">
	<option>----------Select course---------</option>
	<option value="B.tech">B.Tech</option>
	<option value="M.tech">M.Tech</option>
	<option value="Phd">Phd</option>
	<option value="M.sc">M.sc</option>
	</select>
	</div>
  </div>
  
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="semister"  style="float:right;">Semister:</label></div>
    <div class="col-md-9"><select class="form-control" name="semister" id="semister"  style="width:100%;">
        <option value="invalid">--------Select semister--------</option>
        <option value="1st semister">1st semister</option>
        <option value="2nd semister">2nd semister</option>
        <option value="3rd semister">3rd semister</option>
		<option value="4th semister">4th semister</option>
		<option value="5th semister">5th semister</option>
		<option value="6th semister">6th semister</option>
		<option value="7th semister">7th semister</option>
		<option value="8th semister">8th semister</option>
      </select>
	</div>
  </div>
  
  </div> 
	 
	 
	 
	 
	 <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="year"  style="float:right;">Year:</label></div>
    <div class="col-md-9"><select class="form-control" name="year" id="year" style="width:100%;">
        <option>--Select year--</option>
		<option value="1st year">1st year</option>
        <option value="2nd year">2nd year</option>
        <option value="3rd year">3rd year</option>
        <option value="4th year">4th year</option>
      </select>
	</div>
  </div>
  
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="branch"  style="float:right;">Branch:</label></div>
    <div class="col-md-9"><select class="form-control" name="branch" id="branch"  style="width:100%;">
                <option>------------select branch------------</option>
        <option value="cse">Computer Science And Engineering</option>
        <option value="ece">Electronics And Communication Engineering</option>
        <option value="eee">Electrical And Electronics Engineering</option>
		<option value="me">Mechanical Engineering</option>
		<option value="ce">Civil Engineering</option>
		<option value="bt">Biotechnology</option>
		<option value="math">Mathematics</option>
		<option value="phy">Physics</option>
		<option value="chem">Chemistry</option>
		<option value="sst">Humanities And Social Sciences</option>
      </select>
	</div>
  </div>
  
  </div> 
	 
	 
	 
	 
	 
	 
	
	  
 
	<!----------------------------------------end of 2nd line------------------------------------------------------------>
	
	<!--------------------------------------3rd line----------------------------------------------------------------->
	 




      <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="number"  style="float:right;">Mobile&nbspNo.:</label></div>
    <div class="col-md-9"><input type="text" name="number" pattern="[789][0-9]{9}" class="form-control" id="number" placeholder="Enter your mobile No." required></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="fname"  style="float:right;">Father's&nbspName:</label></div>
    <div class="col-md-9"><input type="text" name="fname" class="form-control" id="fname" placeholder="Enter your father's Name" required></div>
  </div>
  </div>
  
  
  
  
  
   <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-5"><label for="fnumber"  style="float:right;">Father's&nbspmobile&nbspNo.:</label></div>
    <div class="col-md-7"><input type="text" name="fnumber" pattern="[789][0-9]{9}" class="form-control" id="fnumber" placeholder="Enter your father's mobile number." required></div>
  </div>
  
  </div>
  
  
  
   <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-2"><label for="address"  style="float:right;">Residential&nbspaddress:</label></div>
    <div class="col-md-10"><input type="text" name="address" class="form-control" id="address" placeholder="Enter your residential address" required></div>
  </div>
  
  </div>


    <hr style="border-width: medium;border-color:#3C7570;">


     
	 
	 <div   style="text-align:center;color:#9E9EA7;" id="annon_head"><h2>Acedemic details</h2><hr style="border-width: medium;border-color:#3C7570;"></div>
	 
	 


	 
	
	<!-------------------------------------end of third line------------------------------------------------------------------------->
	<!------------------------------------acedemic and payment details---------------------------------------------------------------->
	<br>
	<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="10" style="float:right;">10th&nbsp(%/CGPA): </label></div>
    <div class="col-md-9"><input type="number" step="any" min="0" max="100" name="ten" class="form-control" id="10" placeholder="%age/CGPA" required></div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="12" style="float:right;">12th&nbsp(%): </label></div>
    <div class="col-md-9"><input type="number" step="any" min="0" max="100" name="twelve" class="form-control" id="12" placeholder="%age/CGPA" required></div>
  </div>
  
  </div>
  
  
  
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-4"><label for="mainroll" style="float:right;">JEE&nbspmain&nbsproll&nbspno.:</label></div>
    <div class="col-md-8"><input type="number" name="mainroll" class="form-control" id="mainroll" placeholder="JEE main roll no." required></div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="mainrank" style="float:right;">JEE&nbspmain&nbsprank: </label></div>
    <div class="col-md-9"><input type="number" name="mainrank" class="form-control" id="mainrank" placeholder="JEE main rank"></div>
  </div>
  
  </div>
  
  
  
  
   <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-4"><label for="advanceroll" style="float:right;">JEE&nbspadvance&nbsproll&nbspno.:</label></div>
    <div class="col-md-8"><input type="number" name="advanceroll" class="form-control" id="advanceroll" placeholder="JEE advance roll no." ></div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="advancerank" style="float:right;">JEE&nbspadvance&nbsprank: </label></div>
    <div class="col-md-9"><input type="number" name="advancerank" class="form-control" id="advancerank" placeholder="JEE advance rank"></div>
  </div>
  
  </div>
  
  
  
  
  
  
 
	
	
	
	
	
	<!---------------------------------------------------------------------------------------------------------------------------------->
	<!---------------------------------------------course registered-------------------------------------------------------------------->
	
	 
	
	
	







	
	<!----------------------------------------------------------------------------------------------------------------------------------->
	
	
	
	
	
	<div class="col-md-12">
	   <br>
	   
    <div style="padding-left:45%;">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
	
  </div>
  
  
  </form>
  

							
							
							
							
						<!----------------------------------------------------------------------------------------->	
						</div>
					</div>
				</div>
				
			</div>
		</div>
    </div>				
							
							
							
							
							
				
				
				
												
					
				
				
					
			
				
  
  
</div>






<?php include 'footer.php'; ?>
