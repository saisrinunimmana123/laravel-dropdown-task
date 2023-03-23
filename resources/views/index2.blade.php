<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
         <script
          src="https://code.jquery.com/jquery-3.6.3.min.js"
          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
          crossorigin="anonymous">
        </script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



                  <!--  index2.js files -->
      
   <style>
    body{
      margin: 10px 10px 10px 10px;
    }
   </style>
         
     
    

       <title>Laravel</title>
</head>

<body>

   
<button ><a href="http://localhost/newproject/project1/public/date">search</a></button>    
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
             @foreach($sales as $show3)
              <tr style="border:1px solid black">
               <td>{{$show3->id}}</td>
               <td>{{$show3->company_id}}</td>
               <td>{{$show3->fname}}</td>
               <td>{{$show3->lname}}</td>
               <td>{{$show3->mname}}</td>
               <td>{{$show3->last_four_ssn}}</td>
               <td>{{$show3->date_of_birth}}</td>
               <td>{{$show3->start_date}}</td>
               <td>{{$show3->gender}}</td>
               <td>{{$show3->title}}</td>
              
                  
              </tr>
             @endforeach
         </tbody>
      </table>
</div>

</body>
</html>
