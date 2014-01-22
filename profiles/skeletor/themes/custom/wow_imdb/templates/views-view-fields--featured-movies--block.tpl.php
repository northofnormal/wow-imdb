<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

$title = $fields['title']->content;
$link = $fields['field_trailer_link_1']->content;
$poster = $fields['field_poster_image_1']->content;
$url = $fields['field_trailer_link']-content;
?>

<div class="movie-wrapper">
    <div class="poster"> <?php print $poster; ?> </div>
    <div class="title"> <?php print $title; ?> </div>
    <div class="link"> <?php print $link; ?>  </div>
    
    <!-- almost there, it's got the url...but also <div>'s around it for why?? -->
</div>
