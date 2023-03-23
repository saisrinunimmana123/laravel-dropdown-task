<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
 <!-- <script
          src="https://code.jquery.com/jquery-3.6.3.min.js"
          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
          crossorigin="anonymous">
        </script> -->
<!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>  
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  

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
      
         
            
            
                    
                         <div class="header">
                           <!--  <button style="background: blue"><a href="http://localhost/newproject/blog/public/edit" style="color: white !important">Homepage</a></button> -->
                          <h2></h2>
                          </div>
                         
                       

 <div> 
                           
                            <h2 class="h2"> 

                       
                           
                           <span style="margin-left:10px">Start-Date: <input type="text"  name="startdate" id="datepicker" style="height:20px; font-size:15px"></span>
                           <span style="margin-left:10px">End-Date: <input type="text" name="enddate" id="datepicker1" style="height:20px;font-size:15px"></span>
                       
                               <button  class="btn btn-success" id="submit"  style=" padding-top:0px; margin-left:105px"><span>submit</span></button>
                    
                        </h2>
                 <table class="table table-striped table-hover  border"  >
                 <thead style="background: pink">
                  <tr><th>Id</th>
                     <th></th>
                   <th>Start_date</th>
                  
                 
                 </tr>
                </thead>
                 <tbody id="ajax">
                     
              </tbody>
      </table>
                       
                      </div>
                    
                         </div>

         
           

     </body>
     <script>
   $(document).ready( function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker1" ).datepicker();
  })
</script><script>
    $("#submit").click(function(){
      console.log(123);
      var startdate=$("#datepicker").val();
      var enddate=$("#datepicker1").val();
     
      $.ajax({
        url:"{{url('date')}}",
        type:"get",
        data:{
          startdate:startdate,enddate:enddate
        },
        success:function(data){
          console.log(data);
          $("#ajax").empty();
           var tbbody = "";
          for(var i=0;i< data.length;i++){
            tbbody += "<tr>";
              tbbody += "<td>"+ data[i].id +"<td>";
                tbbody += "<td>"+ data[i].department_id +"<td>";
                    tbbody += "<td>"+ data[i].employee_type_id +"<td>";
                        tbbody += "<td>"+ data[i].work_location_id +"<td>";
                            tbbody += "<td>"+ data[i].start_date +"<td>";
                tbbody += "<tr>";

          } $("#ajax").html(tbbody);
        },
        error:function(data){
          console.log(data);
        }
      })
    });
 
</script>
</html>
