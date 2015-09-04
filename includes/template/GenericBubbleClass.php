<?php
/**
 * Created by PhpStorm.
 * User: Kendall
 * Date: 7/16/2015
 * Time: 7:03 AM
 */

namespace includes\template;


abstract class GenericBubble
{
    public $title;

    abstract protected function body();

    public function render()
    {
        ?>
        <div class="generic-bubble-wrapper">
            <div class="generic-bubble-header"><h2><?php echo $this->title; ?></h2></div>
            <?php $this->body(); ?>
        </div>
        <?PHP
    }
}