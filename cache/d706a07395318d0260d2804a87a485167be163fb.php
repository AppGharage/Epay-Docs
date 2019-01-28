<?php $__env->startSection('documentation_content'); ?><h2>Using a Starter Template</h2>
<p>To get you up and running with a fully-configured site quickly, Jigsaw includes two &quot;starter templates&quot;—one for a blog, one for open source documenation—that are ready for you to customize with your content. To use these templates as your starting point, simply add the name of the template to the <code>init</code> command:</p>
<pre><code class="language-bash">./vendor/bin/jigsaw init blog</code></pre>
<p>or</p>
<pre><code class="language-bash">./vendor/bin/jigsaw init docs</code></pre>
<p>Both the <code>blog</code> and <code>docs</code> starter templates include samples of common page types, and come pre-configured with:</p>
<ul>
<li>A fully responsive navigation bar</li>
<li><a href="https://tailwindcss.com/">Tailwind CSS</a>, a utility CSS framework that allows you to customize your design without touching a line of CSS</li>
<li><a href="https://www.purgecss.com/">Purgecss</a> to remove unused selectors from your CSS, resulting in smaller CSS files</li>
<li>Syntax highlighting using <a href="https://highlightjs.org/">highlight.js</a></li>
<li>A script that automatically generates a <code>sitemap.xml</code> file</li>
<li>A custom 404 page</li>
</ul>
<p>The <code>blog</code> template also includes:</p>
<ul>
<li>A component for accepting signups for a <a href="https://mailchimp.com/">Mailchimp</a> newsletter</li>
<li>A sample contact form</li>
<li>A search bar powered by <a href="http://fusejs.io/">Fuse.js</a> and <a href="https://vuejs.org/">Vue.js</a>, which indexes your content automatically and requires zero configuration</li>
</ul>
<p>...while the <code>docs</code> template includes:</p>
<ul>
<li>A sidebar navigation menu</li>
<li>A search bar powered by <a href="https://community.algolia.com/docsearch/">Algolia DocSearch</a>, and instructions on how to get started with their free indexing service</li>
</ul>
<hr />
<p><a class="block pt-6" href="http://jigsaw-blog-staging.tighten.co/" target="_blank">
<img src="/assets/img/template-blog.png" alt="Screenshot of Jigsaw blog starter template" class="border shadow rounded" />
</a></p>
<p><a href="http://jigsaw-blog-staging.tighten.co/" target="_blank">View a preview of the blog template</a></p>
<hr />
<p><a class="block pt-6" href="http://jigsaw-docs-staging.tighten.co/" target="_blank">
<img src="/assets/img/template-docs.png" alt="Screenshot of Jigsaw docs starter template" class="border shadow rounded" />
</a></p>
<p><a href="http://jigsaw-docs-staging.tighten.co/" target="_blank">View a preview of the docs template</a></p>
<hr />
<h3>Installing a Third-Party Starter Template</h3>
<p>You can also install a starter template that was created by a third party. Third-party templates that are registed as Composer packages on <a href="https://packagist.org/">Packagist</a> can be installed by specifying the vendor and package name when running the <code>init</code> command:</p>
<pre><code class="language-bash">./vendor/bin/jigsaw init tightenco/jigsaw-netlify-template</code></pre>
<hr />
<h3>Creating your Own Starter Template</h3>
<p>To create your own starter template to share with the Jigsaw community, simply set up your starter Jigsaw site in a public git repository, then register it as a Composer package on <a href="https://packagist.org/">Packagist</a>. Users will be able to install your starter template by specifying the <code>vendor/package</code> name in the <code>init</code> command.</p>
<p>When a user installs your template using the <code>init</code> command, Jigsaw will run the following steps by default:</p>
<ul>
<li>download the template files using Composer</li>
<li>install the base Jigsaw files</li>
<li>copy all the files from your template template into the new Jigsaw project, overwriting any matching base files</li>
<li>run <code>composer install</code>, <code>npm install</code>, and <code>npm run dev</code></li>
</ul>
<p>You can, however, customize the <code>init</code> process to gain full control over how a template is installed, by adding an <code>init.php</code> file to the root of the starter template. There are two ways to configure this init.php file:</p>
<h4 class="pt-4">1. Return an array of <code>init</code> settings</h4>
<p>The <code>init.php</code> file can return an array, with the following keys (all optional):</p>
<ul>
<li><code>delete</code>: a file, or an array of files, that should be deleted from the base install</li>
<li><code>ignore</code>: a file, or an array of files, that should be ignored from the starter template when installing</li>
<li><code>commands</code>: a shell command, or an array of commands, that should be run after the template files have been copied to the project</li>
</ul>
<p>For example:</p>
<blockquote>
<p><em>init.php</em></p>
</blockquote>
<pre><code class="language-php">&lt;<?php echo e('?php'); ?>


