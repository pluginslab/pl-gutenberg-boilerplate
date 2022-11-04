/**
 * External dependencies
 */
import { registerBlockType } from '@wordpress/blocks';

/**
 * Internal dependencies
 */
import Edit from './edit';
import Save from './save';
import block from '../block.json';

registerBlockType( block, {
	edit: Edit,
	save: Save,
} );
