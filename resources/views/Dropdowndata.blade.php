<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>



     
       <!-- -->
       <style>
form{
  border:1px solid #cdcaca;
 
}
body{
   
}
.header{
  height:60px;
  width:100% !important;
  border:1px solid #cdcaca;
   background:#f5f5f5;
   padding-top: 5px;
   padding-left: 10px;
}

.h2{
  padding:5px 0px 0px 10px;

}



label{
  padding :5px;
}
select{
  margin-bottom: 15px;
}
#RequestType{
  margin-right:10px;
  font-size: 15px;
}
.btn1{
  margin-left: 475px;
  padding-top:2px;
}


span{
  font-size:20px; 
}
input{
  font-size:10px;
}



       </style>
    </head>
     <body>
      
         
             <form method="post" action="selectdropdowndata" class="">
               {{csrf_field()}}
                    
                         <div class="header">
                           <!--  <button style="background: blue"><a href="http://localhost/newproject/blog/public/edit" style="color: white !important">Homepage</a></button> -->
                          <h2></h2>
                          </div>
                         
                       

 <div> 
                           
                            <h2 class="h2"> 

                       
                              
                    
                        </h2>
                         <div class="table-responsive " id="tab">        


                                                                                                                                                                                                                                                                                                                 
      <table class="table table-striped table-hover  border"  >
         <thead style="background: pink">
           <tr><th>Id</th>
            <th>Companyid</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>MiddleName</th>
            <th>Last_Four_ssn</th>
            <th>Date_Of_Birth</th>
            <th>Start_Date</th>
            <th>Gender</th>
            <th>Title</th>
            
          </tr>
         </thead>
         <tbody>
           
         </tbody>
      </table>
                        
                      </div>
                    
                         </div>

           </form>  
     </body>
</html>
<script>
   $( function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker1" ).datepicker();
  } );
</script>