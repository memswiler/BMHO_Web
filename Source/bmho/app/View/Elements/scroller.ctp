<ul id="scroller">
<?php
      for ( $imgId = 1; $imgId <= Configure::read('MyApp.scroller_count'); $imgId++ ) {
         $scrollerId = __('scroller') . $imgId;
         $scrollerKey= __('MyApp.') . $scrollerId;
         $scroller[$imgId] = Configure::read( $scrollerKey );
         $fn = $scroller[$imgId]; // get uploaded file name 
         if (eregi( '^.*(.jpg)|(.jpeg)$', $fn) || eregi( '^.*(.png)|(.png)$', $fn) ||
               eregi( '^.*(.gif)|(.gif)$', $fn) || eregi( '^.*(.bmp)|(.bmp)$', $fn) ) { 
            $fn = explode(".", $fn); // split into array around periods 
            $ext = array_pop($fn); // remove last element of array; set aside as extension 
            $fn = implode(".", $fn); // rejoin file name minus extension 
            //TODO: Make thumbnail?
            //code to make thumbnail 
            //$tn = "$fn.thumbnail.$ext"; // thumbnail name 
            //$fn = "$fn.$ext"; // file name rejoined with extension 
            $slug[$imgId] = $fn;
         }
?>
    <li><a href="<?php echo Router::Url( '/products/view/', true ) . $slug[$imgId]; ?>"><img src="<?php echo Router::Url( '/files/scroller/', true ) . $scroller[$imgId]; ?>" width="270" height="180" alt="<?php echo $slug[$imgId]; ?>"></a></li>
<?php    
    }
?>
</ul>

