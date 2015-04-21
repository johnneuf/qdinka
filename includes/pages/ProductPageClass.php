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
                                <input type="submit" name="btnAskQuestion" value="Ask a Question" />
                                <h2 class="price">$0.00 USD</h2>
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

}