/**
 * External dependencies
 */
import { useBlockProps } from "@wordpress/block-editor";

/**
 * Internal dependencies
 */
import "../editor.scss";

const Edit = (props) => {
	return (
		<div {...useBlockProps()}>
			<p>I'm editing</p>
		</div>
	);
};

export default Edit;
