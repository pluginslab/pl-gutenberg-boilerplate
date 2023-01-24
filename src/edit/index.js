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
            <InspectorControls key='setting'>
                <PanelBody title='Frontend Example' initialOpen={true}>
                    <PanelRow>
                        <Button>Click Me</Button>
                    </PanelRow>
                </PanelBody>
            </InspectorControls>
            <FrontendExample isEditing={true} {...props} />
        </div>
    );
};

export default Edit;
