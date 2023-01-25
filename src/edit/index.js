/**
 * External dependencies
 */
import { useBlockProps } from "@wordpress/block-editor";
import { TextControl } from "@wordpress/components";

/**
 * Internal dependencies
 */
import "../editor.scss";

const Edit = (props) => {
	return (
		<div {...useBlockProps()}>
			<TextControl />
		</div>
	);
};

export default Edit;
