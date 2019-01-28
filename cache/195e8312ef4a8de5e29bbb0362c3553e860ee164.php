<?php $__env->startSection('body'); ?>
<div class="pt-6 font-normal text-xl bg-brown-lightest">
    <?php echo $__env->make('_components.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container-content px-4 sm:px-6 py-4 sm:py-8">
        <div class="flex-col mb-0 sm:mb-8 pb-4">
            <h1 class="text-4xl md:text-5xl text-blue-darker leading-none">
                The next Generation <br />
                Payments Platform
            </h1>

            <p class="max-w-md mt-4 text-grey-dark lead">
                Epay is a payments platform designed to allow African Businesses, Accept / Disburse payments.<br class="hidden sm:block">
                Accept Credit Cards and / or Mobile Money on your website or mobile app in minutes!
            </p>
        </div>
    </div>

    <?php echo $__env->make('_components.epay-is-awesome', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('_components.getting-started', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('_components.features', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('_components.accept-payments-globally', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('_components.built-with-epay', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<?php echo $__env->make('_components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>