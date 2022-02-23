<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['User'])) {

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>HELP</title>
    <link rel="stylesheet" href="styleh1.css">
  </head>

  <body>
    <div class="search_bar">
      <div class="sb_ask">
        <h2>How can we help you?</h2>
      </div>
      <div class="sb_search">
        <div class="img_search">
          <img class="imgs" src="search.png" alt="">
        </div>
        <div class="input_search">
          <input class="input_1" type="text" placeholder="Discribe Your Issue" />
        </div>
      </div>
    </div>
    <div class="all_body">
      <div class="help_main">
        <div class="links_header">
          <h3>QUICK LINKS</h3>
        </div>
        <div class="links">
          <div class="link_options">
            <h4><a class="a_link" href="index.php" class="linkpages">Sign in</a></h4>
          </div>
          <div class="link_options">
            <h4><a class="a_link" href="index.php" class="linkpages">Log in</a></h4>
          </div>
          <div class="link_options">
            <h4><a class="a_link" href="cart.php" class="linkpages">Your Cart</a></h4>
          </div>
        </div>
      </div>
      <div class="help_Q">
        <div class="links_header">
          <h3>FAQ</h3>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: What is User Name</h4>
          </div>
          <div class="Q_A">
            <h5>A: User Name is same as the Name that you entered in the registration</h5>
            <br>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: How to Contact Laura Fashion Help Center?</h4>
          </div>
          <div class="Q_A">
            <h5>A: Phone: 011-1256987</h5>
            <br>
            <h5>Email: laurafashioncentre@gmail.com</h5>
            <br>
            <h5>Address: No.51, Admiral Clancy Fernando Mawatha, Katubedda, Sri Lanka</h5>
            <br>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: How to Return Products? Can We Return Products?</h4>
          </div>
          <div class="Q_A">
            <h5>A: If you're not satisfied, you can return eligible products within 30 days of receipt for a full refund, in accordance with our Returns Policy.</h5><br>
            <h5>No minimum purchase is required to receive free returns.</h5><br>
            <h5>We'll provide a printable prepaid return label and pay for the return delivery costs.</h5><br>
            <h5>To return an item, go to Your Orders.</h5><br>
            <h5>Products must be returned in new and unworn condition, with all original packaging, tags, and certificates of authenticity. Any products returned without their original packaging and documentation will be rejected.</h5><br>
            <h5>Any products that are resized, altered, or otherwise damaged after delivery, won't be accepted for return.</h5><br>
            <h5>At the time of purchase, on the product's detail page, the product was identified clearly as eligible for free returns.</h5><br>
            <h5>The item is being returned within 30 days and in accordance with our Returns Policy.</h5><br>
            <h5>If you return products that are ineligible for free returns with products that are eligible for free returns, we may deduct the postage costs for the ineligible products from your refund amount in accordance with our general Returns Policy.</h5><br>
            <h5>We can't accept returns delivered by hand.</h5><br>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: How can I order?</h4>
          </div>
          <div class="Q_A">
            <h5>A: You can order easily using our online platform. When you find a product you need, you can add it to cart, login and go through the ordering process. After the order is ready, you will receive order summary to your email. Order summary will also be stored to your account. </h5><br>
            <h5>You can also easily make reorders afterwards by clicking the “reorder” button on any of your previously made orders. After clicking the “reorder” button the cart will open and you can change quantities or products. </h5><br>
            <br>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: Why should I buy online?</h4>
          </div>
          <div class="Q_A">
            <h5>A: Speeding up the process. By ordering online you will you will get prices faster and you will be able to go through order confirmation and payment process much faster. This could save days of your time.</h5><br>
            <h5>Traceability: You will have easy access to all of your previous orders any time you want.</h5><br>
            <h5>Reordering:  you can make a re-order anytime based on your previous orders by only couple of clicks. This will save time and effort as you don’t need to go through all the documents and emails from the past.</h5><br>
            <br>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: What information should I input when ordering?</h4>
          </div>
          <div class="Q_A">
            <h5>A: Our online ordering system will ask for all the important information you should submit. If you have a VAT number, please remember to submit it. This will make sure the shipment is not delayed because of the lack of VAT number</h5><br>
            <br>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: What payment methods can I use?</h4>
          </div>
          <div class="Q_A">
            <h5>A: You can use all the major credit cards.</h5><br>
            <br>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: Is VAT charged?</h4>
          </div>
          <div class="Q_A">
            <h5>A: If you have VAT number, then VAT is not charged. You need to remember to add the VAT number to your account information section. Online checkout system will automatically fill in the submitted VAT number when you order products.</h5><br>
            <h5>You can also add your VAT number during the checkout process manually.</h5><br>
            <br>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: What should I do if the payment is not accepted?</h4>
          </div>
          <div class="Q_A">
            <h5>A: Please try again in a little while. If the payment is still not accepted, please verify your account balance. If everything is as it should, but you still can't make the payment, please contact hytest@hytest.fi notify us about the problem. We can manage the order manually.</h5><br>
            <br>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: What are the delivery charges?</h4>
          </div>
          <div class="Q_A">
            <h5>A: Delivery charges are dependent on the shipment requirements. If the products on your order are due to special requirements extra fee will be added to the shipment charges. You can see the shipping fees on the checkout process before the payment is made.</h5><br>
            <br>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: Can I cancel my order?</h4>
          </div>
          <div class="Q_A">
            <h5>A: If you want to cancel your order, please do so as soon as possible. If we have already processed your order, you need to contact us and return the product.</h5><br>
            <h5>Please Contact: laurafashioncentre@gmail.com</h5><br>
            <br>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: Do you have the product in stock?</h4>
          </div>
          <div class="Q_A">
            <h5>A: All the products which are shown on our site are available. Order lead time depends on the products and quantities.</h5><br>
            <br>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: Shipping time?</h4>
          </div>
          <div class="Q_A">
            <h5>A: Shipping time will be confirmed on the order confirmation document.</h5><br>
            <br>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>Q: Shipping cost?</h4>
          </div>
          <div class="Q_A">
            <h5>A: Shipping costs are dependent on your location and products on your order. Some products need to be shipped in dry ice. These dry ice shipments have a slightly higher shipping fee. Our online store shows the shipping fee and shipping cost automatically on the checkout.</h5><br>
            <br>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>

<?php
}else{
  header("Location: index.php");
  exit();
}
?>
