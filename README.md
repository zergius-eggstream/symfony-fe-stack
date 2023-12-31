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
4. Add browserslist section to `package.json` file
5. **Do not forget to delete `node_modules/.cache/babel-loader/` folder if you change browserslist**

Install 3rd party libraries, like

    yarn add bootstrap @popperjs/core font-awesome --dev

and import them in css file

    @import '~bootstrap';
    @import '~font-awesome';

## Test if Symfony Encore works correctly

Create working project endpoint and add js/css using Encore. Modify `webpack.config.js` if needed.

## Install Symfony Stimulus and its dependencies

Install Stimulus Bundle

    composer require symfony/stimulus-bundle
    yarn install --force

Add example usage of Stimulus

## Install Symfony UX Turbo

Install UX Turbo package

    composer require symfony/ux-turbo
    yarn install --force

Create some pages and make example usage of UX Turbo

# This project usage
## Dev Install

    docker-compose -p sfes up -d
    php bin/console doctrine:database:create --if-not-exists
    php bin/console doctrine:migrations:migrate -n
    php bin/console doctrine:fixtures:load
    yarn install

## Dev Usage

    docker-compose -p sfes up -d
    symfony server:start
    yarn watch