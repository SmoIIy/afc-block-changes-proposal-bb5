<div class="container">
    <div class="row">
        <div class="col">
            <img src="<?php echo get_sub_field('name-of-acf-block-field') ?>" alt="">
        </div>
        <div class="col">
            <p><?php echo wp_kses_post ( get_sub_field('name-of-acf-block-text-field') ); ?></p>
        </div>
    </div>
</div>
