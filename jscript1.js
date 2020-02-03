  $(document).ready(function(){
          $("#Timeline").hide();
          $("#about").hide();
          $("#friendlst").hide();
          $("#editprofile").hide();
         
      
         $('#about1').click(function(){
             $('#Timeline').hide();
             $("#friendlst").hide();
             $('#about').show();
              $("#editprofile").hide();
         })
         
         $('#time1').click(function(){
             $("#about").hide();
             $("#friendlst").hide();
             $('#Timeline').show();
              $("#editprofile").hide();
         })
         
         $("#friends").click(function(){
             $("#friendlst").show();
              $("#Timeline").hide();
              $("#about").hide();
              $("#editprofile").hide();
         })
         $("#friends1").click(function(){
             $("#friendlst").show();
              $("#Timeline").hide();
              $("#about").hide();
              $("#editprofile").hide();
         })
         $("#friends2").click(function(){
             $("#friendlst").show();
              $("#Timeline").hide();
              $("#about").hide();
              $("#editprofile").hide();
         })
         $("#edit1").click(function(){
             $("#friendlst").hide();
              $("#Timeline").hide();
              $("#about").hide();
              $("#editprofile").show();
         })
         
         
         
  });
