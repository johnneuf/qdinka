<?php
/**
 * Created by PhpStorm.
 * User: Kendall
 * Date: 7/16/2015
 * Time: 7:31 AM
 */

namespace includes\modules;


use includes\template\GenericBubble;

class SearchModule extends GenericBubble
{

    protected function body()
    {
        ?>
        <form action="" method="post">
<!--            Price-->
            <div class="search-price-wrapper">
                <label for="txtPriceMin">Price:</label><br>
                <input type="text" name="txtPriceMin" id="txtPriceMin">
                <label for="txtPriceMax"> to </label>
                <input type="text" name="txtPriceMax" id="txtPriceMax">
            </div>

<!--            Condition-->
            <div class="search-condition-wrapper">
                Condition:<br>
                <input type="checkbox" name="cbxConditionNew" id="cbxConditionNew">
                <label for="cbxConditionNew">New</label>
                <input type="checkbox" name="cbxConditionOld" id="cbxConditionOld">
                <label for="cbxConditionOld">Old</label>
                <input type="checkbox" name="cbxConditionRefurbished" id="cbxConditionRefurbished">
                <label for="cbxConditionRefurbished">Refurbished</label>
            </div>

<!--            Shipping-->
            <div class="search-shipping-wrapper">
                Shipping:<br>
                <input type="checkbox" name="cbxShippingLocal" id="cbxShippingLocal">
                <label for="cbxShippingLocal">Local pick-up</label><br>
                <input type="checkbox" name="cbxShippingUS" id="cbxShippingUS">
                <label for="cbxShippingUS">United States</label><br>
                <input type="checkbox" name="cbxShippingInternational" id="cbxShippingInternational">
                <label for="cbxShippingInternational">International</label>
            </div>

<!--            Rating-->
            <div class="search-rating-wrapper">
                Rating:
<!--                4 star-->
                <div>
                    <img src="/images/icons/star.png" /><img src="/images/icons/star.png" />
                    <img src="/images/icons/star.png" /><img src="/images/icons/star.png" />
                    <input type="submit" name="btn4Up" value="and Up">
                </div>
<!--                3 Star-->
                <div>
                    <img src="/images/icons/star.png" /><img src="/images/icons/star.png" />
                    <img src="/images/icons/star.png" />
                    <input type="submit" name="btn3Up" value="and Up">
                </div>
<!--                2 Star-->
                <div>
                    <img src="/images/icons/star.png" /><img src="/images/icons/star.png" />
                    <input type="submit" name="btn2Up" value="and Up"><br>
                </div>
<!--                1 star-->
                <div>
                    <img src="/images/icons/star.png" />
                    <input type="submit" name="btn1Up" value="and Up">
                </div>
            </div>

<!--            Color-->
            <div class="search-color-wrapper">
                Color:<br>
                <div class="search-color-left">
                    <input type="checkbox" name="cbxColorRed" id="cbxColorRed">
                    <label for="cbxColorRed">Red</label><br>
                    <input type="checkbox" name="cbxColorBlue" id="cbxColorBlue">
                    <label for="cbxColorBlue">Blue</label><br>
                    <input type="checkbox" name="cbxColorViolet" id="cbxColorViolet">
                    <label for="cbxColorViolet">Violet</label><br>
                    <input type="checkbox" name="cbxColorWhite" id="cbxColorWhite">
                    <label for="cbxColorWhite">White</label><br>
                    <input type="checkbox" name="cbxColorGrey" id="cbxColorGrey">
                    <label for="cbxColorGrey">Grey</label><br>
                </div>
                <div class="search-color-right">
                    <input type="checkbox" name="cbxColorYellow" id="cbxColorYellow">
                    <label for="cbxColorYellow">Yellow</label><br>
                    <input type="checkbox" name="cbxColorGreen" id="cbxColorGreen">
                    <label for="cbxColorGreen">Green</label><br>
                    <input type="checkbox" name="cbxColorOrange" id="cbxColorOrange">
                    <label for="cbxColorOrange">Orange</label><br>
                    <input type="checkbox" name="cbxColorBlack" id="cbxColorBlack">
                    <label for="cbxColorBlack">Black</label><br>
                    <input type="checkbox" name="cbxColorOther" id="cbxColorOther">
                    <label for="cbxColorOther">Other</label><br>
                </div>
            </div>

<!--            Other-->
            <div class="search-other-wrapper">
                Other:<br>
                <input type="checkbox" name="cbxPostedToday" id="cbxPostedToday">
                <label for="cbxPostedToday">Posted Today</label><br>
                <input type="checkbox" name="cbxMostViewed" id="cbxMostViewed">
                <label for="cbxMostViewed">Most Viewed</label><br>
                <input type="checkbox" name="cbxMostSold" id="cbxMostSold">
                <label for="cbxMostSold">Most Sold</label><br>
                <input type="checkbox" name="cbxMostFavored" id="cbxMostFavored">
                <label for="cbxMostFavored">Most Favored</label><br>
                <input type="checkbox" name="cbxScrambledBrowse" id="cbxScrambledBrowse">
                <label for="cbxScrambledBrowse">Scrambled Browse</label><br>
            </div>
        </form>
        <?php
    }

    function __construct()
    {
        $this->title = 'Refine Search';
    }
}