let build = require("./tasks/build.js");
let mix = require("laravel-mix");
let tailwindcss = require("tailwindcss");
require("laravel-mix-purgecss");

mix.disableSuccessNotifications();
mix.setPublicPath("source/assets/build");

mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(["source/**/*.md", "source/**/*.php", "source/**/*.less"])
    ]
});

mix.js('source/_assets/js/app.js', 'js/')
    .less("source/_assets/less/main.less", "css/")
    .options({
        postCss: [tailwindcss("tailwind.js")]
    })
    .purgeCss({
        enabled: true,
        extensions: ['html', 'js', 'php', 'md', 'vue'],
        folders: ['source'],
        whitelistPatterns: [/language/, /hljs/, /algolia/, /docsearch/, /ds-/],
    })
    .version();

if (! mix.inProduction()) {
    mix.sourceMaps();
}
