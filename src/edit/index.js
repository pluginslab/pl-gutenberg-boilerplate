/**
 * External dependencies
 */
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import { Button, PanelRow, PanelBody } from "@wordpress/components";

/**
 * Internal dependencies
 */
import FrontendExample from "../components/frontend-example";
import "../editor.scss";

const Edit = (props) => {
	return (
		<div {...useBlockProps()}>
			<p>I'm editing</p>
		</div>
	);
};

export default Edit;
