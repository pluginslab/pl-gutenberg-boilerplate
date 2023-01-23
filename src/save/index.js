/**
 * External dependencies
 */
import classNames from "classnames";

const Save = (props) => {
    const { className } = props.attributes;
    return (
        <div
            className={classNames(
                "pl-frontend-blocks-example-wrapper",
                className
            )}
        ></div>
    );
};

export default Save;
