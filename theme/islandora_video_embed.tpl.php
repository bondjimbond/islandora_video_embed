<?php
/**
 * @file
 * Template file for the Islandora Video Embed module.
 *
 * Available variables:
 *   $collapsed string
 *     The string 'collapsed' or ''.
 *   $csv_link string
 *     The link to the CSV file.
 */
?>
<fieldset class="islandora collapsible <?php print $collapsed; ?>">
  <legend><span class="fieldset-legend"><?php print t('Embed code'); ?></span></legend>
  <div class="fieldset-wrapper"><div id="islandora-video-embed-code"><canvas id="islandora-video-embed"></canvas></div>
</fieldset>
