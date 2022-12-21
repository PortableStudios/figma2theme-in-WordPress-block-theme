# PDS WordPress block theme

This theme was built off of the "Twenty Twenty-Three" block theme by the WordPress team.

## Installation

> _Starting from the root directory of your WordPress site._

1. `cd wp-content/themes` to move into the themes directory.
2. If your WordPress site already has the Twenty Twenty-Three block theme installed then you'll need to remove the version you have `rm -rf twentytwentythree`.
3. `git clone git@github.com:PortableStudios/figma2theme-in-WordPress-block-theme.git twentytwentythree` to clone the repo into the `twentytwentythree` directory.

## Development

> _Starting from the root directory of your WordPress site._

1. `cd wp-content/themes/twentytwentythree` to move into the block theme's directory.
2. Follow step 1-3 of the [figma2theme usage instructions](https://github.com/PortableStudios/figma2theme#usage), except don't follow the "Install figma2theme to your package.json" bit of step 2, as it is already a dependancy.
3. `yarn install` to install the dependencies.
4. `yarn figma2theme generate-css` to pull the tokens from your figma file and generate the CSS tokens file.
