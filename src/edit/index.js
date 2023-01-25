/**
 * External dependencies
 */
import { useBlockProps } from "@wordpress/block-editor";

/**
 * Internal dependencies
 */
import "../editor.scss";

const Edit = (props) => {
	return <div {...useBlockProps()}>I'm editing.</div>;
};

export default Edit;
