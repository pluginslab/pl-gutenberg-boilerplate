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
import metadata from "./block.json";
import Fields from "./components/general-sidebar-example";

registerBlockType(metadata.name, {
	edit: Edit,
	save: Save,
});

registerPlugin("pl-gutenberg-boilerplate", {
	render() {
		return <Fields />;
	},
});
