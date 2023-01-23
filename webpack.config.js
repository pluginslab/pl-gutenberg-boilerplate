const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const WordPressDependencyExtractionWebpackPlugin = require("@wordpress/dependency-extraction-webpack-plugin");

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
        new WordPressDependencyExtractionWebpackPlugin({}),
    ],
    resolve: {
        extensions: [".js", ".jsx", ".ts", ".tsx"],
    },
};
