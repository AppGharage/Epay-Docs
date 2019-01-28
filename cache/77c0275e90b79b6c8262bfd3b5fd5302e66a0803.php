<?php $__env->startSection('documentation_content'); ?><h2>Getting Started</h2>
<h3>Overview</h3>
<p>Epay makes it easier for you to securely accept online payments (both local and International) without coding or having a website . You can use it to manage payments and billings, manage your integrations, and more.</p>
<hr />
<h3>What makes us different?</h3>
<ul>
<li>Instant settlements with the lowest transaction fees.</li>
<li>You don't need a website or to write code to be able to accept payments for your business.</li>
<li>Developer with webhook and API driven platform</li>
<li>Easy to setup and start accepting payments in minutes</li>
<li>Your customers need no mobile app installed and don't need to signup on epay to pay you</li>
</ul>
<h3>Payment Methods</h3>
<p>Below are the payment channels available on Epay;</p>
<ul>
<li><code>Bank Tranfers</code> : Epay allows you to transfer funds from your epay wallet into your Bank account directly. You can also   make funds settle directly into your Bank account by setting it up. This is how;</li>
<li><code>Mobile Money(MOMO)</code> : Recieve and transfer funds into your Mobile money</li>
<li><code>Card Payment</code> : Pay using your card (Visa and Master Card)</li>
</ul>
<h3>Payment Pages</h3>
<p>A Payment Page can represent anything you want to charge money for, including; a downloadable product, a private course, T-shirt etc.</p>
<ul>
<li>After you login successfully, head to the navigation and click on Payment Pages.</li>
<li>On the top right corner is a button named Create New Page; click on it to create your payment page.</li>
<li>Now, copy the link provided you when you create the page and start sharing with whoever needs to pay you.</li>
</ul>
<h3>Developer Integration</h3>
<p>Epay has also been designed for developers. If you are a developer, Epay has been designed to allow you extend and easily integrate into systems in order to accept payment without thinking of the risk that comes with processing payments.</p>
<p>Our well designed and beautiful checkout pages allows you to accept payments for your one-time purchase products and services, and notifies you via webhook or API whenever a new payment comes through. You don’t need to write a single line of payment code, you only need to worry about how to respond when a payment is successful or not. </p>
<h3>Transfer Payments</h3>
<ul>
<li>Head to the transfers tab on your Dashboard Navigation</li>
<li>Click on the New Transfer button located at the top right corner of your page .</li>
<li>Choose your withdrawal method and get your money</li>
</ul>
<hr />
<p>Next, learn about <a href="/docs/payment">Accepting Payments in your application</a>.</p><?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>