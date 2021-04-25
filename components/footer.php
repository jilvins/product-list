
<hr>
<h4 class="page-info">Junior dev project</h4>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".form-control").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".form-control").hide();
            }
        });
    }).change();
});
</script>

  </body>
</html>