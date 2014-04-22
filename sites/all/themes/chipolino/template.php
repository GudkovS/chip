<?php

function chipolino_form_alter( &$form, &$form_state, $form_id )
{
    // add placeholder on search block form
    if (in_array( $form_id, array( 'search_block_form'))) {
        $form['search_block_form']['#attributes']['placeholder'] = t('Search on the site');
    }
}


/* set breadcrumb separator and element wrapper */
function chipolino_breadcrumb($variables) {
    $sep = '<span class="br-sep">'.' &gt; '.'</span>';
    if (count($variables['breadcrumb']) > 0) {
        foreach ($variables['breadcrumb'] as $key => $value) {
            $variables['breadcrumb'][$key] = '<span class="br-wrap">'.$value.'</span>';
        }
        return implode($sep, $variables['breadcrumb']);
    }
    else {
        return t("Home");
    }
}


/**
 * Implements template_preprocess_field().
 */
function chipolino_preprocess_field(&$vars) {

   // dpm($vars);

    /*
    if ($vars['element']['#entity_type'] == 'field_collection_item') {
        unset($vars);
    }
    */

    /*
     if ($vars['element']['#field_name'] == 'field_my_custom_field') {
        $vars['items'][0]['#markup'] = "I changed the output of my field!";
    }
    */
}