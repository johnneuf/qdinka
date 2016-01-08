<?php


namespace includes\pages\sellers;

use includes\template\TemplateBase;

class PostListings extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/PostListingsLayout.css');

    }
protected function body() {
?>
        <div class="seller-top-header">
            <h3>Sell unlimited products on the <u>0% structure</u> . Post more, sell more, and make a higher percentage from each sale...
            </h3>
             <div class="upgrade-button">
             <a href="#">Upgrade</a>
             </div>
        </div>
       
        <!-- My seller Account Area -->
        <div class="seller-profile-wrapper">
               <div class="seller-image-wrapper">
                <img src="/images/icons/user.png" />
                </div> 
            <div class="seller-profile-detail-wrapper">
                    <h2>My Products</h2>
                    <div class="sellerName">
                            <span id="sellerAccountName"> </span>Seller Account Name- <span id="sellerCompanyName">Seller Company Name </span>
                            <span><a href="#"> edit</a></span>
                    </div>
                    <div>Total Sales: <span id="totsales">Number</span></div>
                    <div>Listed Products: <span id="ListedProducts">Number</span></div>
                     
            </div>
            <div class="seller-button-wrapper">
                <span class="listing-button"><a href="#">Listing Guide</a></span>
                
            </div>
        </div>
		<div class="listing-details-wrapper">
		
		<div class="menu-wrapper">
		
		<div class="box1"><a href="#" class="b">Create Listing</a></div>
		<div class="box2"><a href="#">Preview Listing</a></div>
		<div class="box3"><a href="#">Publish Listing</a></div>
		
		</div>
		<h3>Add Visuals</h3>
		<p>Add photos, GIFs, promo videos, video reviews, etc. Be sure your visuals are both professional, and are of high quality/resolution. Must be a minimum of 570px wide (we recommend 1000px). </p>
		<div>
		<div class="left-image-wrapper">
		<img src="">
		<h3>+Add</h3> <p> Primary thumbnail</p>
		</div> 
		<div class="right-image-wrapper">
		<div class="image-wrapper">
		<img src="">
		</div>
		<div class="image-wrapper">
		<img src="">
		</div>
		<div class="image-wrapper">
		<img src="">
		</div>
		<div class="image-wrapper">
		<img src="">
		</div>
		<div class="image-wrapper">
		<img src="">
		</div>
		
		<div class="image-wrapper">
		<img src="">
		</div>
		<div class="image-wrapper">
		<img src="">
		</div>
		<div class="image-wrapper">
		<img src="">
		</div>
		<div class="image-wrapper">
		<img src="">
		</div>
		<div class="image-wrapper">
		<img src="">
		</div>
		</div>
		
		</div>
<div class="thumbnail"><button class="thumbnail-button"><a href="">Adjust Thumbnail</a></button></div>
<span class="sidetext">Thumbnail is what shows up on the main display page next to other products. Must be crisp, clean, and above all else, eyecatching..</span>
		</div>
		
		<div class="listing-details">
		<h3>Listing Details</h3>
		<p>Your listing details are what will solidify your sale. Leave no questions un-answered. Your buyer needs to and wants to feel comfortable purchasing the product. Be smooth in your delivery as you describe the details of your product and open your buyers eyes as to why your product is the best thing on the market. </p>

		<div class="listing-form">Title*</div><div class="input"><input id="" value="Create a title/phrase that people will use in search..." class="inputbox"></div><br>
		<div class="listing-form">Category*</div>
		<select class="input-box">
		<option >Primary Category</option>
		</select>
		<select  class="input-box">
		<option>Sub-category</option>
		</select>
		<br>
		<div class="listing-form">Price* </div><div class="input"><input id="" value="$          USD" class="input-box"></div><br>
		<div class="listing-form">Condition*</div><select  class="input-box">
		<option>Be-Honest</option>
		</select><br>
		<div class="listing-form">In Stock*</div>
		<input id="" value="How many in stock?" class="input-box"><br>
		<div class="listing-form">Overview*<p>These are points that will be used to summarize your product.</p> </div>
		<div class="input"><input id="" value="Bullet 1" class="input-box">
		<input id="" value="Bullet 2" class="input-box">
		<input id="" value="Bullet 2" class="input-box"><br>
		<input id="" value="Bullet 3" class="input-box">
		<input id="" value="Bullet 4" class="input-box">
		<input id="" value="Bullet 5" class="input-box">
		</div><br>
		<div class="listing-form">Description*<p>These are points that will be used to summarize your product.</p> </div>
		<span><textarea class="textarea" ></textarea>
		</span>
		</div>
		
		
<div class="variations">
<h3>Variations</h3>
<p>List the different variations that your product comes in. Example: Color, Style, Shape, Size, etc. </p>
<div class="form">Size(Inches)</div>
<div class="size-list" >
<ul class="size-list">
<li> Options </li>
<li> Price-<a href="">Remove</a></li>
<li> In-Stock </li>
</ul>
<hr class="dashh">
<div class="size-box">
<ul class="sizelist">
<li> <img src="/images/icons/size.png" >20 inches</li>
<li> <div class="amount">$                  USD </div></li>
<li> <input type="checkbox" id="" class="check-box"><span>&#x2716;<span> </li>
</ul>

</div>
<div class="size-box">
<ul class="sizelist">
<li> <img src="/images/icons/size.png" >20 inches</li>
<li> <div class="amount"> $                USD </div></li>
<li> <input type="checkbox" id="" class="check-box"><span>&#x2716;<span> </li>
</ul>
</div>
<div class="add-option"><div class="add-box">Add option<button class="addbutton"><a href="">Add</a></button></div></div>
</div>
<div class="form">Add Variation</div>
<select class="input-box">
<option>+Add variation</option>
</select>

</div>

<div class="box">
<h3>Whats in the Box?</h3>
<p>List all the items that will be included upon purchase and found within the delivery package. </p>
<div class="box-form">List Each Item*</div>
<div class="input"><input id="" value="+ Add Item" class="inputbox2">
		           <input id="" value="+ Add Item" class="inputbox2"><br>
		
		<input id="" value="+ Add Item" class="inputbox2">
		<input id="" value="+ Add Item" class="inputbox2"><br>
		<input id="" value="+ Add Item" class="inputbox2">
		<input id="" value="+ Add Item" class="inputbox2">
		</div><br>

</div>

 <div class="shipping-details">
 <h3>Shipping</h3>
 <p>Here you will be making your product accessible to your client base through means of delivery. The more accessible your product, the more likely someone will be apt to buy it. Try to give as many options possible in delivering your product. And of course, the cheaper it is the better the experience will be for your buyers. </p>
 <div class="form">Local Pick up?*</div>
 <select class="input-box">
 <option>Yes</option>
 <option>No</option>
  </select><br>
  <div class="form">Item Weight</div><input id="" value="   lbs" class="input-box">
  <input id="" value="   oz" class="input-box"><br>
   <div><ul class="dimention"><li>length</li>
                                         <li>width</li>
										 <li>height</li>
  <ul></div>
 <div class="form">Item Size</div>
  <input id="" value="" class="input-box">
                                    <input id="" value="" class="input-box">
									<input id="" value="" class="input-box">
											
		    <br>
<div class="form">Ships From*</div><select class="input-box"><option>United States</option></select>		<br>

  <div class="form">Processing Time</div> <select class="input-box"><option>Ready to ship in..</option></select><br>
  <div class="form">Shipping Costs*</div>
  <div class="input">
<ul class="size-list2">
<li> Ships to </li>
<li> Cost</li>

</ul>
<p><hr class="dash"></p>

  <input id="" value="United States" class="inputbox2"> <input id="" value="$ USD"     class="inputbox2"><br>
 <input id="" value="Everywhere" class="inputbox2">
 <input id="" value="$    USD" class="inputbox2"><br>
 <input id="" value="All Location" class="inputbox2">
 <p class="para">Look up shipping cost</p>
 </div>
 </div>
			
	<div class="search-terms-area">
	<h3>Search Terms</h3>
	<p>Locking down the right search terms is one of the most important factors to your products sales performance. Just as a website must use keywards to magnify their SEO presence on the internet, you must also use keywords, and terms to attract clients who use the search tool. </p>
	
	<div class="form">Tags*</div>
	<div class="tag-input">
	<button class="add-button"><a href="">Add</a></button>
	</div><br>
    <div class="options">
	<div class="tag-options"><input type="checkbox" id="" value="" class="checkbox">Red</div>
	<div class="tag-options"><input type="checkbox" id="" value="" class="checkbox">Round</div>
	<div class="tag-options"><input type="checkbox" id="" value="" class="checkbox">Drilling</div>
	<div class="tag-options"><input type="checkbox" id="" value="" class="checkbox">Machinery</div>
	</div>
	<br>
	
	<div class="form">Materials*</div>
	<div class="tag-input">
	<button class="add-button"><a href="">Add</a></button>
	</div><br>
    <div class="options">
	<div class="tag-options"><input type="checkbox" id="" value="" class="checkbox">Plastic</div>
	<div class="tag-options"><input type="checkbox" id="" value="" class="checkbox">Glue</div>
	<div class="tag-options"><input type="checkbox" id="" value="" class="checkbox">Cloth Seal</div>
	</div>
	<br>
	<div class="form">Style*</div>
	<select class="input-box">
	<option>None</option>
	</select>
	<select class="input-box">
	<option>None</option>
	</select>
	<br>	
			
	<div class="form">Reciepent*</div>
	<select class="input-box">
	<option>None</option>
	</select>		
		</div>	
			
	<div class="ques-ans">
<h3> Questions & Answers </h3>
<p>Discuss any common questions and misconceptions about your product. Explain what special features it may have in comparison to other similar products through your Q&A. Users will be adding to this as people purchase and review your product. </p>
	
	<div class="form">Question 1</div>	<span>Q:<input id="" type="text" class="question"></span>
			                                <br><div class="qanda"> A:<input id="" type="text" class="ans"></div>
											<br>
			<button class="question-button"><a href="">+Add Question</a></button>								
			</div>
			<div>
    <div class="draft">
<button class="cancel-button"><a href="">Cancel</a></button>
<button class="draft-button"><a href="">Draft</a></button>
</div>	
<div class="preview-area">
<p>Congrualations! Next step is to Preview your listing to be sure it looks and reads exactly how you want it to. </p>
<div class="preview"><button class="preview-button"><a href="">Preview</a></button></div>
</div>
	</div>		
			
			<?php    
    }
    
    protected function side_menu() {
    }   
}
    