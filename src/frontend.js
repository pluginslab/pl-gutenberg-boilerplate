/**
 * External dependencies
 */
import { SearchControl } from "@wordpress/components";
import { render, useState } from "@wordpress/element";
import { useSelect } from "@wordpress/data";
import { store as coreDataStore } from "@wordpress/core-data";

/**
 * Internal dependencies
 */
import PagesList from "./components/pagelist";

const FrontEnd = ({ perPage = 10 }) => {
	const [searchTerm, setSearchTerm] = useState("");
	const { pages, hasResolved } = useSelect(
		(select) => {
			const query = { per_page: perPage };
			if (searchTerm) {
				query.search = searchTerm;
			}
			const selectorArgs = ["postType", "post", query];
			return {
				pages: select(coreDataStore).getEntityRecords(...selectorArgs),
				hasResolved: select(coreDataStore).hasFinishedResolution(
					"getEntityRecords",
					selectorArgs
				),
			};
		},
		[searchTerm]
	);
	return (
		<div>
			<SearchControl value={searchTerm} onChange={setSearchTerm} />
			<PagesList hasResolved={hasResolved} pages={pages} />
		</div>
	);
};

window.addEventListener("load", function () {
	const wrapper = document.querySelector(".pl-frontend-blocks-example-wrapper");
	if (!wrapper) {
		return;
	}
	const attributes = wrapper.dataset;
	render(<FrontEnd {...attributes} />, wrapper);
});
