<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
if (!empty($inPopup)):
    $view->extend('MauticCoreBundle:Default:slim.html.php');
endif;
?>

<div class="container-fluid">
    <?php echo $view['form']->form($form); ?>
</div>