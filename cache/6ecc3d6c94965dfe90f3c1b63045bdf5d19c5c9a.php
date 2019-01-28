<section class="flex -mb-32 justify-center container-content px-4 sm:px-6">
    <div class="flex flex-col w-full md:w-4/5 lg:w-2/3">
        <?php $__env->startComponent('_components.code-editor'); ?>
            <div class="editor-row">
                <p class="line-number">1</p>
                <div class="line-code">
                    <span class="text-pink">curl --location --request POST</span> <span class="text-yellow">'https://epaygh.com/api/v1/charge' \</span>
                </div>
            </div>

            <div class="editor-row">
                <p class="line-number">2</p>
                <div class="line-code">
                <span class="text-pink">--header </span>: <span class="text-yellow">'Content-Type: application/json' \</span>
                    <span class="text-pink"> --data '{ </span>
                </div>
            </div>

            <div class="editor-row">
                <p class="line-number">3</p>
                <div class="line-code">
                    <span class="text-pink">\'reference\' :</span>
                    <span class="text-yellow"> \'EP-2DJEKM5CKDNSK\',</span>
                </div>
            </div>

            <div class="editor-row">
                <p class="line-number">4</p>
                <div class="line-code">
                    <span class="text-pink">\'amount\' :</span>
                    <span class="text-yellow"> 1.00,</span>
                </div>
            </div>

            <div class="editor-row">
                <p class="line-number">5</p>
                <div class="line-code">
                    <span class="text-pink">\'payment_method\' :</span>
                    <span class="text-yellow"> \'momo\',</span>
                </div>
            </div>

            <div class="editor-row">
                <p class="line-number">6</p>
                <div class="line-code">
                    <span class="text-pink">\'customer_name\' :</span>
                    <span class="text-yellow"> \'Akosua Manu\',</span>
                </div>
            </div>

            <div class="editor-row">
                <p class="line-number">7</p>
                <div class="line-code">
                    <span class="text-pink">\'customer_email\' :</span>
                    <span class="text-yellow"> \'akosuamanu@gmail.com\',</span>
                </div>
            </div>

            <div class="editor-row">
                <p class="line-number">8</p>
                <div class="line-code">
                    <span class="text-pink">\'customer_telephone\' :</span>
                    <span class="text-yellow"> \'054*******\',</span>
                </div>
            </div>

            <div class="editor-row">
                <p class="line-number">9</p>
                <div class="line-code">
                    <span class="text-pink">\'mobile_wallet_number\' :</span>
                    <span class="text-yellow"> \'054*******\',</span>
                </div>
            </div>

            <div class="editor-row">
                <p class="line-number">10</p>
                <div class="line-code">
                    <span class="text-pink">\'mobile_wallet_network\' : </span>
                    <span class="text-yellow"> \'mtn\',</span>
                </div>
            </div>

            <div class="editor-row">
                <p class="line-number">11</p>
                <div class="line-code">
                    <span class="text-pink">}'</span>
                </div>
            </div>

        <?php echo $__env->renderComponent(); ?>
    </div>

    <div
        class="hidden md:flex flex-col w-2/3 h-70 lg:h-76 -ml-10 pt-10 -mt-12 rounded-lg justify-center items-center shadow-lg select-none z-50"
        style="background:url('/assets/img/browser-illustration.svg') no-repeat; background-size: cover;"
    >
        <h2 class="text-grey-darker text-2xl lg:text-3xl">Secure, Global & Instant Payments!</h2>

        <p class="text-grey-darker text-base">
            Contact us at
            <a href="mailto:info@epaygh.com?subject='Hello I need Support'" class="text-blue-lighter">info@epaygh.com</a> 
            / <a href="tel:+233508220167" class="text-blue-lighter"> (+233) 0508220167 </a> 
        </p>
    </div>
</section>
