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
	return (
		<div
			{...useBlockProps.save()}
			className={classNames("pl-frontend-blocks-example-wrapper", className)}
		>
			<p>I've been saved.</p>
		</div>
	);
};

export default Save;
