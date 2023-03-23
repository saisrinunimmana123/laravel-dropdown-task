   
   $(document).ready( function() {
    
    
var dateTypeVar=$( "#datepicker" ).datepicker('getDate');
   $.datepicker.formatDate('yy-mm-dd', dateTypeVar);
   var dateTypeVar2= $( "#datepicker1" ).datepicker('getDate');
  $.datepicker1.formatDate('yy-mm-dd', dateTypeVar2);
  })

