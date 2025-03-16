<?php
/**
 * Block Name: Form Block
 *
 * This is the template that displays a gravity form.
 */

  $main_title = get_field('main_title');
  $text_colour = get_field('main_title_colour');

  $title = get_field('title');
  $form = get_field('form');

?>

<div class="form_block flex flex-col py-4 px-5 md:px-11 md:py-8 md:flex-row">
    <div class="component_left text-sm pb-4 md:pb-0 md:pt-2 md:w-1/3 md:text-base">
      <h4 class="main_heading !font-bold leading-snug" style="color:#<?php echo $text_colour; ?>"><?php echo $main_title; ?>
    </div>
    <div class="component_right flex flex-col gap-4 md:w-2/3 md:gap-6">
        <h2 class="title pb-10 !text-black/80 leading-snug md:pb-16 md:text-xxl"><?php echo $title; ?></h2>
        <?php echo gravity_form($form['id']); ?>
    </div>
</div>