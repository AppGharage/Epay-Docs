<?php $__env->startSection('documentation_content'); ?><h2>Page Metadata</h2>
<p>For each page, Jigsaw provides you with certain metadata values through <code>get</code> functions accessed on the <code>$page</code> object:</p>
<p><code>$page-&gt;getPath()</code> returns the path to the current page, relative to the site root</p>
<p><code>$page-&gt;getUrl()</code> returns the full URL to the item, if <code>baseUrl</code> was defined in <code>config.php</code></p>
<p><code>$page-&gt;getFilename()</code> returns the filename of the page, without extension (e.g. <code>my-first-page</code>)</p>
<p><code>$page-&gt;getExtension()</code> returns the file extension (e.g. <code>md</code>)</p><?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>