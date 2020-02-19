require('./bootstrap');
 $(document).ready(function(){
            $('#Count Up').click(function(e){
            	type:'GET',
            	url:'{{url("/home")}}'
                success: function(result){
                  }});
   });