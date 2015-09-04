/**
 * Created by Kendall on 4/21/2015.
 */
$(document).ready(function () {
    //Masonry stuff for images
    var $imagesContainer = $('#images-container');
    $imagesContainer.imagesLoaded(function () {
        $imagesContainer.masonry({
            itemSelector: '.images-item'
        });
    });


});
