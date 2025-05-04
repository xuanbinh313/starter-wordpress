import { registerBlockType } from '@wordpress/blocks';
import ServerSideRender from '@wordpress/server-side-render';
import { __ } from '@wordpress/i18n';

registerBlockType('mytheme/static-block', {
    title: 'Static Block',
    icon: 'smiley',
    category: 'widgets',
    edit() {
        return <ServerSideRender
            block="mytheme/static-block"
        />
    },
    save() {
        return null;
    }
});
