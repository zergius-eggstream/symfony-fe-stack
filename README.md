# Setup for modern UX stack for Symfony

## Create new Symfony app

    symfony new . --version="6.3.*" --webapp

## Install Symfony Encore and its dependencies

Install Node.js and Node package manager (npm or yarn) for your platform

Install Encore bundle

    composer require symfony/webpack-encore-bundle
    yarn install

Install sass/scss support:
1. Uncomment `.enableSassLoader()` in `webpack.config.js`
2. Install node packages `yarn add sass-loader sass --dev`

Install additional dependencies like autoprefixer PostCSS:

1. Add `.enablePostCssLoader()` to `webpack.config.js`
2. Install node packages, like `yarn add postcss postcss-loader autoprefixer --dev`
3. Create `postcss.config.js` file
4. Add browserlist section to `package.json` file
5. **Do not forget to delete `node_modules/.cache/babel-loader/` folder if you change browserslist**

## Test if Symfony Encore works correctly

Create working project endpoint and add js/css using Encore. Modify `webpack.config.js` if needed.

