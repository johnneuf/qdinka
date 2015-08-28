/**
 * Created by Kendall on 7/3/2015.
 */
$(document).ready(function () {
    $("input:text").focus(function () {
        $(this).select();
    });
});
