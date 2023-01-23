import { PluginDocumentSettingPanel } from "@wordpress/edit-post";
import { Button } from "@wordpress/components";

export default function Sidebar() {
    return (
        <PluginDocumentSettingPanel
            title='My Plugin Settings'
            initialOpen='true'
        >
            <Button>Click Me</Button>
        </PluginDocumentSettingPanel>
    );
}
