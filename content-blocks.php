<?php


if (have_rows('name-of-acf-block-group')):
  while (have_rows('name-of-acf-block-group')): the_row();

    $block_name = get_row_layout();



    echo '<section class="content-block '. $block_name .'">';

    switch (get_row_layout()) {

      case "test-block-1":
        require('blocks/test-block-1.php');
      break;
      case "test-block-2":
        require('blocks/test-block-2.php');
      break;
	  //repeat for all blocks in the /blocks folder


		
      default:
        break;
    }
    echo '</section>';
  endwhile;
endif;

?>
