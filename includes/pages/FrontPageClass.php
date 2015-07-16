<?php
/**
* Kendall Holm
* Created on 5/4/2015 at 10:19 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages;


use includes\menus\NewMainMenu;
use includes\modules\SearchModule;
use includes\template\TemplateBase;

class FrontPage extends TemplateBase {
    protected function body()
    {
        ?>
        <!--        Header-->
        <div class="top-header">
            <h3>Sell unlimited products on the only available <u>0% commission</u> platform around. Post more, sell
                more, and make a higher percentage per sale...</h3>
        </div>

        <div class="subview-header-wrapper">
            <span><?php echo $this->title; ?></span> - <span class="search-string">Some search string</span>
        </div>
        <hr>
        <div class="subview-related-search-wrapper">
            <span>Related Searches: </span><a href="#">Related search one, </a><a href="#">Related search one</a>
        </div>

<!--        Paginate-->
        <div class="subview-paginate-wrapper">
            <div class="side-col">
                <div class="active item">Gallery</div>
                <div class="item">Thumb</div>
                <div class="item">List</div>
            </div>
            <div class="center-col">
                <div class="center-content">
                    <span class="deactivated-link">< Previous </span>1-12 of 209 results<span class="active-link"> Next ></span>
                </div>
            </div>
            <div class="side-col">
                <div class="active item">Newest</div>
                <div class="item">Relevance</div>
                <div class="item">Cost</div>
            </div>
        </div>
        <hr>

<!--        Cards-->
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

<!--        Bottom Paginator-->
        <div class="subview-bottom-paginate-wrapper">
            <div class="subview-bottom-paginate">
                <span class="deactivated-link">< previous page </span><span class="active-link">1 2 3</span> . . .
                <span class="active-link"> next page ></span>
            </div>
        </div>
        <?php
    }

    protected function side_menu()
    {
        echo '<div class="menu-top"><a href="#" >Start Selling Today</a></div>';

        $searchBubble = new SearchModule();
        $searchBubble->render();
    }

    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);

        $this->add_css('/stylesheets/layout.css');
    }

}