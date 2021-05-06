
<div class="footer">
<h4 class="page-info">Junior dev project</h4>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script>
<script>
$(document).ready(function(){
    $("#type").on('change', function(){
        $(".switchable").hide();
        $("#" + $(this).val()).fadeIn(700);
        $("#" + $(this).val()).prop('required',true);
    }).change();
})
</script>

  </body>
</html>