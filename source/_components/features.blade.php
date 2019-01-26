<section class="flex flex-col items-center bg-white py-12 md:py-16">
    <div class="flex flex-col md:flex-row items-center container-content mb-8 px-4 sm:px-6">
        <div class="flex-col md:w-1/2 md:pr-10 lg:pr-20 pb-8 md:pb-0">
            <h3 class="mb-5 text-blue-darker">
            Accept or Disburse Payments on any platform
            </h3>

            <p class="text-blue">
                Collect payments easily and securely on mobile, web or your Online Shop.
                With our libraries, Plugins and APIs you can build applications in any language or platform.
                A Single API allows you to charge both Credit Cards and Mobile Money wallets.
                All payments are instantly deposited into your Epay wallet. 
            </p>

            <a href="/docs/installation" title="Read Epay documentation"
                class="text-blue hover:text-blue-darker text-base no-underline hover:underline">
                Learn more in the docs <img src="/assets/img/icon-arrow.svg" class="w-4 -mb-1" alt="Learn more in the documentation">
            </a>
        </div>

        <div class="w-full md:w-1/2">
            @component('_components.code-editor')
                <div class="editor-row">
                    <p class="line-number">1</p>
                    <div class="line-code">
                        <span class="text-pink">var <span class="text-yellow">settings</span> = {</span>    
                    </div>
                </div>

                <div class="editor-row">
                    <p class="line-number">2</p>
                    <div class="line-code ml-4">
                        <span class="text-pink">"url": </span>
                        <span class="text-yellow"> "https://epaygh.com/api/v1/charge", </span>
                    </div>
                </div>

                <div class="editor-row">
                    <p class="line-number">3</p>
                    <div class="line-code ml-4">
                        <span class="text-pink">"method":</span>     
                        <span class="text-yellow">"POST",</span> 
                    </div>
                </div>

                <div class="editor-row">
                    <p class="line-number">4</p>
                    <div class="line-code ml-4">
                        <span class="text-pink">"timeout":</span> 
                        <span class="text-yellow">0,</span>
                    </div>
                </div>

                <div class="editor-row">
                    <p class="line-number">5</p>
                    <div class="line-code ml-4"> 
                        <span class="text-pink">"headers": </span>
                        <span class="text-yellow">{"Content-Type": "application/json"},</span>
                    </div>
                </div>

                <div class="editor-row">
                    <p class="line-number">6</p>
                    <div class="line-code ml-6"> 
                        <span class="text-pink">"data": </span>
                        <span class="text-yellow">
                            "{\t\n\t\"reference\" : \"EP-68JNSAS56\",<br class="hidden sm:block">
                                \n\t\"amount\" : 1.00, 
                              \n\t\"payment_method\" : \"card\",\n\t\"customer_name\": \"Akosua Manu\",<br>
                              \n\t\"customer_email\" : \"akosua@gmail.com\",<br>
                              \n\t\"customer_telephone\" : \"054*******\",\n}",
                        </span>
                    </div>
                </div>


                <div class="editor-row">
                    <p class="line-number">7</p>
                    <div class="line-code">
                        <span class="text-pink">};</span>
                    </div>
                </div>


                <div class="editor-row">
                    <p class="line-number">8</p>
                    <div class="line-code">
                        <span class="text-pink">$.ajax(<span class="text-yellow">settings</span>).done(function (<span class="text-yellow">response</span>) {</span>
                    </div>
                </div>


                <div class="editor-row">
                    <p class="line-number">9</p>
                    <div class="line-code ml-4">
                        <span class="text-pink">console.log(<span class="text-yellow">response</span>);</span>
                    </div>
                </div>

                <div class="editor-row">
                    <p class="line-number">10</p>
                    <div class="line-code">
                        <span class="text-pink">});</span>
                    </div>
                </div>
            @endcomponent
        </div>
    </div>

    <div class="flex flex-col md:flex-row items-center container-content mt-6 px-4 sm:px-6 py-12 py-12">
        <div class="flex-col md:w-1/2 md:pr-10 lg:pr-20 pb-8 md:pb-0">
            <h3 class="mb-5 text-blue-darker">
                Accept payments through Social Media
            </h3>

            <p class="text-blue">
                Not a Developer? Although an Epay integration requires you to either be, or hire, a developer, you have many alternatives.
                Using our pre-built checkout page known as Payment Pages, you can securely, gloably and instantly accept payments without writing code or having a website.
                <br class="hidden sm:block"><br class="hidden sm:block">
                A Payment Page represented by a link, allows a business accept payments across all Social Media Platforms and even through text / Emails easily.
            </p>

            <a href="/docs/installation" title="Read Epay documentation"
                class="text-blue hover:text-blue-darker text-base no-underline hover:underline">
                Learn more in the docs <img src="/assets/img/icon-arrow.svg" class="w-4 -mb-1" alt="Learn more in the documentation">
            </a>
        </div>

        <div class="w-full md:w-1/2">
            @component('_components.code-editor')

                <div class="editor-row">
                    <p class="line-number"> </p>
                    <div class="line-code">Link: https://epaygh.com/pay/st-sponsorship-demo-app-security</div>
                </div>
            @endcomponent
        </div>
    </div>


    <div class="flex flex-col md:flex-row items-center container-content mt-6 px-4 sm:px-6">
        <div class="flex-col md:w-1/2 md:pr-10 lg:pr-20 pb-8 md:pb-0">
            <h3 class="mb-5 text-blue-darker">
            Full API Reference
            </h3>

            <p class="text-blue">
                Get familiar with our APIs. We've tried to make it as easy as possible to get up and running with an Epay integration.
            </p>

            <a href="/docs/installation" title="Read Epay Full API Reference"
                class="text-blue hover:text-blue-darker text-base no-underline hover:underline">
                Learn more in the docs <img src="/assets/img/icon-arrow.svg" class="w-4 -mb-1" alt="Learn more in the documentation">
            </a>
        </div>

        <div class="w-full md:w-1/2">
            @component('_components.code-editor')
                <div class="editor-row">
                    <p class="line-number"></p>
                    <div class="line-code">Authentication Endpoint: https://epaygh.com/api/v1/token</div>
                </div>

                <div class="editor-row">
                    <p class="line-number"></p>
                    <div class="line-code">Charge Endpoint : https://epaygh.com/api/v1/charge</div>
                </div>

                <div class="editor-row">
                    <p class="line-number"></p>
                    <div class="line-code">Customers Endpoint : https://epaygh.com/api/v1/customers</div>
                </div>

                <div class="editor-row">
                    <p class="line-number"></p>
                    <div class="line-code">Transactions Endpoint : https://epaygh.com/api/v1/transactions</div>
                </div>
            @endcomponent
        </div>
    </div>
</section>
