// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';
// import tailwindcss from '@tailwindcss/vite';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//         tailwindcss(),
//     ],
// });



// TEST
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fg from 'fast-glob'; // import por defecto, no named export

const vistaScripts = fg.sync('resources/js/**/*.js', {
    ignore: ['resources/js/app.js'],
});

const vistaStyles = fg.sync('resources/css/**/*.css', {
    ignore: ['resources/css/app.css'],
});

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                ...vistaScripts,
                ...vistaStyles,
            ],
            refresh: true,
        }),
    ],
});