<?php
/**
 * User: Kendall
 * Date: 9/24/2015
 * Time: 8:22 PM
 */

namespace includes\pages\products;


use includes\template\TemplateBase;

class SearchPage extends TemplateBase
{

    /**
     * Template constructor
     * @param string $title Title of the web page
     * @param bool $noTemplate If set to true then no menus or sidebars will be used. It will be a single page.
     * @param bool $maintenance If set it wont redirect when the site is in maintenance mode
     */
    function __construct($title)
    {
        parent::__construct($title);
        $this->add_css('/stylesheets/searchPage.css');
    }

    protected function body()
    {
        // TODO: Implement body() method.
    }

    protected function side_menu()
    {
        echo '<div class="menu-top"><a href="#" >Start Selling Today</a></div>';

        ?>
        <div>
            <div>
                <h2>Refine Search</h2>
            </div>

<!--            Price-->
            <div>
                Price: <br />
                <input type="text" name="txtMin" placeholder="Min" />
                 to
                <input type="text" name="txtMax" placeholder="Max" />
            </div>

<!--            Condition-->
            <div>
                Condition: <br />
                <div>
                    <input name="cbxNew" id="cbxNew" type="checkbox" />
                    <label for="cbxNew">New</label>
                </div>
                <div>
                    <input name="cbxUsed" id="cbxUsed" type="checkbox" />
                    <label for="cbxUsed">Used</label>
                </div>
                <div>
                    <input name="cbxRefurbished" id="cbxRefurbished" type="checkbox" />
                    <label for="cbxRefurbished">Refurbished</label>
                </div>
            </div>
        </div>
        <?php
    }
}