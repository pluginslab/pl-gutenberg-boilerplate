/**
 * External dependencies
 */
import { registerBlockType } from "@wordpress/blocks";
import { registerPlugin } from "@wordpress/plugins";

/**
 * Internal dependencies
 */
import Edit from "./edit";
import Save from "./save";
import block from "../block.json";
import Fields from "./components/general-sidebar-example";

registerBlockType(block, {
    edit: Edit,
    save: Save,
});

registerPlugin("pl-gutenberg-boilerplate", {
    render() {
        return <Sidebar />;
    },
});
