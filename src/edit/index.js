/**
 * External dependencies
 */
import { useBlockProps } from '@wordpress/block-editor';

/**
 * Internal dependencies
 */
import FrontendExample from '../components/frontend-example'

const Edit = (props) => {
	return (
		<div {...useBlockProps()}>
			<FrontendExample isEditing={ true } { ...props } />
		</div>
	);
};

export default Edit;
