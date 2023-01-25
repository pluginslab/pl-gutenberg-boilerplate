/**
 * External dependencies
 */
import { SearchControl, TextControl } from "@wordpress/components";
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import { PanelBody } from "@wordpress/components";

/**
 * Internal dependencies
 */
import "../editor.scss";
import PageList from "../components/pagelist";

const samplePosts = [
	{
		id: 1,
		title: {
			rendered: "Post 1",
		},
	},
	{
		id: 2,
		title: {
			rendered: "Post 2",
		},
	},
];

const Edit = (props) => {
	const {
		attributes: { perPage },
		setAttributes,
	} = props;

	const onChangeContent = (newContent) => {
		setAttributes({ perPage: newContent });
	};

	return (
		<div {...useBlockProps()}>
			<InspectorControls key="setting">
				<PanelBody title="Frontend Example" initialOpen={true}>
					<TextControl
						label="Results Per Page"
						help="Type a number from 0 to 100."
						value={perPage}
						onChange={onChangeContent}
					/>
				</PanelBody>
			</InspectorControls>
			<SearchControl />
			<PageList hasResolved={true} pages={samplePosts} />
		</div>
	);
};

export default Edit;
