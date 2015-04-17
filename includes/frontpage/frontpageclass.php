<?php
/**
* Kendall Holm
* Created on 4/10/2015 at 8:07 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\frontpage;


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
        <div class="front-page-header-wrapper">
            <h1>Welcome to Qdinka!</h1>
            <h2>Bringing Crowd-funding full circle.</h2>
            <h2>Discover Innovation!</h2>
        </div>

<!--        Recently added-->
        <div class="front-page-section-wrapper">
            <h2>Recently Added Products</h2>

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
                    <hr/>
                    <div class="card-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet sapien condimentum,
                            porttitor justo quis, maximus urna. In ornare tortor nisl, eget tempus elit faucibus quis.
                            Suspendisse rhoncus quam vel nisl elementum, ut pulvinar risus egestas. Vivamus quis arcu
                            sit amet enim viverra maximus. Vivamus nunc nibh, malesuada at ex eu, dictum aliquam nulla.
                            Quisque eu eleifend elit. Maecenas faucibus nunc eget nibh ultricies posuere. Duis sed nunc
                            suscipit tellus bibendum vehicula quis eu risus. Fusce quis libero scelerisque, volutpat
                            ante vitae, condimentum libero. In facilisis, sapien id scelerisque consectetur, lorem
                            sapien cursus enim, quis auctor leo quam et lacus. Vestibulum a dignissim erat, vitae
                            ultrices nulla. Nunc maximus leo nec sem interdum, ac imperdiet lectus efficitur. Donec
                            interdum rutrum sodales. Pellentesque quis ipsum enim.
                        </p>
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
                    <hr/>
                    <div class="card-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet sapien condimentum,
                            porttitor justo quis, maximus urna. In ornare tortor nisl, eget tempus elit faucibus quis.
                            Suspendisse rhoncus quam vel nisl elementum, ut pulvinar risus egestas. Vivamus quis arcu
                            sit amet enim viverra maximus. Vivamus nunc nibh, malesuada at ex eu, dictum aliquam nulla.
                            Quisque eu eleifend elit. Maecenas faucibus nunc eget nibh ultricies posuere. Duis sed nunc
                            suscipit tellus bibendum vehicula quis eu risus. Fusce quis libero scelerisque, volutpat
                            ante vitae, condimentum libero. In facilisis, sapien id scelerisque consectetur, lorem
                            sapien cursus enim, quis auctor leo quam et lacus. Vestibulum a dignissim erat, vitae
                            ultrices nulla. Nunc maximus leo nec sem interdum, ac imperdiet lectus efficitur. Donec
                            interdum rutrum sodales. Pellentesque quis ipsum enim.
                        </p>
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
                    <hr/>
                    <div class="card-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet sapien condimentum,
                            porttitor justo quis, maximus urna. In ornare tortor nisl, eget tempus elit faucibus quis.
                            Suspendisse rhoncus quam vel nisl elementum, ut pulvinar risus egestas. Vivamus quis arcu
                            sit amet enim viverra maximus. Vivamus nunc nibh, malesuada at ex eu, dictum aliquam nulla.
                            Quisque eu eleifend elit. Maecenas faucibus nunc eget nibh ultricies posuere. Duis sed nunc
                            suscipit tellus bibendum vehicula quis eu risus. Fusce quis libero scelerisque, volutpat
                            ante vitae, condimentum libero. In facilisis, sapien id scelerisque consectetur, lorem
                            sapien cursus enim, quis auctor leo quam et lacus. Vestibulum a dignissim erat, vitae
                            ultrices nulla. Nunc maximus leo nec sem interdum, ac imperdiet lectus efficitur. Donec
                            interdum rutrum sodales. Pellentesque quis ipsum enim.
                        </p>
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
                    <hr/>
                    <div class="card-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet sapien condimentum,
                            porttitor justo quis, maximus urna. In ornare tortor nisl, eget tempus elit faucibus quis.
                            Suspendisse rhoncus quam vel nisl elementum, ut pulvinar risus egestas. Vivamus quis arcu
                            sit amet enim viverra maximus. Vivamus nunc nibh, malesuada at ex eu, dictum aliquam nulla.
                            Quisque eu eleifend elit. Maecenas faucibus nunc eget nibh ultricies posuere. Duis sed nunc
                            suscipit tellus bibendum vehicula quis eu risus. Fusce quis libero scelerisque, volutpat
                            ante vitae, condimentum libero. In facilisis, sapien id scelerisque consectetur, lorem
                            sapien cursus enim, quis auctor leo quam et lacus. Vestibulum a dignissim erat, vitae
                            ultrices nulla. Nunc maximus leo nec sem interdum, ac imperdiet lectus efficitur. Donec
                            interdum rutrum sodales. Pellentesque quis ipsum enim.
                        </p>
                    </div>
                </div>
            </div>
            <!--                Cards end-->
        </div>

        <!--        Recently added-->
        <div class="front-page-section-wrapper">
            <h2>Fastest Selling</h2>

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
                    <hr/>
                    <div class="card-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet sapien condimentum,
                            porttitor justo quis, maximus urna. In ornare tortor nisl, eget tempus elit faucibus quis.
                            Suspendisse rhoncus quam vel nisl elementum, ut pulvinar risus egestas. Vivamus quis arcu
                            sit amet enim viverra maximus. Vivamus nunc nibh, malesuada at ex eu, dictum aliquam nulla.
                            Quisque eu eleifend elit. Maecenas faucibus nunc eget nibh ultricies posuere. Duis sed nunc
                            suscipit tellus bibendum vehicula quis eu risus. Fusce quis libero scelerisque, volutpat
                            ante vitae, condimentum libero. In facilisis, sapien id scelerisque consectetur, lorem
                            sapien cursus enim, quis auctor leo quam et lacus. Vestibulum a dignissim erat, vitae
                            ultrices nulla. Nunc maximus leo nec sem interdum, ac imperdiet lectus efficitur. Donec
                            interdum rutrum sodales. Pellentesque quis ipsum enim.
                        </p>
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
                    <hr/>
                    <div class="card-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet sapien condimentum,
                            porttitor justo quis, maximus urna. In ornare tortor nisl, eget tempus elit faucibus quis.
                            Suspendisse rhoncus quam vel nisl elementum, ut pulvinar risus egestas. Vivamus quis arcu
                            sit amet enim viverra maximus. Vivamus nunc nibh, malesuada at ex eu, dictum aliquam nulla.
                            Quisque eu eleifend elit. Maecenas faucibus nunc eget nibh ultricies posuere. Duis sed nunc
                            suscipit tellus bibendum vehicula quis eu risus. Fusce quis libero scelerisque, volutpat
                            ante vitae, condimentum libero. In facilisis, sapien id scelerisque consectetur, lorem
                            sapien cursus enim, quis auctor leo quam et lacus. Vestibulum a dignissim erat, vitae
                            ultrices nulla. Nunc maximus leo nec sem interdum, ac imperdiet lectus efficitur. Donec
                            interdum rutrum sodales. Pellentesque quis ipsum enim.
                        </p>
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
                    <hr/>
                    <div class="card-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet sapien condimentum,
                            porttitor justo quis, maximus urna. In ornare tortor nisl, eget tempus elit faucibus quis.
                            Suspendisse rhoncus quam vel nisl elementum, ut pulvinar risus egestas. Vivamus quis arcu
                            sit amet enim viverra maximus. Vivamus nunc nibh, malesuada at ex eu, dictum aliquam nulla.
                            Quisque eu eleifend elit. Maecenas faucibus nunc eget nibh ultricies posuere. Duis sed nunc
                            suscipit tellus bibendum vehicula quis eu risus. Fusce quis libero scelerisque, volutpat
                            ante vitae, condimentum libero. In facilisis, sapien id scelerisque consectetur, lorem
                            sapien cursus enim, quis auctor leo quam et lacus. Vestibulum a dignissim erat, vitae
                            ultrices nulla. Nunc maximus leo nec sem interdum, ac imperdiet lectus efficitur. Donec
                            interdum rutrum sodales. Pellentesque quis ipsum enim.
                        </p>
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
                    <hr/>
                    <div class="card-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet sapien condimentum,
                            porttitor justo quis, maximus urna. In ornare tortor nisl, eget tempus elit faucibus quis.
                            Suspendisse rhoncus quam vel nisl elementum, ut pulvinar risus egestas. Vivamus quis arcu
                            sit amet enim viverra maximus. Vivamus nunc nibh, malesuada at ex eu, dictum aliquam nulla.
                            Quisque eu eleifend elit. Maecenas faucibus nunc eget nibh ultricies posuere. Duis sed nunc
                            suscipit tellus bibendum vehicula quis eu risus. Fusce quis libero scelerisque, volutpat
                            ante vitae, condimentum libero. In facilisis, sapien id scelerisque consectetur, lorem
                            sapien cursus enim, quis auctor leo quam et lacus. Vestibulum a dignissim erat, vitae
                            ultrices nulla. Nunc maximus leo nec sem interdum, ac imperdiet lectus efficitur. Donec
                            interdum rutrum sodales. Pellentesque quis ipsum enim.
                        </p>
                    </div>
                </div>
            </div>
            <!--                Cards end-->
        </div>

        <!--        Recently added-->
        <div class="front-page-section-wrapper">
            <h2>Staff Picks</h2>

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
                    <hr/>
                    <div class="card-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet sapien condimentum,
                            porttitor justo quis, maximus urna. In ornare tortor nisl, eget tempus elit faucibus quis.
                            Suspendisse rhoncus quam vel nisl elementum, ut pulvinar risus egestas. Vivamus quis arcu
                            sit amet enim viverra maximus. Vivamus nunc nibh, malesuada at ex eu, dictum aliquam nulla.
                            Quisque eu eleifend elit. Maecenas faucibus nunc eget nibh ultricies posuere. Duis sed nunc
                            suscipit tellus bibendum vehicula quis eu risus. Fusce quis libero scelerisque, volutpat
                            ante vitae, condimentum libero. In facilisis, sapien id scelerisque consectetur, lorem
                            sapien cursus enim, quis auctor leo quam et lacus. Vestibulum a dignissim erat, vitae
                            ultrices nulla. Nunc maximus leo nec sem interdum, ac imperdiet lectus efficitur. Donec
                            interdum rutrum sodales. Pellentesque quis ipsum enim.
                        </p>
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
                    <hr/>
                    <div class="card-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet sapien condimentum,
                            porttitor justo quis, maximus urna. In ornare tortor nisl, eget tempus elit faucibus quis.
                            Suspendisse rhoncus quam vel nisl elementum, ut pulvinar risus egestas. Vivamus quis arcu
                            sit amet enim viverra maximus. Vivamus nunc nibh, malesuada at ex eu, dictum aliquam nulla.
                            Quisque eu eleifend elit. Maecenas faucibus nunc eget nibh ultricies posuere. Duis sed nunc
                            suscipit tellus bibendum vehicula quis eu risus. Fusce quis libero scelerisque, volutpat
                            ante vitae, condimentum libero. In facilisis, sapien id scelerisque consectetur, lorem
                            sapien cursus enim, quis auctor leo quam et lacus. Vestibulum a dignissim erat, vitae
                            ultrices nulla. Nunc maximus leo nec sem interdum, ac imperdiet lectus efficitur. Donec
                            interdum rutrum sodales. Pellentesque quis ipsum enim.
                        </p>
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
                    <hr/>
                    <div class="card-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet sapien condimentum,
                            porttitor justo quis, maximus urna. In ornare tortor nisl, eget tempus elit faucibus quis.
                            Suspendisse rhoncus quam vel nisl elementum, ut pulvinar risus egestas. Vivamus quis arcu
                            sit amet enim viverra maximus. Vivamus nunc nibh, malesuada at ex eu, dictum aliquam nulla.
                            Quisque eu eleifend elit. Maecenas faucibus nunc eget nibh ultricies posuere. Duis sed nunc
                            suscipit tellus bibendum vehicula quis eu risus. Fusce quis libero scelerisque, volutpat
                            ante vitae, condimentum libero. In facilisis, sapien id scelerisque consectetur, lorem
                            sapien cursus enim, quis auctor leo quam et lacus. Vestibulum a dignissim erat, vitae
                            ultrices nulla. Nunc maximus leo nec sem interdum, ac imperdiet lectus efficitur. Donec
                            interdum rutrum sodales. Pellentesque quis ipsum enim.
                        </p>
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
                    <hr/>
                    <div class="card-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet sapien condimentum,
                            porttitor justo quis, maximus urna. In ornare tortor nisl, eget tempus elit faucibus quis.
                            Suspendisse rhoncus quam vel nisl elementum, ut pulvinar risus egestas. Vivamus quis arcu
                            sit amet enim viverra maximus. Vivamus nunc nibh, malesuada at ex eu, dictum aliquam nulla.
                            Quisque eu eleifend elit. Maecenas faucibus nunc eget nibh ultricies posuere. Duis sed nunc
                            suscipit tellus bibendum vehicula quis eu risus. Fusce quis libero scelerisque, volutpat
                            ante vitae, condimentum libero. In facilisis, sapien id scelerisque consectetur, lorem
                            sapien cursus enim, quis auctor leo quam et lacus. Vestibulum a dignissim erat, vitae
                            ultrices nulla. Nunc maximus leo nec sem interdum, ac imperdiet lectus efficitur. Donec
                            interdum rutrum sodales. Pellentesque quis ipsum enim.
                        </p>
                    </div>
                </div>
            </div>
            <!--                Cards end-->
        </div>

    <?php
    }

    protected function side_bar()
    {
        $this->side_menu();
    }

}
