const FrontendExample = ( props ) => {
	const { isEditing } = props;

	if ( isEditing ) {
		return <p>This is the block editor (backend).</p>;
	}
	return <p>This is the frontend.</p>;
};

export default FrontendExample;
