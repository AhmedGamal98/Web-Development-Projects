        <script src="<?php echo $js; ?>jquery-1.12.1.min.js"></script>
		<script src="<?php echo $js; ?>bootstrap.min.js"></script>
        <script src="<?php echo $js; ?>front.js"></script>
        <script src="<?php echo $js; ?>moment.min.js"></script>
        <script src="<?php echo $js; ?>daterangepicker.js"></script>
        <script src="<?php echo $js; ?>global.js"></script>
        <script>
  var category ;
  category = document.getElementById("categoryid");
  category.addEventListener("change" , function(){ Mychange1( category.value );    }, true);

  function Mychange1( categoryid  ) {
  $.ajax({
      url: 'tag.php',
      type: 'post',
      data: {category:categoryid},
      dataType: 'json',
      success:function(response){
          var len = response.length;

          $("#tagid").empty();
          $("#tagid").append("<option value='0'>choose the Tag</option>");
          for( var i = 0; i<len; i++){
              var tag_id = response[i]['tag_id'];
              var tag_name = response[i]['tag_name'];
              $("#tagid").append("<option value='"+tag_id+"'>"+tag_name+"</option>");
          }
      }
  });
  }
</script>
	</body>
</html>