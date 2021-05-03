
<hr>
<h4 class="page-info">Junior dev project</h4>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script>
<script>
$(document).ready(function(){
    $("#type").on('change', function(){
        $(".form-control").hide()
        $("#" + $(this).val()).fadeIn(700);
    }).change();
})
</script>

  </body>
</html>