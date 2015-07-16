<?php
/**
 * Created by PhpStorm.
 * User: Kendall
 * Date: 7/16/2015
 * Time: 7:12 AM
 */

namespace includes\modules;


use includes\template\GenericBubble;

class WeeklyContributors extends GenericBubble
{

    protected function body()
    {
        ?>
        <div class="contributor-header-sub"><h3>Updated Weekly</h3></div>
        <hr />
        <div class="contributor-card-wrapper">
            <div class="contributor-card">
                Some Name - <a href="#">Some Company Inc.</a><br />
                <a href="#">View Products</a>
            </div>
            <div class="contributor-card">
                Some Name - <a href="#">Some Company Inc.</a><br />
                <a href="#">View Products</a>
            </div>
        </div>
        <?php
    }


    function __construct()
    {
        $this->title = "Top Contributors";
    }
}