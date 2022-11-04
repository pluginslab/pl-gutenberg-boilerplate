const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const WooCommerceDependencyExtractionWebpackPlugin = require("@woocommerce/dependency-extraction-webpack-plugin");

module.exports = {
    ...defaultConfig,
    entry: {
        ...defaultConfig.entry,
        frontend: "./src/frontend.js",
    },
    module: {
        ...defaultConfig.module,
    },
    plugins: [
        ...defaultConfig.plugins.filter(
            (plugin) =>
                plugin.constructor.name !== "DependencyExtractionWebpackPlugin"
        ),
        new WooCommerceDependencyExtractionWebpackPlugin({}),
    ],
    resolve: {
        extensions: [".js", ".jsx", ".ts", ".tsx"],
    },
};
