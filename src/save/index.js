/**
 * External dependencies
 */
import classNames from "classnames";
import { useBlockProps } from "@wordpress/block-editor";

/**
 * Internal dependencies
 */
import "../style.scss";

const Save = (props) => {
	const { className } = props.attributes;
	const { perPage = 5 } = props.attributes;
	return (
		<div
			data-per-page={perPage}
			{...useBlockProps.save()}
			className={classNames("pl-frontend-blocks-example-wrapper", className)}
		></div>
	);
};

export default Save;
