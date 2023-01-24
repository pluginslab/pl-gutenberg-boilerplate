import "../../style.scss";

const FrontendExample = (props) => {
	const { isEditing } = props;

	if (isEditing) {
		return <p className="backend">This is the block editor (backend).</p>;
	}
	return <p className="frontend">This is the frontend.</p>;
};

export default FrontendExample;
