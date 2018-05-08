<div class="entry">
    <!--If no results are found-->
    <h1>
        <?php
         if(ICL_LANGUAGE_CODE<>"en"){
          esc_html_e('No se encontraron resultados.','Divi');
        }else{
          esc_html_e('No results found.','Divi');
        }
         ?>
    </h1>

    <p>
        <?php
        //if (function_exists('relevanssi_didyoumean')) {
        //    relevanssi_didyoumean(get_search_query(), "<strong>¿Usted quiso decir?: ", "</strong>", 5);
        //} ?>
    </p>
</div>
<!--End if no results are found-->
