/**
 * External dependencies
 */
import { render } from "@wordpress/element";

/**
 * Internal dependencies
 */
import FrontendExample from "./components/frontend-example";

/**
 * This allows the block to render React components on the frontend.
 */
// eslint-disable-next-line @wordpress/no-global-event-listener
window.addEventListener("load", function () {
    const wrapper = document.querySelector(
        ".pl-frontend-blocks-example-wrapper"
    );
    if (wrapper) {
        const attributes = { ...wrapper.dataset };
        Object.keys(attributes).forEach((key) => {
            try {
                attributes[key] = JSON.parse(attributes[key]);
            } catch (e) {
                // We just ignore if it doesn't need to be parsed.
            }
        });
        render(
            <FrontendExample isEditing={false} attributes={attributes} />,
            wrapper
        );
    }
});
