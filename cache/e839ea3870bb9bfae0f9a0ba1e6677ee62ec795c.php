<?php $__env->startSection('documentation_content'); ?><h2>Custom 404 Page</h2>
<p>You can create a custom 404 error page to display when someone tries to access a page on your site that does not exist. How you do this depends on where your site is hosted.</p>
<h3>Using GitHub Pages or Netlify</h3>
<p>Some hosts, like GitHub Pages and Netlify, are automatically configured to look for a file named <code>404.html</code> at the root level of your site. If your Jigsaw site is using <a href="/docs/pretty-urls">pretty URLs</a>, you can specify a <code>permalink</code> in the file for your custom 404 page so that the <code>.html</code> extension is preserved:</p>
<blockquote>
<p><em>source/404.md</em></p>
</blockquote>
<pre><code>---
extends: _layouts.master
section: content
permalink: 404.html
---

### Sorry, that page does not exist.</code></pre>
<p>Note that YAML front matter can also be used in Blade files, so you can accomplish the same thing using a Blade file named <code>404.blade.php</code>.</p>
<p>This will create a file named <code>404.html</code> in your site's <code>build</code> directory.</p>
<h3>Using an Nginx Server</h3>
<p>You can create your custom 404 file as <code>404.md</code> or <code>404.blade.php</code> in your <code>source</code> directory, and if your Jigsaw site is using <a href="/docs/pretty-urls">pretty URLs</a>, it will be output as <code>/404/index.html</code>:</p>
<blockquote>
<p><em>source/404.md</em></p>
</blockquote>
<pre><code>---
extends: _layouts.master
section: content
---

### Sorry, that page does not exist.</code></pre>
<p>When hosting your site on an Nginx server, you will need to configure the <code>error_page</code> setting in your server's <code>nginx.conf</code> file, or in the specific configuration file that Nginx is using for your site. These configuration files are typically found in <code>/etc/nginx/</code>, though their location varies by server. If your site is managed using Laravel Forge, for example, the configuration file for your site will be located at <code>/etc/nginx/sites-enabled/{name-of-your-site}</code>; it can also be edited via Forge's &quot;Edit Nginx Configuration&quot; option in the &quot;Files&quot; menu.</p>
<p>Once you've located your Nginx configuration file, add the following line to the <code>server</code> block:</p>
<pre><code>error_page 404 /404;</code></pre>
<p>After you restart your Nginx server, it will look for the error page <code>/404/index.html</code> in your <code>build</code> directory whenever someone navigates to a page that does not exist.</p><?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>