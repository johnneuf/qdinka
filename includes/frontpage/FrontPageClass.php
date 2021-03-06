<?php
/**
 * Kendall Holm
 * Created on 4/10/2015 at 8:07 AM
 * @email kendalldarkmere@gmail.com
 */


namespace includes\frontpage;


use includes\menus\NewMainMenu;
use includes\modules\WeeklyContributors;
use includes\template\TemplateBase;

class FrontPage extends TemplateBase {
    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/layout.css');
    }

    protected function body()
    {
        ?>
        <!--        Header-->
        <div class="top-header">
            <h3>Sell unlimited products on the only available <u>0% commission</u> platform around. Post more, sell
                more, and make a higher percentage per sale...</h3>
        </div>

<!--        Advertisement Area-->
        <div class="marketing-wrapper">
            <div class="marketing-image-wrapper">
                <img src="/images/temp/marketingTemp.jpg" />
            </div>
            <div class="marketing-content-wrapper">
                <div class="marketing-content">
                    <h2>Innovating the Future</h2>
                    As we step farther, and farther into the 21st century, innovation will become more and more a way of
                    life. Discover the top leading, most innovative, and influential consumer products available to-date!
                </div>
                <div class="marketing-button">
                    <a href="#">Start Growing Your Business</a>
                </div>
            </div>
        </div>

<!--        Fastest Selling-->
        <div class="module-wrapper">
            <h2>Fastest Selling:</h2>
            <div class="module-content">
                <div class="col-left">

<!--                    Card-->
                    <div class="left-card">
                        <div class="card-wrapper">
                            <div class="card-header">
                                <a href="#"><img src="/images/icons/star.png" /> Save for Later</a>
                                <a class="go-right" href="#">Contact Vendor</a>
                            </div>
                            <div class="card-product-image">
                                <img src="/images/placeholder-product-image-large.png" />
                            </div>
                            <div class="card-product-title">
                                <a href="#">Some Product Name</a>
                            </div>
                            <div class="card-producer">
                                <span>by Some Company Inc.</span>
                                <div class="go-right">
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                </div>
                            </div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus tempus
                                scelerisque. In metus sem, rutrum vel ...
                            </div>
                            <div class="card-actions">
                                <input type="submit" value="Add to Cart" />
                                <span class="go-right">$00.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="right-card">
                        <div class="card-wrapper">
                            <div class="card-header">
                                <a href="#"><img src="/images/icons/star.png" /> Save for Later</a>
                                <a class="go-right" href="#">Contact Vendor</a>
                            </div>
                            <div class="card-product-image">
                                <img src="/images/placeholder-product-image-large.png" />
                            </div>
                            <div class="card-product-title">
                                <a href="#">Some Product Name</a>
                            </div>
                            <div class="card-producer">
                                <span>by Some Company Inc.</span>
                                <div class="go-right">
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                </div>
                            </div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus tempus
                                scelerisque. In metus sem, rutrum vel ...
                            </div>
                            <div class="card-actions">
                                <input type="submit" value="Add to Cart" />
                                <span class="go-right">$00.00</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-right">

                    <!--                    Card-->
                    <div class="left-card">
                        <div class="card-wrapper">
                            <div class="card-header">
                                <a href="#"><img src="/images/icons/star.png" /> Save for Later</a>
                                <a class="go-right" href="#">Contact Vendor</a>
                            </div>
                            <div class="card-product-image">
                                <img src="/images/placeholder-product-image-large.png" />
                            </div>
                            <div class="card-product-title">
                                <a href="#">Some Product Name</a>
                            </div>
                            <div class="card-producer">
                                <span>by Some Company Inc.</span>
                                <div class="go-right">
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                </div>
                            </div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus tempus
                                scelerisque. In metus sem, rutrum vel ...
                            </div>
                            <div class="card-actions">
                                <input type="submit" value="Add to Cart" />
                                <span class="go-right">$00.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="right-card">
                        <div class="card-wrapper">
                            <div class="card-header">
                                <a href="#"><img src="/images/icons/star.png" /> Save for Later</a>
                                <a class="go-right" href="#">Contact Vendor</a>
                            </div>
                            <div class="card-product-image">
                                <img src="/images/placeholder-product-image-large.png" />
                            </div>
                            <div class="card-product-title">
                                <a href="#">Some Product Name</a>
                            </div>
                            <div class="card-producer">
                                <span>by Some Company Inc.</span>
                                <div class="go-right">
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                </div>
                            </div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus tempus
                                scelerisque. In metus sem, rutrum vel ...
                            </div>
                            <div class="card-actions">
                                <input type="submit" value="Add to Cart" />
                                <span class="go-right">$00.00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--        Recently Added-->
        <div class="module-wrapper">
            <h2>Fastest Selling:</h2>
            <div class="module-content">
                <div class="col-left">

                    <!--                    Card-->
                    <div class="left-card">
                        <div class="card-wrapper">
                            <div class="card-header">
                                <a href="#"><img src="/images/icons/star.png" /> Save for Later</a>
                                <a class="go-right" href="#">Contact Vendor</a>
                            </div>
                            <div class="card-product-image">
                                <img src="/images/placeholder-product-image-large.png" />
                            </div>
                            <div class="card-product-title">
                                <a href="#">Some Product Name</a>
                            </div>
                            <div class="card-producer">
                                <span>by Some Company Inc.</span>
                                <div class="go-right">
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                </div>
                            </div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus tempus
                                scelerisque. In metus sem, rutrum vel ...
                            </div>
                            <div class="card-actions">
                                <input type="submit" value="Add to Cart" />
                                <span class="go-right">$00.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="right-card">
                        <div class="card-wrapper">
                            <div class="card-header">
                                <a href="#"><img src="/images/icons/star.png" /> Save for Later</a>
                                <a class="go-right" href="#">Contact Vendor</a>
                            </div>
                            <div class="card-product-image">
                                <img src="/images/placeholder-product-image-large.png" />
                            </div>
                            <div class="card-product-title">
                                <a href="#">Some Product Name</a>
                            </div>
                            <div class="card-producer">
                                <span>by Some Company Inc.</span>
                                <div class="go-right">
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                </div>
                            </div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus tempus
                                scelerisque. In metus sem, rutrum vel ...
                            </div>
                            <div class="card-actions">
                                <input type="submit" value="Add to Cart" />
                                <span class="go-right">$00.00</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-right">

                    <!--                    Card-->
                    <div class="left-card">
                        <div class="card-wrapper">
                            <div class="card-header">
                                <a href="#"><img src="/images/icons/star.png" /> Save for Later</a>
                                <a class="go-right" href="#">Contact Vendor</a>
                            </div>
                            <div class="card-product-image">
                                <img src="/images/placeholder-product-image-large.png" />
                            </div>
                            <div class="card-product-title">
                                <a href="#">Some Product Name</a>
                            </div>
                            <div class="card-producer">
                                <span>by Some Company Inc.</span>
                                <div class="go-right">
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                </div>
                            </div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus tempus
                                scelerisque. In metus sem, rutrum vel ...
                            </div>
                            <div class="card-actions">
                                <input type="submit" value="Add to Cart" />
                                <span class="go-right">$00.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="right-card">
                        <div class="card-wrapper">
                            <div class="card-header">
                                <a href="#"><img src="/images/icons/star.png" /> Save for Later</a>
                                <a class="go-right" href="#">Contact Vendor</a>
                            </div>
                            <div class="card-product-image">
                                <img src="/images/placeholder-product-image-large.png" />
                            </div>
                            <div class="card-product-title">
                                <a href="#">Some Product Name</a>
                            </div>
                            <div class="card-producer">
                                <span>by Some Company Inc.</span>
                                <div class="go-right">
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                </div>
                            </div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus tempus
                                scelerisque. In metus sem, rutrum vel ...
                            </div>
                            <div class="card-actions">
                                <input type="submit" value="Add to Cart" />
                                <span class="go-right">$00.00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--        Staff Picks-->
        <div class="module-wrapper">
            <h2>Fastest Selling:</h2>
            <div class="module-content">
                <div class="col-left">

                    <!--                    Card-->
                    <div class="left-card">
                        <div class="card-wrapper">
                            <div class="card-header">
                                <a href="#"><img src="/images/icons/star.png" /> Save for Later</a>
                                <a class="go-right" href="#">Contact Vendor</a>
                            </div>
                            <div class="card-product-image">
                                <img src="/images/placeholder-product-image-large.png" />
                            </div>
                            <div class="card-product-title">
                                <a href="#">Some Product Name</a>
                            </div>
                            <div class="card-producer">
                                <span>by Some Company Inc.</span>
                                <div class="go-right">
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                </div>
                            </div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus tempus
                                scelerisque. In metus sem, rutrum vel ...
                            </div>
                            <div class="card-actions">
                                <input type="submit" value="Add to Cart" />
                                <span class="go-right">$00.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="right-card">
                        <div class="card-wrapper">
                            <div class="card-header">
                                <a href="#"><img src="/images/icons/star.png" /> Save for Later</a>
                                <a class="go-right" href="#">Contact Vendor</a>
                            </div>
                            <div class="card-product-image">
                                <img src="/images/placeholder-product-image-large.png" />
                            </div>
                            <div class="card-product-title">
                                <a href="#">Some Product Name</a>
                            </div>
                            <div class="card-producer">
                                <span>by Some Company Inc.</span>
                                <div class="go-right">
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                </div>
                            </div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus tempus
                                scelerisque. In metus sem, rutrum vel ...
                            </div>
                            <div class="card-actions">
                                <input type="submit" value="Add to Cart" />
                                <span class="go-right">$00.00</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-right">

                    <!--                    Card-->
                    <div class="left-card">
                        <div class="card-wrapper">
                            <div class="card-header">
                                <a href="#"><img src="/images/icons/star.png" /> Save for Later</a>
                                <a class="go-right" href="#">Contact Vendor</a>
                            </div>
                            <div class="card-product-image">
                                <img src="/images/placeholder-product-image-large.png" />
                            </div>
                            <div class="card-product-title">
                                <a href="#">Some Product Name</a>
                            </div>
                            <div class="card-producer">
                                <span>by Some Company Inc.</span>
                                <div class="go-right">
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                </div>
                            </div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus tempus
                                scelerisque. In metus sem, rutrum vel ...
                            </div>
                            <div class="card-actions">
                                <input type="submit" value="Add to Cart" />
                                <span class="go-right">$00.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="right-card">
                        <div class="card-wrapper">
                            <div class="card-header">
                                <a href="#"><img src="/images/icons/star.png" /> Save for Later</a>
                                <a class="go-right" href="#">Contact Vendor</a>
                            </div>
                            <div class="card-product-image">
                                <img src="/images/placeholder-product-image-large.png" />
                            </div>
                            <div class="card-product-title">
                                <a href="#">Some Product Name</a>
                            </div>
                            <div class="card-producer">
                                <span>by Some Company Inc.</span>
                                <div class="go-right">
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                    <img src="/images/icons/star.png" />
                                </div>
                            </div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus tempus
                                scelerisque. In metus sem, rutrum vel ...
                            </div>
                            <div class="card-actions">
                                <input type="submit" value="Add to Cart" />
                                <span class="go-right">$00.00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php
    }

    protected function side_menu()
    {
        echo '<div class="menu-top"><a href="#" >Start Selling Today</a></div>';
        $menu = new NewMainMenu();
        $menu->render();

        //Contributors
        $contributors = new WeeklyContributors();
        $contributors->render();
    }

}
