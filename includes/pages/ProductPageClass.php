<?php

namespace includes\pages;

use includes\menus\NewMainMenu;
use includes\modules\WeeklyContributors;
use includes\template\TemplateBase;

class ProductPage extends TemplateBase
{
    function __construct()
    {
        parent::__construct('Standard Base');
        $this->add_css('/stylesheets/products.css');
    }

    protected function body()
    {
        // HTML
        ?>
        <!--        Header-->
        <div class="top-header">
            <h3>Sell unlimited products on the only available <span>0% commission</span> platform around. Post more, sell
                more, and make a higher percentage per sale...</h3>
        </div>

<!--        Row one Images and overview-->
        <div class="row-one-wrapper">
<!--            Images Area-->
            <div class="images-wrapper">
                <div class="images-content">
                    <img src="/images/placeholder-product-image-large.png" />
                    <div class="images-slide-wrapper">
                        <div class="images-slide-content">
                            <img src="/images/placeholder-product-image-large.png" />
                            <img src="/images/placeholder-product-image-large.png" />
                            <img src="/images/placeholder-product-image-large.png" />
                            <img src="/images/placeholder-product-image-large.png" />
                        </div>
                    </div>
                </div>
            </div>

            <!--            Overview area-->
            <div class="overview-wrapper">
                <h2>Name of Some Product</h2>
                <div class="overview-vendor">
                    Sold by: <a href="#">Someone</a>
                </div>
                <div>
                    <div class="overview-rating-wrapper">
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <a href="#">00 reviews</a> -
                        <span><a href="#">0 questions answered</a> </span>
                    </div>

                    <div class="overview-price-wrapper">
                        <div class="overview-option-col-left">
                            <span class="overview-price">$000.00</span><span class="overview-currency">USD</span>
                        </div>
                        <div class="overview-price-col-right">
                            <a href="#">Contact Owner</a>
                        </div>
                    </div>

                    <div>
                        <span class="overview-stock">In Stock</span> - 00 still available<br>
                        Items condition: <span class="overview-condition">New</span>
                    </div>

                    <div class="overview-options-wrapper">
                        <div class="overview-option-col-left">
                            <input name="txtQuantity" type="number" step="1" id="txtQuantity" />
                            <label for="txtQuantity">Quantity</label><br>
                            <select name="drpColor" id="drpColor">
                                <option value="Red">Red</option>
                                <option value="Blue">Blue</option>
                                <option value="Green">Green</option>
                            </select>
                            <label for="drpColor">Color</label>
                        </div>
                        <div class="overview-option-col-right">
                            <select name="drpSize" id="drpSize">
                                <option value="Small">Small</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                            </select>
                            <label for="drpSize">Size</label>
                        </div>
                    </div>

                    <div class="overview-overview-wrapper">
                        <h3>Overview</h3>
                        <ul>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                        </ul>
                    </div>

                    <div class="overview-cart-wrapper">
                        <input type="submit" name="btnAddToCart" value="Add to Cart" />
                    </div>
                </div>
            </div>

        </div>

<!--        Product Description-->
        <div class="product-description-wrapper">
            <h2>Product Description</h2>
            <div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies porttitor pharetra. Nunc
                    elementum at urna ac rutrum. Etiam eu vestibulum augue, in rutrum orci. Morbi sit amet est lacinia odio
                    sollicitudin tempus. Vestibulum rhoncus pharetra commodo. Morbi eget congue orci. Vestibulum tempor
                    pellentesque hendrerit. In dictum porta quam. Proin quis dictum lacus. Nulla volutpat est ut tempus
                    viverra. Proin pellentesque ligula elementum, rutrum ipsum sed, condimentum velit. Donec bibendum
                    porttitor mollis. Ut vel eros tincidunt, fringilla nisl et, facilisis odio. Donec ac lacus ipsum. Mauris
                    felis augue, venenatis a posuere sed, semper in tortor. Aenean non placerat tortor.
                </p>

                <p>
                    Maecenas tempus auctor mattis. Suspendisse maximus nisi ut blandit malesuada. Fusce at feugiat neque,
                    vitae lobortis lacus. Donec laoreet nisl quis ultrices fermentum. Integer auctor sit amet ex sed
                    vehicula. Nam pulvinar suscipit mollis. Curabitur pharetra tincidunt feugiat. Curabitur malesuada, elit
                    in tempor egestas, turpis odio interdum enim, quis gravida mauris ante vel diam. Aenean gravida diam
                    purus, id eleifend sem dictum eu. Sed sagittis odio dui, sit amet consequat tellus aliquam id.
                </p>

                <p>
                    Mauris iaculis felis finibus viverra rhoncus. Nulla ac vulputate ligula. Vestibulum ante ipsum primis in
                    faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in mattis enim. Mauris eleifend posuere
                    ultricies. Morbi ut porta nibh. Nullam ut vulputate leo. Sed a ex ut lectus accumsan dapibus. Proin
                    luctus, diam ac convallis finibus, nulla quam tempus lectus, nec congue augue sem vel justo. Aliquam
                    erat volutpat. Nullam quis tincidunt quam. In hac habitasse platea dictumst.
                </p>

                <p>
                    In ornare at quam id pretium. Sed at rhoncus lorem. Aliquam mollis, neque quis ultricies ullamcorper,
                    sapien erat egestas ligula, nec pretium est justo sed lorem. Proin vitae risus non est tristique
                    vehicula. Mauris sit amet est eget nisi suscipit consectetur vel at lectus. Nulla sed ante lobortis,
                    euismod tortor dapibus, sodales eros. Proin ac sagittis nulla, et semper tellus. Interdum et malesuada
                    fames ac ante ipsum primis in faucibus. In ullamcorper felis non ultricies posuere. Nullam lobortis elit
                    non dui ullamcorper sagittis. Quisque cursus, tortor eu ullamcorper porttitor, eros felis tristique
                    orci, quis volutpat urna ex eu lorem.
                </p>

                <p>
                    Mauris vulputate dui at eros lobortis, a suscipit metus bibendum. Etiam nec nisi urna. Sed sodales
                    vulputate augue, tincidunt mollis purus finibus vel. Fusce semper finibus interdum. Integer consequat
                    feugiat eros quis porta. Phasellus quis purus non tellus pulvinar mollis. Maecenas eu neque a augue
                    sollicitudin sollicitudin. Ut aliquet tortor quam. Etiam non lectus non eros sagittis faucibus ac ut
                    lectus. Nulla velit turpis, varius vel neque eu, viverra feugiat massa.
                </p>
            </div>
        </div>

<!--        Row two-->
        <div>
            <div>
                <h2>Product Details</h2>
                <span>Title:</span><span>product detail line.</span>
                <span>Title:</span><span>product detail line.</span>
                <span>Title:</span><span>product detail line.</span>
                <span>Title:</span><span>product detail line.</span>
                <span>Title:</span><span>product detail line.</span>
                <span>Title:</span><span>product detail line.</span>
            </div>
            <div>
                <h2>What is in the box?</h2>
                <ul>
                    <li>Item</li>
                    <li>Item</li>
                    <li>Item</li>
                    <li>Item</li>
                </ul>
            </div>
        </div>
    <?php
    }

    protected function side_menu()
    {
        //Show menu
        echo '<div class="menu-top"><a href="#" >Start Selling Today</a></div>';
        $menu = new NewMainMenu();
        $menu->render();

        //Contributors
        $contributors = new WeeklyContributors();
        $contributors->render();
    }

}