return [
    'delete' =&gt; [
        'bootstrap.php',
    ],
    'ignore' =&gt; [
        'readme.md',
    ],
    'commands' =&gt; [
        'composer install',
        'npm install',
        'npm run watch',
    ],
];</code></pre>
<ul>
<li>Both <code>delete</code> and <code>ignore</code> support <code>*</code> as a wildcard character.</li>
<li>The <code>vendor</code>, <code>node_modules</code>, and <code>build_*</code> directories are never copied from a starter template, if they are present.</li>
<li>If a <code>commands</code> key is not specified in this array, the default commands will be run. If one or more <code>commands</code> are specified, only the <code>commands</code> you specify (and not the defaults) will be run. If <code>commands</code> is an empty array, no shell commands whatsoever (including the defaults) will be run.</li>
</ul>
<h4 class="pt-4">2. Call methods on the <code>$init</code> variable</h4>
<p>For more fine-grained control, instead of returning a settings array in <code>init.php</code>, you can access the installer directly using the <code>$init</code> variable, and build your installation process using a fluent API. Available methods include:</p>
<ul>
<li><code>setup()</code>: Installs the base Jigsaw site files</li>
<li><code>delete()</code>: Delete one or more files from the project directory</li>
<li><code>ignore()</code>: Ignore one or more files when copying from the starter template</li>
<li><code>from()</code>: Specify a package subdirectory to copy files from</li>
<li><code>copy()</code>: Copy one or more (or all, if no parameter is specified) files from the starter template to the project</li>
<li><code>run()</code>: Run one or more shell commands</li>
<li><code>confirm()</code>: Ask the user a yes or no question</li>
<li><code>ask()</code>: Ask the user an open-ended or multiple-choice question</li>
<li><code>output()</code>, <code>info()</code>, <code>error()</code>, <code>comment()</code>: Write output to the console</li>
</ul>
<blockquote>
<p><em><code>delete()</code>, <code>ignore()</code>, and <code>copy()</code> support <code>*</code> as a wildcard character.</em></p>
</blockquote>
<div class="pb-4"></div>
<p>Using these commands, you can create more complex template installers. For example:</p>
<blockquote>
<p><em>init.php</em></p>
</blockquote>
<pre><code class="language-php">&lt;<?php echo e('?php'); ?>


$init-&gt;setup()
    -&gt;delete('webpack.mix.js')
    -&gt;copy('base');

$theme = $init-&gt;ask(
    'What theme would you like to use?',
    ['l' =&gt; 'light', 'd' =&gt; 'dark'],
    $default = 'l'
);

switch ($theme) {
    case 'd':
        $init-&gt;from('themes/dark')-&gt;copy();
        break;

    default:
        $init-&gt;from('themes/light')-&gt;copy();
        break;
}

$init-&gt;output('Finishing installation...')
    -&gt;run([
        'composer install',
        'npm install',
        './node_modules/.bin/tailwind init tailwind.js',
    ]);</code></pre>
<hr />
<div class="pt-2"></div>
<blockquote>
<p>If you've created a starter template that you'd like to share, tell us on Twitter at <a href="https://twitter.com/tightenco">@tightenco</a> or open an issue in the <a href="https://github.com/tightenco/jigsaw-site/issues">Jigsaw docs repo</a>. Very soon, we'll be adding a showcase of well-crafted templates created by the community, and we'd love to feature yours!</p>
</blockquote>
<hr />
<h3>Handling Existing Site Data</h3>
<p>When running <code>jigsaw init</code>, the command will check to see if you have already run <code>init</code> before, and have started creating your Jigsaw site. If so, you'll be prompted to either archive your existing site before initializing the new one (which will move all existing files to an <code>archived</code> directory), or delete your existing site and begin fresh:</p>
<p><img src="/assets/img/init-options.png" alt="Shell options when running Jigsaw init command" /></p><?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>