<<<<<<< HEAD
<?php

namespace includes\pages;

use includes\menus\MainMenu;
use includes\template\TemplateBase;

class ProductPage extends TemplateBase
{
    function __construct()
    {
        parent::__construct('Standard Base');
        $this->add_css('/stylesheets/products.css');
        $this->add_js('/javascript/masonry.pkgd.min.js');
        $this->add_js('/javascript/imagesloaded.pkgd.min.js');
        $this->add_js('/javascript/products.js');
    }

    protected function body()
    {
        // HTML
        ?>
        <div class="product-main-wrapper">
<!--            Left Column-->
            <div class="left-column-wrapper">

<!--                Video-->
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/C0-P0k2fxOY" frameborder="0" allowfullscreen></iframe>
                </div>

<!--                Social Media-->
                <div class="social-media-wrapper">
                    <a target="_blank" href=""><img src="/images/social_media/pinterest-icon.png" alt="Pinterest" /></a>
                    <a target="_blank" href=""><img src="/images/social_media/facebook-icon.png" alt="Facebook" /></a>
                    <a target="_blank" href=""><img src="/images/social_media/google-icon.png" alt="Google" /></a>
                    <a target="_blank" href=""><img src="/images/social_media/twitter-icon.png" alt="Twitter" /></a>
                    <a target="_blank" href=""><img src="/images/social_media/linkedin-icon.png" alt="LinkedIn" /></a>
                </div>

                <div class="content-wrapper">
                    <h1>Product Name</h1>
                    <hr/>
                    <div class="product-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu tellus dolor. Donec
                            dignissim, neque at mattis pharetra, justo quam mollis libero, ut fringilla erat nisl vitae
                            sapien. Aliquam id tincidunt diam, a rutrum lacus. Etiam maximus ex ante, quis venenatis
                            tortor imperdiet ut. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Sed vel lorem eu ex pharetra gravida ac interdum diam. Phasellus fermentum
                            dui sed accumsan lobortis. Nunc sit amet iaculis mauris. Maecenas iaculis nisl nibh, vel
                            mollis tortor finibus nec.
                        </p>
                        <p>
                            Ut at mauris lorem. Phasellus ac massa finibus, auctor mi in, malesuada justo. Phasellus
                            non commodo elit. Morbi non molestie erat. Aenean quam ipsum, tempor at felis in,
                            pellentesque condimentum diam. Sed id ullamcorper eros. Donec ultrices orci sed arcu cursus
                            cursus. Vivamus vulputate ligula sit amet dolor lobortis tincidunt. Vestibulum leo ante,
                            ornare vel justo id, porta semper ipsum. Suspendisse hendrerit mauris sed tristique
                            sagittis. Vivamus a erat sit amet libero blandit faucibus. Interdum et malesuada fames ac
                            ante ipsum primis in faucibus. Donec nunc urna, mattis sed nisl vitae, ullamcorper posuere
                            magna. Suspendisse ut suscipit tellus, sit amet dapibus ipsum.
                        </p>
                        <p>
                            Proin eget posuere orci. Curabitur non nisi urna. Vivamus ornare est velit, at venenatis
                            augue commodo vel. Vivamus tortor purus, varius ut blandit ac, semper vel nisl. In sit amet
                            aliquet mi, in scelerisque velit. Sed a augue non justo vestibulum efficitur a ut odio.
                            Suspendisse turpis orci, cursus ac risus volutpat, condimentum feugiat mi. Phasellus
                            eleifend eros quis nulla mattis blandit. In ex augue, pulvinar eget eleifend nec, tincidunt
                            non odio. Nullam justo leo, porttitor vitae orci a, iaculis ullamcorper est. Donec feugiat
                            blandit odio, vitae condimentum nunc finibus ac. Integer faucibus nibh pharetra lacus
                            pulvinar, at congue nulla volutpat. Mauris facilisis quam sed tortor posuere, id pretium
                            elit vehicula. Mauris diam leo, lacinia et dignissim nec, commodo nec nisl. Cum sociis
                            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </p>
                        <p>
                            Curabitur consectetur sem id lorem rutrum, posuere luctus lectus cursus. Sed accumsan non
                            turpis sed suscipit. Nullam diam velit, cursus et nisi et, malesuada viverra odio. Quisque
                            porta est sit amet dolor volutpat aliquet. Proin placerat elementum diam ac vulputate. Duis
                            ac pulvinar sapien. Aliquam et justo sit amet urna mattis ultricies eget a metus. Fusce
                            iaculis ligula hendrerit mollis pretium. Sed ut mollis leo. Curabitur nisi elit, elementum
                            eu varius at, scelerisque ac ipsum. Donec placerat ullamcorper egestas. In bibendum, felis
                            quis aliquet placerat, ligula eros mattis tellus, at commodo enim quam id massa. In hac
                            habitasse platea dictumst. Donec fringilla, ex pretium dictum rhoncus, tellus velit finibus
                            est, id ornare ex nunc a risus.
                        </p>
                        <p>
                            Suspendisse lobortis non tellus ac sagittis. Aenean lacinia nunc vitae tortor consequat,
                            rutrum fermentum metus auctor. Sed et sollicitudin ex, sed tincidunt sapien. Morbi ante
                            nibh, hendrerit id quam vel, blandit rhoncus tellus. Pellentesque consequat ex ac ipsum
                            bibendum, non interdum metus tristique. In tristique magna sem, ut maximus risus auctor a.
                            Integer sollicitudin efficitur risus sit amet venenatis. Quisque aliquam nunc eget risus
                            fringilla, maximus lacinia dui cursus. Pellentesque nec convallis massa, at tempus leo.
                            Vestibulum scelerisque id neque sit amet tincidunt. Donec varius, ipsum at blandit tempor,
                            nisi tortor luctus nisl, non tempor lacus dui sit amet erat. Cras semper congue metus sit
                            amet vestibulum.
                        </p>
                    </div>
                </div>

<!--                Suggestions-->
                <div class="suggestion-wrapper">
                    <hr />
                    <h2>More of this Category</h2>
                    <hr />

                    <!--                cards start-->
                    <div class="card-wrapper">
                        <div class="card-content-wrapper">
                            <div class="card-image">
                                <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                            </div>
                            <div class="card-info">
                                <span class="card-title"><a href="">Product Name</a></span>
                                <span class="card-price">$0.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="card-content-wrapper">
                            <div class="card-image">
                                <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                            </div>
                            <div class="card-info">
                                <span class="card-title"><a href="">Product Name</a></span>
                                <span class="card-price">$0.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="card-content-wrapper">
                            <div class="card-image">
                                <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                            </div>
                            <div class="card-info">
                                <span class="card-title"><a href="">Product Name</a></span>
                                <span class="card-price">$0.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="card-content-wrapper">
                            <div class="card-image">
                                <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                            </div>
                            <div class="card-info">
                                <span class="card-title"><a href="">Product Name</a></span>
                                <span class="card-price">$0.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="card-content-wrapper">
                            <div class="card-image">
                                <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                            </div>
                            <div class="card-info">
                                <span class="card-title"><a href="">Product Name</a></span>
                                <span class="card-price">$0.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="card-content-wrapper">
                            <div class="card-image">
                                <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                            </div>
                            <div class="card-info">
                                <span class="card-title"><a href="">Product Name</a></span>
                                <span class="card-price">$0.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--            Right Column-->
            <div class="right-column-wrapper">

<!--                Info Bubble-->
                <div class="info-wrapper">
                    <h1>Product Name</h1>
                    <form action="" method="post">

                        <!--                    Options Bar-->
                        <div class="options-wrapper">
                            <div class="price-wrapper">
                                <h2 class="price">$0.00 USD</h2>
                                <input type="submit" name="btnAskQuestion" value="Ask a Question" />
                            </div>
                            <hr/>
                            <div class="options">
                                <div class="option-item">
                                    <label for="option1">Option 1:</label>
                                    <select name="option1" id="option1">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                    </select>
                                </div>
                                <div class="option-item">
                                    <label for="option2">Option 2:</label>
                                    <select name="option1" id="option2">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                    </select>
                                </div>
                                <div class="option-item">
                                    <label for="option3">Option 3:</label>
                                    <select name="option3" id="option3">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                    </select>
                                </div>
                                <div class="option-item">
                                    <label for="quantity">Quantity:</label>
                                    <input id="quantity" type="number" name="quantity" value="0"/>
                                </div>
                            </div>
                        </div>

                        <!--                    Overview Area-->
                        <div class="overview">
                            <h2>Overview</h2>
                            <hr/>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            </ul>
                        </div>

                        <!--                    Specifications-->
                        <div class="specifications-wrapper">
                            <div class="specifications">
                                <ul class="specifications-links">
                                    <li class="active-tab"><a href="#tab1">Specifications</a></li>
                                    <li><a href="#tab2">Product Contents</a></li>
                                    <li><a href="#tab3">Shipping Information</a></li>
                                </ul>

                                <div class="specifications-content">
                                    <div id="tab1" class="tab active-tab">
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        </ul>
                                    </div>
                                    <div id="tab2" class="tab">
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        </ul>
                                    </div>
                                    <div id="tab3" class="tab">
                                        <h2>Shipping Information</h2>
                                        <hr/>
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="cart-button">
                            <input type="submit" name="btnAddToCart" value="Add to Cart" />
                        </div>
                    </form>
                </div>

<!--                Images-->
                <div class="images-wrapper">
                    <div class="images-main">
                        <img src="https://www.qdinka.com/sites/default/files/covers/Nomiku-2.0_.jpg" />
                    </div>
                    <div class="images-small-container" id="images-container">
                        <div class="images-item">
                            <img src="https://www.qdinka.com/sites/default/files/previews/png%3Bbase647836870cb8e501b4.png" />
                        </div>
                        <div class="images-item">
                            <img src="https://www.qdinka.com/sites/default/files/previews/flnomiku.jpg" />
                        </div>
                        <div class="images-item">
                            <img src="https://www.qdinka.com/sites/default/files/previews/02ae649a0565c09924f3f4cd5c9096a8_large.png" />
                        </div>
                        <div class="images-item">
                            <img src="https://www.qdinka.com/sites/default/files/previews/nomikurendering1.png" />
                        </div>
                        <div class="images-item">
                            <img src="https://www.qdinka.com/sites/default/files/previews/nomikuhobig01-1.jpg" />
                        </div>
                        <div class="images-item">
                            <img src="https://www.qdinka.com/sites/default/files/previews/nomiku01.jpg" />
                        </div>
                        <div class="images-item">
                            <img src="https://www.qdinka.com/sites/default/files/previews/Captura-de-pantalla-2014-09-02-a-las-15.45.54.jpg" />
                        </div>
                    </div>
                </div>

<!--                Facebook Commetns-->
                <div class="facebook-wrapper">
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>

                    <div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-width="100%" data-numposts="1" data-colorscheme="light"></div>
                </div>
            </div>
        </div>
    <?php
    }

    protected function side_menu()
    {
        //Show menu
        $sideMenu = new MainMenu();
        echo $sideMenu;
    }

=======
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

>>>>>>> 88e30c9e5271dd26fd30be5b29c35734cbc39cd5
}