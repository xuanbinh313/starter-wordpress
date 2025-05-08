import { registerBlockType } from "@wordpress/blocks";
import ServerSideRender from "@wordpress/server-side-render";
import { __ } from "@wordpress/i18n";

registerBlockType("mytheme/header-block", {
  edit() {
    return <ServerSideRender block="mytheme/header-block" />;
  },
  save() {
    return null;
  },
});
